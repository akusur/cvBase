<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190621103519 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE applicant DROP CONSTRAINT fk_caad1019d3728193');
        $this->addSql('DROP INDEX uniq_caad1019d3728193');
        $this->addSql('ALTER TABLE applicant RENAME COLUMN person_id_id TO person_id');
        $this->addSql('ALTER TABLE applicant ADD CONSTRAINT FK_CAAD1019217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CAAD1019217BBB47 ON applicant (person_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE applicant DROP CONSTRAINT FK_CAAD1019217BBB47');
        $this->addSql('DROP INDEX UNIQ_CAAD1019217BBB47');
        $this->addSql('ALTER TABLE applicant RENAME COLUMN person_id TO person_id_id');
        $this->addSql('ALTER TABLE applicant ADD CONSTRAINT fk_caad1019d3728193 FOREIGN KEY (person_id_id) REFERENCES person (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX uniq_caad1019d3728193 ON applicant (person_id_id)');
    }
}
