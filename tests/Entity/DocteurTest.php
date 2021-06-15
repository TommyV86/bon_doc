<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Docteur;
use Symfony\Bundle\FrameworkBundle\Test_KernelTestCase;

class DocteurTest extends TestCase
{
    // test nom
    public function testSetName()
    {
        $docteur = new Docteur();
        $docteur->setName("VERSETTI");
        $name = $docteur->getName();

        $this->assertEquals("VERSETTI", $name, "setName does not affect the right value. ");
    }

    public function testGetName()
    {
        $docteur = new Docteur();
        $docteur->setName("VERSETTI");
        $name = $docteur->getName();

        $this->assertEquals("VERSETTI", $name, "getName returnes bad values. ");
    }

    public function testNameIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $docteur = new Docteur();
        $docteur->setName("VE");
        $docteur = $validator->validate($docteur);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testNameIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $docteur = new Docteur();
        $docteur->setNom("VE");
        $errors = $validator->validate($docteur);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test prenom
    public function testSetFirstName()
    {
        $docteur = new Docteur();
        $docteur->setFirstName("Tommy");
        $firstName = $docteur->getFirstName();

        $this->assertEquals("Tommy", $firstName, "setFirstName does not affect the right value. ");
    }

    public function testGetFirstName()
    {
        $docteur = new Docteur();
        $docteur->setFirstName("Tommy");
        $firstName = $docteur->getFirstName();

        $this->assertEquals("Tommy", $firstName, "getFirstName returnes bad values. ");
    }

    public function testFirstNameIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $docteur = new Docteur();
        $docteur->setFirstName("TO");
        $errors = $validator->validate($docteur);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your first name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testFirstNameIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $docteur = new Docteur();
        $docteur->setFirstName("Tommy");
        $errors = $validator->validate($docteur);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test specialite
    public function testSetSpecialty()
    {
        $docteur = new Docteur();
        $docteur->setSpecialty("Dentiste");
        $specialty = $docteur->getSpecialty();

        $this->assertEquals("Dentiste", $specialty, "setSpecialty does not affect the right value. ");
    }

    public function testGetSpecialty()
    {
        $docteur = new Docteur();
        $docteur->setSpecialty("Dentiste");
        $specialty = $docteur->getSpecialty();

        $this->assertEquals("Dentiste", $specialty, "setSpecialty returnes bad values. ");
    }

    public function testSpecialtyIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $docteur = new Docteur();
        $docteur->setSpecialty("DE");
        $errors = $validator->validate($docteur);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your specialty must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testSpecialtyIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $docteur = new Docteur();
        $docteur->setSpecialty("Dentiste");
        $errors = $validator->validate($docteur);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test adress
    public function testSetAdress()
    {
        $docteur = new Docteur();
        $docteur->setAdress("15 rue de la porte Gellée, 44100 NANTES");
        $adress = $docteur->getAdress();

        $this->assertEquals("15 rue de la porte Gellée, 44100 NANTES", $adress, "setAdress does not affect the right value. ");
    }

    public function testGetAdress()
    {
        $docteur = new Docteur();
        $docteur->setAdress("15 rue de la porte Gellée, 44100 NANTES");
        $adress = $docteur->getAdress();

        $this->assertEquals("15 rue de la porte Gellée, 44100 NANTES", $adress, "getAdress returnes bad values. ");
    }

    public function testAdressIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $docteur = new Docteur();
        $docteur->setName("15 rue de la porte Gellée");
        $docteur = $validator->validate($docteur);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 25 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 25 chars");
        $this->assertEquals("Your adress must be at least 25 characters long", $errors[0]->getMessage());
    }

    public function testAdressIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $docteur = new Docteur();
        $docteur->setAdress("15 rue de la porte Gellée, 44100 NANTES");
        $errors = $validator->validate($docteur);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 25 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 25 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test Telephone
    public function testSetTelephone()
    {
        $docteur = new Docteur();
        $docteur->setTelephone("06-20-73-94-79");
        $telephone = $docteur->getTelephone();

        $this->assertEquals("06-20-73-94-79", $telephone, "setTelephone does not affect the right value. ");
    }

    public function testGetTelephone()
    {
        $docteur = new Docteur();
        $docteur->setTelephone("06-20-73-94-79");
        $telephone = $docteur->getTelephone();

        $this->assertEquals("06-20-73-94-79", $telephone, "getTelephone returnes bad values. ");
    }

    public function testTelephoneIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $docteur = new Docteur();
        $docteur->setTelephone("06-20-73-94-7");
        $errors = $validator->validate($docteur);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your first name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testTelephoneIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $docteur = new Docteur();
        $docteur->setTelephone("06-20-73-94-79");
        $errors = $validator->validate($docteur);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }
}
