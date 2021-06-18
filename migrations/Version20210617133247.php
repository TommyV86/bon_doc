<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210617133247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medecin CHANGE telephone telephone VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE rdv ADD medecin_id INT NOT NULL, ADD patient_id INT NOT NULL');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F864F31A84 FOREIGN KEY (medecin_id) REFERENCES medecin (id)');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F866B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('CREATE INDEX IDX_10C31F864F31A84 ON rdv (medecin_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_10C31F866B899279 ON rdv (patient_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medecin CHANGE telephone telephone INT NOT NULL');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F864F31A84');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F866B899279');
        $this->addSql('DROP INDEX IDX_10C31F864F31A84 ON rdv');
        $this->addSql('DROP INDEX UNIQ_10C31F866B899279 ON rdv');
        $this->addSql('ALTER TABLE rdv DROP medecin_id, DROP patient_id');
    }
}
