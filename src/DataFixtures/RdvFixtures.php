<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\RDV;
use App\Entity\Medecin;
use App\Entity\Patient;

class RdvFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        for($i = 0; $i < 9; $i++)
        {

            $medecin = new Medecin();
            $medecin->setNom('VERSETTI');
            $medecin->setPrenom('Tommy');
            $medecin->setSpecialite('Dentiste');
            $medecin->setSexe("masculin");
            $medecin->setAdresse('15 rue de la porte gellée, 44100 NANTES');
            $medecin->setTelephone('0320568179');
            $medecin->setEmail('tutu@tutu.fr');
            $medecin->setDateInscription(new \DateTime());
            $medecin->setDateNaissance(new \Datetime('1990-03-27'));
            $manager->persist($medecin);


            $patient = new Patient(); 
            $patient->setNom('tutu');
            $patient->setPrenom('toto');
            $patient->setAdresse("15 rue de la porte Gellée, 44100 NANTES");
            $patient->setTelephone('0102030405');
            $patient->setEmail('tutu@tutu.fr');
            $patient->setHash('azerty123.');
            $patient->setDateInscription(new \DateTime());
            $patient->setDateNaissance(new \Datetime('1990-03-27'));
            $patient->setSexe('Male');
            $manager->persist($patient);

            $rdv = new Rdv();
            $rdv->setDateRdv(new \DateTime('2021-0'.($i).'-0'.($i).''));
            $rdv->setHeureRdv(new \DateTime('2021-0'.($i).'-0'.($i).' 14:5'.($i).''));

            $rdv->setMedecin($medecin);
            $rdv->setPatient($patient);

            $manager->persist($rdv);
        }
        $manager->flush();
    }
}