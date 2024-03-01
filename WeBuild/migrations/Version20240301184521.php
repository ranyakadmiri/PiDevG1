<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301184521 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE location (id_l INT AUTO_INCREMENT NOT NULL, pack_materiel_id INT DEFAULT NULL, date_d DATE NOT NULL, date_f DATE NOT NULL, id_user INT NOT NULL, INDEX IDX_5E9E89CBE27ED776 (pack_materiel_id), PRIMARY KEY(id_l)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pack_materiel (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(30) NOT NULL, description VARCHAR(800) NOT NULL, prix INT NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE location ADD CONSTRAINT FK_5E9E89CBE27ED776 FOREIGN KEY (pack_materiel_id) REFERENCES pack_materiel (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE location DROP FOREIGN KEY FK_5E9E89CBE27ED776');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP TABLE pack_materiel');
    }
}
