<?php

namespace App\Service;

use App\DTO\MedcinDTO;
use App\Entity\Medecin;
use App\Mapper\MedecinMapper;
use App\Repository\MedecinRepository;
use App\Repository\PatientRepository;
use Doctrine\ORM\EntityManagerInterface;

class MedecinService
{
    private $medecinRepository;
    private $patientRepository;
    private $entityManager;

    public function __construct(MedecinRepository $medRepo, PatientRepository $patRepo, EntityManagerInterface $manager)
    {
        $this->medecinRepository = $medRepo;
        $this->patientRepository = $patRepo;
        $this->entityManager = $manager;
    }

    public function getAll()
    {
        $medecins = $this->medecinRepository->findAll();
        $medecinsDTO = [];
        foreach($medecins as $medecin){
            $medecinMapper = new MedecinMapper();
            $medecinDTO = $medecinMapper->convertMedecinEntityToMedecinDTO($medecin);
            $medecinsDTO[] = $medecinDTO;
        }
        return $medecinsDTO;
    }

    public function getById()
    {
        $medecin = $this->medecinRepository->find(3);
        $medecinFinded = [];
        $medecinMapper = new MedecinMapper();
        $medecinDTO = $medecinMapper->convertMedecinEntityToMedecinDTO($medecin);
        $medecinFinded[] = $medecinDTO;

        return $medecinFinded;
    }

    public function addMedecin(Medecin $medecin)
    {
        $this->entityManager->persist($medecin);
        $this->entityManager->flush();
    }
}