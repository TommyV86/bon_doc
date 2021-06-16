<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Medecin;
use Symfony\Bundle\FrameworkBundle\Test_KernelTestCase;

class MedecinTest extends TestCase
{
    // test nom
    public function testSetName()
    {
        $medecin = new Medecin();
        $medecin->setName("VERSETTI");
        $name = $medecin->getName();

        $this->assertEquals("VERSETTI", $name, "setName does not affect the right value. ");
    }

    public function testGetName()
    {
        $medecin = new Medecin();
        $medecin->setName("VERSETTI");
        $name = $medecin->getName();

        $this->assertEquals("VERSETTI", $name, "getName returnes bad values. ");
    }

    public function testNameIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setName("VE");
        $medecin = $validator->validate($medecin);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testNameIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setNom("VE");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test prenom
    public function testSetFirstName()
    {
        $medecin = new Medecin();
        $medecin->setFirstName("Tommy");
        $firstName = $medecin->getFirstName();

        $this->assertEquals("Tommy", $firstName, "setFirstName does not affect the right value. ");
    }

    public function testGetFirstName()
    {
        $medecin = new Medecin();
        $medecin->setFirstName("Tommy");
        $firstName = $medecin->getFirstName();

        $this->assertEquals("Tommy", $firstName, "getFirstName returnes bad values. ");
    }

    public function testFirstNameIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setFirstName("TO");
        $errors = $validator->validate($medecin);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your first name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testFirstNameIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setFirstName("Tommy");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test specialite
    public function testSetSpecialty()
    {
        $medecin = new Medecin();
        $medecin->setSpecialty("Dentiste");
        $specialty = $medecin->getSpecialty();

        $this->assertEquals("Dentiste", $specialty, "setSpecialty does not affect the right value. ");
    }

    public function testGetSpecialty()
    {
        $medecin = new Medecin();
        $medecin->setSpecialty("Dentiste");
        $specialty = $medecin->getSpecialty();

        $this->assertEquals("Dentiste", $specialty, "setSpecialty returnes bad values. ");
    }

    public function testSpecialtyIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setSpecialty("DE");
        $errors = $validator->validate($medecin);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your specialty must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testSpecialtyIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $Medecin->setSpecialty("Dentiste");
        $errors = $validator->validate($Medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test adress
    public function testSetAdress()
    {
        $medecin = new Medecin();
        $medecin->setAdress("15 rue de la porte Gellée, 44100 NANTES");
        $adress = $medecin->getAdress();

        $this->assertEquals("15 rue de la porte Gellée, 44100 NANTES", $adress, "setAdress does not affect the right value. ");
    }

    public function testGetAdress()
    {
        $medecin = new Medecin();
        $medecin->setAdress("15 rue de la porte Gellée, 44100 NANTES");
        $adress = $medecin->getAdress();

        $this->assertEquals("15 rue de la porte Gellée, 44100 NANTES", $adress, "getAdress returnes bad values. ");
    }

    public function testAdressIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setName("15 rue de la porte Gellée");
        $medecin = $validator->validate($medecin);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 25 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 25 chars");
        $this->assertEquals("Your adress must be at least 25 characters long", $errors[0]->getMessage());
    }

    public function testAdressIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setAdress("15 rue de la porte Gellée, 44100 NANTES");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 25 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 25 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test Telephone
    public function testSetTelephone()
    {
        $medecin = new Medecin();
        $medecin->setTelephone("06-20-73-94-79");
        $telephone = $medecin->getTelephone();

        $this->assertEquals("06-20-73-94-79", $telephone, "setTelephone does not affect the right value. ");
    }

    public function testGetTelephone()
    {
        $medecin = new Medecin();
        $medecin->setTelephone("06-20-73-94-79");
        $telephone = $medecin->getTelephone();

        $this->assertEquals("06-20-73-94-79", $telephone, "getTelephone returnes bad values. ");
    }

    public function testTelephoneIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setTelephone("06-20-73-94-7");
        $errors = $validator->validate($medecin);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your first name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testTelephoneIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setTelephone("06-20-73-94-79");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }
}
