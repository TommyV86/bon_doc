<?php

namespace App\Mapper;

use App\DTO\MedecinDTO;
use App\Entity\Medecin;

class MedecinMapper
{
    public function convertMedecinEntityToMedecinDTO(Medecin $medecin) : MedecinDTO
    {
        $mDTO = (new MedecinDTO())->setId($medecin->getId())
                                  ->setNom($medecin->getNom());
        
        return $mDTO;
    }

    public function convertMedecinDTOToMedecinEntity(MedecinDTO $medecinDTO)
    {
        $medecin = new Medecin();
        $medecin->setNom(($medecinDTO->getNom()));
    }
}