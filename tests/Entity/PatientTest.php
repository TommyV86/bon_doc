<?php

namespace App\Tests\Entity;
use PHPUnit\Framework\TestCase;
use App\Entity\Patient;
use Symfony\Bundle\FrameworkBundle\test\KernelTestCase;

class PatientTest extends KernelTestCase
{
    // test nom
    public function testSetNom()
    {
        $patient = new Patient();
        $patient->setNom("VERSETTI");
        $name = $patient->getNom();

        $this->assertEquals(0, $name, "setNom does not affect the right value. ");
    }

    public function testGetNom()
    {
        $patient = new Patient();
        $patient->setNom("VERSETTI");
        $name = $patient->getNom();

        $this->assertEquals(0, $name, "getNom returnes bad values. ");
    }

    public function testIsNomInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setNom("VERSETTI");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 3 chars");
    }

    public function testIsNomValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setNom("VE");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
    }

    // test prenom
    public function testSetPrenom()
    {
        $patient = new Patient();
        $patient->setPrenom("Tommy");
        $prenom = $patient->getPrenom();

        $this->assertEquals(0, $prenom, "setPrenom does not affect the right value. ");
    }

    public function testGetPrenom()
    {
        $patient = new Patient();
        $patient->setPrenom("Tommy");
        $prenom = $patient->getPrenom();

        $this->assertEquals(0, $prenom, "getFirstName returnes bad values. ");
    }

    public function testIsPrenomInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setPrenom("TO");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 3 chars");
    }

    public function testIsPrenomValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setPrenom("Tommy");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
    }

            // test email
    public function testSetEmail()
    {
        $patient = new Patient();
        $patient->setEmail("Tommy@aidezmoi.fr");
        $email = $patient->getEmail();

        $this->assertEquals(0, $email, "email does not affect the right value. ");
    }

    public function testGetEmail()
    {
        $patient = new Patient();
        $patient->setEmail("Tommy@aidezmoi.fr");
        $email = $patient->getEmail();

        $this->assertEquals(0, $email, "GetEmail returnes bad values. ");
    }

    public function testIsEmailInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setEmail("Tommy@aidezmoi.fr");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 3 chars");
    }

    public function testIsEmailValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setEmail("Tommy@aidezmoi.fr");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
    }

    // test Telephone
    public function testSetTelephone()
    {
        $patient = new Patient();
        $patient->setTelephone("06-20-73-94-79");
        $telephone = $patient->getTelephone();

        $this->assertEquals(0, $telephone, "setTelephone does not affect the right value. ");
    }

    public function testGetTelephone()
    {
        $patient = new Patient();
        $patient->setTelephone("06-20-73-94-79");
        $telephone = $patient->getTelephone();

        $this->assertEquals(0, $telephone, "getTelephone returnes bad values. ");
    }

    public function testIsTelephoneInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setTelephone("06-20-73-94-7");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 3 chars");
    }

    public function testIsTelephoneValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setTelephone("06-20-73-94-79");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
    }

    // test adress
    public function testSetAdresse()
    {
        $patient = new Patient();
        $patient->setAdresse("15 rue de la porte Gellée, 44100 NANTES");
        $adress = $patient->getAdresse();

        $this->assertEquals(0, $adress, "setAdress does not affect the right value. ");
    }

    public function testGetAdresse()
    {
        $patient = new Patient();
        $patient->setAdresse("15 rue de la porte Gellée, 44100 NANTES");
        $adress = $patient->getAdresse();

        $this->assertEquals(0, $adress, "getAdress returnes bad values. ");
    }

    public function testIsAdresseInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setNom("15 rue de la porte Gellée");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 25 chars");
    }

    public function testIsAdresseValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setAdresse("15 rue de la porte Gellée, 44100 NANTES");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 25 chars");
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
        $hash = $patient->getAdresse();

        $this->assertEquals(0, $hash, "getHash returnes bad values. ");
    }

    public function testIsHashInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setHash("Tommymalade&é(-è_ççà)=1986.@");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 25 chars");
    }

    public function testIsHashValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $patient = new Patient();
        $patient->setHash("Tommymalade&é(-è_ççà)=1986.@");
        $errors = $validator->validate($patient);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 25 chars");
    }
}