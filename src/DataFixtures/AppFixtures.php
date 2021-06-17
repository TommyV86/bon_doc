<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\RDV;
use App\Entity\Medecin;
use App\Entity\Patient;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 5; $i++) {
            $rdv = new Rdv();
            $rdv->setDateRdv(new \DateTime('2021-10-12'));
            $rdv->setHeureRdv(new \DateTime('15:50'));

            $medecin = new Medecin();
            $medecin->setNom("doc");
            $nomMedecin = $medecin->getNom();

            $rdv->setMedecin($medecin);

            $patient = new Patient();
            $patient->setNom("pat");

            $rdv->setPatient($patient);

            $manager->persist($rdv);
            $manager->flush();
        }
    }
}