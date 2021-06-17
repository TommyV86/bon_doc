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
        $patient->setEmail('tutu@tutu.fr');


        $manager->persist($patient);
        $manager->flush();
    }
}
