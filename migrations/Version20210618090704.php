<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210618090704 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE medecin (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(20) NOT NULL, prenom VARCHAR(20) NOT NULL, specialite VARCHAR(20) NOT NULL, sexe VARCHAR(20) NOT NULL, adresse VARCHAR(80) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(80) NOT NULL, date_inscription DATE NOT NULL, date_naissance DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, date_naissance DATE NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, adresse VARCHAR(255) NOT NULL, date_inscription DATE NOT NULL, hash VARCHAR(255) NOT NULL, sexe VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rdv (id INT AUTO_INCREMENT NOT NULL, medecin_id INT NOT NULL, patient_id INT NOT NULL, date_rdv DATE NOT NULL, heure_rdv DATETIME NOT NULL, INDEX IDX_10C31F864F31A84 (medecin_id), UNIQUE INDEX UNIQ_10C31F866B899279 (patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F864F31A84 FOREIGN KEY (medecin_id) REFERENCES medecin (id)');
        $this->addSql('ALTER TABLE rdv ADD CONSTRAINT FK_10C31F866B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F864F31A84');
        $this->addSql('ALTER TABLE rdv DROP FOREIGN KEY FK_10C31F866B899279');
        $this->addSql('DROP TABLE medecin');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE rdv');
    }
}
