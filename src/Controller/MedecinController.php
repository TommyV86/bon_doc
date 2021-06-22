<?php

namespace App\Controller;

use App\Entity\Medecin;
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
        $manager->persist($medecin);
        $manager->flush();

        return View::create(null, 200);
    }
}
