<?php

namespace App\Mapper;

use App\DTO\PatientDTO;
use App\Entity\Patient;

class PatientMapper
{
    public function convertPatientEntityToPatientDTO(Patient $patient): PatientDTO
    {
        $pDTO = (new PatientDTO())->setId($patient->getId())
            ->setNom($patient->getNom());

        return $pDTO;
    }

    public function convertPatientDTOToPatientEntity(PatientDTO $patientDTO): Patient
    {
        $patient = new Patient();
        $patient->setNom($patientDTO->getNom());

        return $patient;
    }
}
