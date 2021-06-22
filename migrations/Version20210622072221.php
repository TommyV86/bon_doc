<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210622072221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient CHANGE telephone telephone VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE rdv DROP INDEX UNIQ_10C31F866B899279, ADD INDEX IDX_10C31F866B899279 (patient_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient CHANGE telephone telephone INT NOT NULL');
        $this->addSql('ALTER TABLE rdv DROP INDEX IDX_10C31F866B899279, ADD UNIQUE INDEX UNIQ_10C31F866B899279 (patient_id)');
    }
}
