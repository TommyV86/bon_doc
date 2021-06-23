<?php

namespace App\Controller;

use App\DTO\PatientDTO;
use App\Entity\Medecin;
use App\Entity\Patient;
use App\Mapper\PatientMapper;
use App\Service\PatientService;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use OpenApi\Annotations as OA;

class PatientController extends AbstractFOSRestController
{
    private $patientService;

    public function __construct(PatientService $patientService)
    {
        $this->patientService = $patientService;
    }

    /**
     * 
     * 
     * @Get("/patients")
     * @
     * @return void
     */
    public function getAll(PatientService $patientServ)
    {

        $patients = $patientServ->getAll();
        return View::create($patients, 200);
    }

    /**
     * 
     * @Get("/patients/{id}")
     * 
     * @param int $id
     * @return void
     */
    public function getById(PatientService $patientServ)
    {
        $id = 31;
        $patient = $patientServ->getById($id);
        return View::create($patient, 200);
    }

    /**
     * 
     * @OA\Post(
     *     path="/patients",
     *     tags={"patient"},
     *     operationId="create patient",
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     * requestBody={"$ref": "#/components/schemas/PatientDTO",}
     * )
     * 
     * 
     * @Post("/patients")
     * @ParamConverter("patientDTO", converter="fos_rest.request_body")
     * @return void
     */
    public function create(PatientDTO $patientDTO)
    {
        if (!$this->patientService->save($patientDTO)) {
            return View::create(null, 404);
        }
        return View::create(null, 201);
    }

    /**
     * @Post("patients")
     * @ParamConverter("patient", converter="fos_rest.request_body")
     * @return void
     */
    public function addPatient(Patient $patient, PatientService $patientService)
    {
        $patientService->addPatient($patient);
        return View::create(null, 201);
    }
}
