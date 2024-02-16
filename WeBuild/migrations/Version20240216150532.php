<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240216150532 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE demande (id_d INT AUTO_INCREMENT NOT NULL, assurance_id INT DEFAULT NULL, montant DOUBLE PRECISION NOT NULL, user INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, commentaire LONGTEXT NOT NULL, INDEX IDX_2694D7A5B288C3E3 (assurance_id), PRIMARY KEY(id_d)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5B288C3E3 FOREIGN KEY (assurance_id) REFERENCES assurance (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5B288C3E3');
        $this->addSql('DROP TABLE demande');
    }
}
