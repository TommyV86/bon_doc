<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Patient;
use Symfony\Bundle\FrameworkBundle\Test_KernelTestCase;

class PatientTest extends TestCase
{
    // test nom
    public function testSetName()
    {
        $patient = new Patient();
        $patient->setName("VERSETTI");
        $name = $patient->getName();

        $this->assertEquals("VERSETTI", $name, "setName does not affect the right value. ");
    }

    public function testGetName()
    {
        $patient = new Patient();
        $patient->setName("VERSETTI");
        $name = $patient->getName();

        $this->assertEquals("VERSETTI", $name, "getName returnes bad values. ");
    }

    public function testNameIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setName("VE");
        $errors = $validator->validate($patient);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testNameIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setNom("VE");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test prenom
    public function testSetFirstName()
    {
        $patient = new Patient();
        $patient->setFirstName("Tommy");
        $firstName = $patient->getFirstName();

        $this->assertEquals("Tommy", $firstName, "setFirstName does not affect the right value. ");
    }

    public function testGetFirstName()
    {
        $patient = new Patient();
        $patient->setFirstName("Tommy");
        $firstName = $patient->getFirstName();

        $this->assertEquals("Tommy", $firstName, "getFirstName returnes bad values. ");
    }

    public function testFirstNameIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setFirstName("TO");
        $errors = $validator->validate($patient);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your first name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testFirstNameIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setFirstName("Tommy");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

            // test email
    public function testSetEmail()
    {
        $patient = new Patient();
        $patient->setEmail("Tommy@aidezmoi.fr");
        $email = $patient->getEmail();

        $this->assertEquals("Tommy@aidezmoi.fr", $email, "email does not affect the right value. ");
    }

    public function testGetEmail()
    {
        $patient = new Patient();
        $patient->setEmail("Tommy@aidezmoi.fr");
        $email = $patient->getEmail();

        $this->assertEquals("Tommy@aidezmoi.fr", $email, "GetEmail returnes bad values. ");
    }

    public function testIsEmailInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setEmail("Tommy@aidezmoi.fr");
        $errors = $validator->validate($patient);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your first name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testIsEmailValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setEmail("Tommy@aidezmoi.fr");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test Telephone
    public function testSetTelephone()
    {
        $patient = new Patient();
        $patient->setTelephone("06-20-73-94-79");
        $telephone = $patient->getTelephone();

        $this->assertEquals("06-20-73-94-79", $telephone, "setTelephone does not affect the right value. ");
    }

    public function testGetTelephone()
    {
        $patient = new Patient();
        $patient->setTelephone("06-20-73-94-79");
        $telephone = $patient->getTelephone();

        $this->assertEquals("06-20-73-94-79", $telephone, "getTelephone returnes bad values. ");
    }

    public function testIsTelephoneInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setTelephone("06-20-73-94-7");
        $errors = $validator->validate($patient);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        $this->assertEquals("Your first name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testIsTelephoneValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setTelephone("06-20-73-94-79");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test adress
    public function testSetAdress()
    {
        $patient = new Patient();
        $patient->setAdress("15 rue de la porte Gellée, 44100 NANTES");
        $adress = $patient->getAdress();

        $this->assertEquals("15 rue de la porte Gellée, 44100 NANTES", $adress, "setAdress does not affect the right value. ");
    }

    public function testGetAdress()
    {
        $patient = new Patient();
        $patient->setAdress("15 rue de la porte Gellée, 44100 NANTES");
        $adress = $patient->getAdress();

        $this->assertEquals("15 rue de la porte Gellée, 44100 NANTES", $adress, "getAdress returnes bad values. ");
    }

    public function testIsAdressInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setName("15 rue de la porte Gellée");
        $patient = $validator->validate($patient);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 25 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 25 chars");
        $this->assertEquals("Your adress must be at least 25 characters long", $errors[0]->getMessage());
    }

    public function testIsAdressValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setAdress("15 rue de la porte Gellée, 44100 NANTES");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 25 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 25 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }
    
    // test Hash
    public function testSetHash()
    {
        $patient = new Patient();
        $patient->setHash("Tommymalade&é(-è_ççà)=1986.@");
        $hash = $patient->getHash();

        $this->assertEquals("Tommymalade&é(-è_ççà)=1986.@", $hash, "setHash does not affect the right value. ");
    }

    public function testGetHash()
    {
        $patient = new Patient();
        $patient->setHash("Tommymalade&é(-è_ççà)=1986.@");
        $hash = $patient->getAdress();

        $this->assertEquals("Tommymalade&é(-è_ççà)=1986.@", $hash, "getHash returnes bad values. ");
    }

    public function testIsHashInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setHash("Tommymalade&é(-è_ççà)=1986.@");
        $patient = $validator->validate($patient);

        $this->assertCount(1, $errors, "Une erreur est rencontrée car moins de 25 chars");
        $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 25 chars");
        $this->assertEquals("Your adress must be at least 25 characters long", $errors[0]->getMessage());
    }

    public function testIsHashValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setHash("Tommymalade&é(-è_ççà)=1986.@");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 25 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 25 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }
}