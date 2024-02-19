<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240218202709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur ADD groupe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B37A45358C FOREIGN KEY (groupe_id) REFERENCES equipe (id)');
        $this->addSql('CREATE INDEX IDX_1D1C63B37A45358C ON utilisateur (groupe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B37A45358C');
        $this->addSql('DROP INDEX IDX_1D1C63B37A45358C ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP groupe_id');
    }
}
