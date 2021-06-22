<?php

namespace App\Mapper;

use App\DTO\RdvDTO;
use App\Entity\RDV;

class RdvMapper
{
    public function convertRdvEntityToRdvDTO(RDV $rdv) : RdvDTO
    {
        $rdvDTO = (new RdvDTO())->setIdRdv($rdv->getId())
                                ->setDateRdv($rdv->getDateRdv())
                                ->setHeureRdv($rdv->getHeureRdv());
        
        return $rdvDTO;
    }

    public function convertRdvDTOToRdvEntity(RdvDTO $rdvDTO)
    {
        $rdv = new RDV();
        $rdv->setDateRdv(($rdvDTO->getDateRdv()))
            ->setHeureRdv(($rdvDTO->getHeureRdv()));
    }
}