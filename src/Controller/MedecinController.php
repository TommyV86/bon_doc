<?php

namespace App\Controller;

use App\Entity\Medecin;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\View\View;



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
     * @Get("medecin")
     * @return void
     */
    public function getById()
    {
        $medecin = $this->getDoctrine()->getRepository(Medecin::class)->find(3);
        return View::create($medecin, 200);
    }

    /**
     * 
     * @Post("medecins/add")
     * @return void
     */
    public function addMedecin(Medecin $medecin)
    {
        $add = $this->getDoctrine()->getManager();
        $add->persist($medecin);
        $add->flush();
        return View::create(null, 200);
    }
}
