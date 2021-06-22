<?php

namespace App\Controller;

use App\Entity\Medecin;
use App\Entity\RDV;
use DateTime;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;




class MedecinController extends AbstractFOSRestController
{
    /**
     * 
     * @Get("medecins")
     * @return void
     */
    public function getAll()
    {
        $medecin = $this->getDoctrine()->getRepository(Medecin::class)->findAll();
        return View::create($medecin, 200);
    }

    /**
     * 
     * @Get("medecin{id}")
     * @return void
     */
    public function getById()
    {
        $id = 1;
        $medecin = $this->getDoctrine()->getRepository(Medecin::class)->find($id);
        return View::create($medecin, 200);
    }

    /**
     * 
     * @Post("/medecins")
     * @ParamConverter("medecin", converter="fos_rest.request_body")
     * @return void
     */
    public function addMedecin(Medecin $medecin)
    {

        $manager = $this->getDoctrine()->getManager();
        $rdv = new RDV();
        $rdv->setDateRdv(new DateTime("10/05/2021"));

        $medecin->setNom("Dupond");
        $medecin->setPrenom("toto");
        $medecin->setSpecialite("dentiste");
        $medecin->setSexe("féminin");
        $medecin->setAdresse("21 rue de Gaulle 59000 Lille");
        $medecin->setTelephone("0621222324");
        $medecin->setEmail("lala@lala.fr");
        $medecin->setDateInscription(new DateTime());
        $medecin->setDateNaissance(new DateTime("1900/05/01"));
        $manager->persist($medecin);
        $manager->flush();

        return View::create(null, 200);
    }
}
