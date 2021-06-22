<?php

namespace App\Service;

use App\DTO\PatientDTO;
use App\Mapper\RdvMapper;
use App\Mapper\PatientMapper;
use App\Repository\PatientRepository;
use Doctrine\ORM\EntityManagerInterface;

class RdvService
{
    private $rdvRepository;
    private $patientRepository;
    private $entityManager;

    public function __construct(
        RDVRepository $rdvRepo,
        PatientRepository $patientRepo,
        EntityManagerInterface $manager
    ) {
        $this->RDVRepository = $rdvRepo;
        $this->patientRepository = $patientRepo;
        $this->entityManager = $manager;
    }

    public function findAll()
    {
        $rdvs = $this->RDVRepository->findAll();
        $rdvDTOs = [];
        foreach ($rdvs as $rdv) {
            $mapper = new RdvMapper();
            $rdvDTO = $mapper->convertRdvEntityToRdvDTO($rdv);
            $rdvDTOs[] = $rdvDTO;
        }
        return $rdvDTOs;
    }

    public function save(RdvDTO $rdvDTO)
    {
        $patientToSave = (new PatientMapper)->convertPatientDTOToPatientEntity($patientDTO);
        $this->entityManager->persist($patientToSave);
        $this->entityManager->flush();
        return true;
    }
}