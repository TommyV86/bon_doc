<?php

namespace App\DataFixtures;

use App\Entity\Medecin;
use DateTimeInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class MedecinFixtures extends Fixture
{

    public function load(ObjectManager $manager)
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

        $manager->flush();
    }
}
