<?php

namespace App\DataFixtures;

use App\Entity\Patient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PatientFixtures extends Fixture
{   

    public function load(ObjectManager $manager)
    {
        $patient = new Patient(); 
        $patient->setNom('tutu');
        $patient->setPrenom('toto');
        $patient->setAdresse("15 rue de la porte Gellée, 44100 NANTES");
        $patient->setTelephone('0102030405');
        $patient->setEmail('tutu@tutu.fr');
        $patient->setHash('azerty123.');
        $patient->setDateInscription(new \DateTime());
        $patient->setDateNaissance(new \Datetime('1990-03-27'));
        $manager->persist($patient);
        $manager->flush();
    }
}
