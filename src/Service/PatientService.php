<?php

namespace App\Service;

use App\DTO\PatientDTO;
use App\Mapper\PatientMapper;
use App\Repository\MedecinRepository;
use App\Repository\PatientRepository;
use Doctrine\ORM\EntityManagerInterface;

class PatientService
{

    private $patientRepository;
    private $medecinRepository;
    private $entityManager;

    public function __construct(
        PatientRepository $repo,
        EntityManagerInterface $manager,
        MedecinRepository $medecinRepo
    ) {
        $this->patientRepository = $repo;
        $this->entityManager = $manager;
        $this->medecinRepository = $medecinRepo;
    }


    public function findAll()
    {
        $patients = $this->patientRepository->findAll();
        $patientDTOs = [];
        foreach ($patients as $patient) {
            $mapper = new PatientMapper();
            $patientDTO = $mapper->convertPatientEntityToPatientDTO($patient);
            $patientDTOs[] = $patientDTO;
        }
        return $patientDTOs;
    }

    public function save(PatientDTO $patientDTO)
    {

        $selectedMedecin = $this->medecinRepository->find($patientDTO->getMedecinId());
        if ($selectedMedecin == null) {
            return false;
        }
        $patientToSave = (new PatientMapper)->convertPatientDTOToPatientEntity($patientDTO);
        $patientToSave->setMedecin($selectedMedecin);
        $this->entityManager->persist($patientToSave);
        $this->entityManager->flush();
        return true;
    }
}
