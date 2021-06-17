<?php

namespace App\Tests\Entity;

use App\Entity\RDV;
use Symfony\Bundle\FrameworkBundle\test\KernelTestCase;

class RdvTest extends KernelTestCase
{
    // test date_rdv
    public function testSetDateRdv()
    {
        $rdv = new RDV();
        $date = new \DateTime();

        $rdv->setDateRdv($date);
        $date_rdv = $rdv->getDateRdv();

        $this->assertEquals($date, $date_rdv, "setdate_rdv does not affect the right value. ");
    }

    public function testGetDateRdv()
    {
        $rdv = new RDV();
        $date = new \DateTime();

        $rdv->setDateRdv($date);
        $date_rdv = $rdv->getDateRdv();

        $this->assertEquals($date, $date_rdv, "getDateRdv returnes bad values. ");
    }

    public function testDateRdvIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $rdv = new RDV();
        $date = new \DateTime();
        $rdv->setDateRdv($date);
        $errors = $validator->validate($rdv);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 3 chars");
    }

    public function testDateRdvIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $rdv = new RDV();
        $date = new \DateTime();
        $rdv->setDateRdv($date);
        $errors = $validator->validate($rdv);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
    }

    // test heure_rdv
    public function testSetHeureRdv()
    {
        $rdv = new RDV();
        $heure = new \DateTime();

        $rdv->setHeureRdv($heure);
        $heure_rdv = $rdv->getHeureRdv();

        $this->assertEquals($heure, $heure_rdv, "setheure_rdv does not affect the right value. ");
    }

    public function testGetHeureRdv()
    {
        $rdv = new RDV();
        $heure = new \DateTime();

        $rdv->setHeureRdv($heure);
        $heure_rdv = $rdv->getHeureRdv();

        $this->assertEquals($heure, $heure_rdv, "getHeureRdv returnes bad values. ");
    }

    public function testHeureRdvIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $rdv = new RDV();
        $heure = new \DateTime();
        $rdv->setHeureRdv($heure);
        $errors = $validator->validate($rdv);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 3 chars");
    }

    public function testHeureRdvIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $rdv = new RDV();
        $heure = new \DateTime();
        $rdv->setHeureRdv($heure);
        $errors = $validator->validate($rdv);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
    }
}
