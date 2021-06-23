<?php

namespace App\Service;

use App\DTO\MedcinDTO;
use App\Entity\Medecin;
use App\Mapper\MedecinMapper;
use App\Repository\MedecinRepository;
use Doctrine\ORM\EntityManagerInterface;

class MedecinService
{
    private $medecinRepository;
    private $entityManager;

    public function __construct(MedecinRepository $medRepo, EntityManagerInterface $manager)
    {
        $this->medecinRepository = $medRepo;
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
        $medecin = $this->medecinRepository->find(6);
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