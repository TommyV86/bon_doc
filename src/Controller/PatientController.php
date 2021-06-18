<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\View\View;
// use src\Entity\Patient;
use App\Entity\Patient;


class PatientController extends AbstractFOSRestController
{
    /**
     * 
     * @Get("patients")
     * @return void
     */
    public function getAll()
    {

        $patient = $this->getDoctrine()->getRepository(Patient::class)->findAll();
        return View::create($patient, 200);
    }
}
