<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\View\View;
use App\Entity\Patient;
use App\Entity\Medecin;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class PatientController extends AbstractFOSRestController
{
    /**
     * 
     * @Get("/patients")
     * @
     * @return void
     */
    public function getAll()
    {

        $patient = $this->getDoctrine()->getRepository(Patient::class)->findAll();
        return View::create($patient, 200);
    }

    /**
     * 
     * @Get("/patients/{id}")
     * @return void
     */
    public function getById()
    {
        $id = 1;
        $patient = $this->getDoctrine()->getRepository(Patient::class)->find($id);
        return View::create($patient, 200);
    }

    /**
     * 
     * @Post("/patients")
     * @ParamConverter("patient", converter="fos_rest.request_body")
     * @return void
     */
    public function create(Patient $patient)
    {
        $manager = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository(Medecin::class);
        if ($repo->find($patient->getRdvs()->getId()) == null) {
        } else {
            $rdv = $repo->find($patient->getRdvs()->getId());
            $patient->setRdvs($rdv);
        }
        $manager->persist($patient);
        $manager->flush();
        return View::create(null, 200);
    }
}
