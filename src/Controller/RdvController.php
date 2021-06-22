<?php

namespace App\Controller;

use App\Entity\RDV;
use App\Entity\Patient;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\View\View;



class RdvController extends AbstractFOSRestController
{
    /**
     * 
     * @Get("rdv")
     * @return void
     */
    public function getAll()
    {
        $rdv = $this->getDoctrine()->getRepository(RDV::class)->findAll();
        return View::create($rdv, 200);
    }

    /**
     * 
     * @Get("rdv{id}")
     * @return void
     */
    public function getById()
    {
        $rdv = $this->getDoctrine()->getRepository(RDV::class)->find(3);
        return View::create($rdv, 200);
    }

    // /**
    //  * 
    //  * @Post("newRdv")
    //  * @return void
    //  */
    // public function createRdv()
    // {
        
    // }
}
