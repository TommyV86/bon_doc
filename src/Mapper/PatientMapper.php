<?php

namespace App\Mapper;

use App\DTO\PatientDTO;
use App\Entity\Patient;

class PatientMapper
{
    public function convertPatientEntityToPatientDTO(Patient $patient) : PatientDTO
    {
        $medecinMapper = new MedecinMapper();
        $med = $patient->getMedecin();
        $pDTO = (new PatientDTO())->setId($patient->getId())
                                  ->setNom($patient->getNom())
                                  ->setMedecinDTO($medecinMapper->convertPatientEntityToPatientDTO($med));
        
        return $pDTO;
    }

    public function patientDTOToPatientEntity(PatientDTO $patientDTO) : Patient
    {
        $medecinMapper = new MedecinMapper();
        $patient = new Patient();
        $patient->setNom($patientDTO->getNom());
        $patient->setMedecin($medecinMapper->convertPatientEntityToPatientDTO($patientDTO->getMedecinDTO()));

        return $patient;
    }
}