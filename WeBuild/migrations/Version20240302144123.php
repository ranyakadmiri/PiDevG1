<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240302144123 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE demande (id_d INT AUTO_INCREMENT NOT NULL, assurance_id INT DEFAULT NULL, montant DOUBLE PRECISION NOT NULL, user INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, commentaire LONGTEXT NOT NULL, status TINYINT(1) DEFAULT NULL, INDEX IDX_2694D7A5B288C3E3 (assurance_id), PRIMARY KEY(id_d)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE location (id_l INT AUTO_INCREMENT NOT NULL, pack_materiel_id INT DEFAULT NULL, date_d DATE NOT NULL, date_f DATE NOT NULL, id_user INT NOT NULL, INDEX IDX_5E9E89CBE27ED776 (pack_materiel_id), PRIMARY KEY(id_l)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pack_materiel (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(30) NOT NULL, description VARCHAR(800) NOT NULL, prix INT NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5B288C3E3 FOREIGN KEY (assurance_id) REFERENCES assurance (id)');
        $this->addSql('ALTER TABLE location ADD CONSTRAINT FK_5E9E89CBE27ED776 FOREIGN KEY (pack_materiel_id) REFERENCES pack_materiel (id)');
        $this->addSql('DROP TABLE comments');
        $this->addSql('ALTER TABLE commentaire ADD post_id INT DEFAULT NULL, ADD nbrlikes INT DEFAULT NULL, ADD nbrdislikes INT DEFAULT NULL, ADD rate DOUBLE PRECISION DEFAULT NULL, CHANGE contenu contenu VARCHAR(255) DEFAULT NULL, CHANGE datecreation datecreation DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('CREATE INDEX IDX_67F068BC4B89032C ON commentaire (post_id)');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D63379586');
        $this->addSql('DROP INDEX IDX_5A8A6C8D63379586 ON post');
        $this->addSql('ALTER TABLE post DROP comments_id, CHANGE titre titre VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE auteur auteur VARCHAR(255) DEFAULT NULL, CHANGE date date DATE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comments (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5B288C3E3');
        $this->addSql('ALTER TABLE location DROP FOREIGN KEY FK_5E9E89CBE27ED776');
        $this->addSql('DROP TABLE demande');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP TABLE pack_materiel');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC4B89032C');
        $this->addSql('DROP INDEX IDX_67F068BC4B89032C ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP post_id, DROP nbrlikes, DROP nbrdislikes, DROP rate, CHANGE contenu contenu VARCHAR(255) NOT NULL, CHANGE datecreation datecreation DATETIME NOT NULL');
        $this->addSql('ALTER TABLE post ADD comments_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE auteur auteur VARCHAR(255) NOT NULL, CHANGE date date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D63379586 FOREIGN KEY (comments_id) REFERENCES commentaire (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D63379586 ON post (comments_id)');
    }
}
