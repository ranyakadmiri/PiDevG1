<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301164443 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE assurance (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, condition_age VARCHAR(255) DEFAULT NULL, condition_medicale VARCHAR(255) DEFAULT NULL, condition_financiere VARCHAR(255) DEFAULT NULL, duree_couv VARCHAR(255) NOT NULL COMMENT \'(DC2Type:dateinterval)\', franchise DOUBLE PRECISION NOT NULL, prime DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, post_id INT DEFAULT NULL, contenu VARCHAR(255) DEFAULT NULL, datecreation DATE DEFAULT NULL, nbrlikes INT DEFAULT NULL, nbrdislikes INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, rate DOUBLE PRECISION DEFAULT NULL, INDEX IDX_67F068BC4B89032C (post_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande (id_d INT AUTO_INCREMENT NOT NULL, assurance_id INT DEFAULT NULL, montant DOUBLE PRECISION NOT NULL, user INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, commentaire LONGTEXT NOT NULL, status TINYINT(1) DEFAULT NULL, INDEX IDX_2694D7A5B288C3E3 (assurance_id), PRIMARY KEY(id_d)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, auteur VARCHAR(255) DEFAULT NULL, date DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5B288C3E3 FOREIGN KEY (assurance_id) REFERENCES assurance (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC4B89032C');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5B288C3E3');
        $this->addSql('DROP TABLE assurance');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE demande');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
