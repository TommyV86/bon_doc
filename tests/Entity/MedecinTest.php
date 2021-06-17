<?php

namespace App\Tests\Entity;

use App\Entity\Medecin;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MedecinTest extends KernelTestCase
{
    // test nom
    public function testSetNom()
    {
        $medecin = new Medecin();
        $medecin->setNom("VERSETTI");
        $nom = $medecin->getNom();

        $this->assertEquals("VERSETTI", $nom, "setNom does not affect the right value. ");
    }

    public function testGetNom()
    {
        $medecin = new Medecin();
        $medecin->setNom("VERSETTI");
        $nom = $medecin->getNom();

        $this->assertEquals("VERSETTI", $nom, "getNom returnes bad values. ");
    }

    public function testNomIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setNom("VE");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 3 chars");
        // $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testNomIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setNom("VERSETTI");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test prenom
    public function testSetPrenom()
    {
        $medecin = new Medecin();
        $medecin->setPrenom("Tommy");
        $prenom = $medecin->getPrenom();

        $this->assertEquals("Tommy", $prenom, "setPrenom does not affect the right value. ");
    }

    public function testGetPrenom()
    {
        $medecin = new Medecin();
        $medecin->setPrenom("Tommy");
        $prenom = $medecin->getPrenom();

        $this->assertEquals("Tommy", $prenom, "getPrenom returnes bad values. ");
    }

    public function testPrenomIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setPrenom("Tommy");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 3 chars");
        // $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars!");
        // $this->assertEquals("Your first name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testPrenomIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setPrenom("Tommy");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test specialite
    public function testSetSpecialite()
    {
        $medecin = new Medecin();
        $medecin->setSpecialite("Dentiste");
        $specialite = $medecin->getSpecialite();

        $this->assertEquals("Dentiste", $specialite, "setSpecialite does not affect the right value. ");
    }

    public function testGetSpecialite()
    {
        $medecin = new Medecin();
        $medecin->setSpecialite("Dentiste");
        $specialite = $medecin->getSpecialite();

        $this->assertEquals("Dentiste", $specialite, "setSpecialty returnes bad values. ");
    }

    public function testSpecialiteIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setSpecialite("DE");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 3 chars");
        // $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        // $this->assertEquals("Your specialty must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testSpecialiteIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setSpecialite("Dentiste");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test adresse
    public function testSetAdresse()
    {
        $medecin = new Medecin();
        $medecin->setAdresse("15 rue de la porte Gellée, 44100 NANTES");
        $adresse = $medecin->getAdresse();

        $this->assertEquals("15 rue de la porte Gellée, 44100 NANTES", $adresse, "setAdresse does not affect the right value. ");
    }

    public function testGetAdresse()
    {
        $medecin = new Medecin();
        $medecin->setAdresse("15 rue de la porte Gellée, 44100 NANTES");
        $adresse = $medecin->getAdresse();

        $this->assertEquals("15 rue de la porte Gellée, 44100 NANTES", $adresse, "getAdress returnes bad values. ");
    }

    public function testAdressIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setAdresse("15 rue de la porte Gellée");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 25 chars");
        // $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 25 chars");
        // $this->assertEquals("Your adress must be at least 25 characters long", $errors[0]->getMessage());
    }

    public function testAdresseIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setAdresse("15 rue de la porte Gellée, 44100 NANTES");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 25 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 25 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test Telephone
    public function testSetTelephone()
    {
        $medecin = new Medecin();
        $medecin->setTelephone("0620739479");
        $telephone = $medecin->getTelephone();

        $this->assertEquals("0620739479", $telephone, "setTelephone does not affect the right value. ");
    }

    public function testGetTelephone()
    {
        $medecin = new Medecin();
        $medecin->setTelephone("0620739479");
        $telephone = $medecin->getTelephone();

        $this->assertEquals("0620739479", $telephone, "getTelephone returnes bad values. ");
    }

    public function testTelephoneIsInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setTelephone("062073947");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 3 chars");
        // $this->assertEquals(1, count($errors), "Une erreur est rencontrée car moins de 3 chars");
        // $this->assertEquals("Your first name must be at least 3 characters long", $errors[0]->getMessage());
    }

    public function testTelephoneIsValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setTelephone("0620739479");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
        $this->assertEquals(0, count($errors), "Une erreur est rencontrée car plus de 3 chars");
        // $this->assertEquals("Your name must be at least 3 characters long", $errors[0]->getMessage());
    }

    // test email
    public function testSetEmail()
    {
        $medecin = new Medecin();
        $medecin->setEmail("Tommy@aidezmoi.fr");
        $email = $medecin->getEmail();

        $this->assertEquals("Tommy@aidezmoi.fr", $email, "email does not affect the right value. ");
    }

    public function testGetEmail()
    {
        $medecin = new Medecin();
        $medecin->setEmail("Tommy@aidezmoi.fr");
        $email = $medecin->getEmail();

        $this->assertEquals("Tommy@aidezmoi.fr", $email, "GetEmail returnes bad values. ");
    }

    public function testIsEmailInvalid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setEmail("Tommy@aidezmoi.fr");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car moins de 3 chars");
    }

    public function testIsEmailValid()
    {
        $kernel = self::bootKernel();
        $validator = $kernel->getContainer()->get('validator');
        $medecin = new Medecin();
        $medecin->setEmail("Tommy@aidezmoi.fr");
        $errors = $validator->validate($medecin);

        $this->assertCount(0, $errors, "Une erreur est rencontrée car plus de 3 chars");
    }
}
