<?php

namespace App\Mapper;

use App\DTO\PatientDTO;
use App\Entity\Patient;

class PatientMapper
{
    public function convertPatientEntityToPatientDTO(Patient $patient): PatientDTO
    {
        $pDTO = (new PatientDTO())
            ->setId($patient->getId())
            ->setNom($patient->getNom())
            ->setPrenom($patient->getPrenom())
            ->setDateNaissance($patient->getDateNaissance())
            ->setEmail($patient->getEmail())
            ->setTelephone($patient->getTelephone())
            ->setAdresse($patient->getAdresse())
            ->setDateInscription($patient->getDateInscription())
            ->setHash($patient->getHash())
            ->setSexe($patient->getSexe());

        return $pDTO;
    }

    public function convertPatientDTOToPatientEntity(PatientDTO $patientDTO): Patient
    {
        $patient = new Patient();
        $patient->setNom($patientDTO->getNom());
        $patient->setPrenom($patientDTO->getPrenom());
        $patient->setDateNaissance(new \DateTime());
        $patient->setEmail($patientDTO->getEmail());
        $patient->setTelephone($patientDTO->getTelephone());
        $patient->setAdresse($patientDTO->getAdresse());
        $patient->setDateInscription(new \DateTime());
        $patient->setHash($patientDTO->getHash());
        $patient->setSexe($patientDTO->getSexe());


        return $patient;
    }
}
