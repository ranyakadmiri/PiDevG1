<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240215133453 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task ADD id_chantier_id INT NOT NULL');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB25C8D2C96A FOREIGN KEY (id_chantier_id) REFERENCES chantier (id)');
        $this->addSql('CREATE INDEX IDX_527EDB25C8D2C96A ON task (id_chantier_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB25C8D2C96A');
        $this->addSql('DROP INDEX IDX_527EDB25C8D2C96A ON task');
        $this->addSql('ALTER TABLE task DROP id_chantier_id');
    }
}
