<?php

namespace App\DTO;

class RdvDTO
{
    private $idRdv;
     /**
     * @OA\Property(
     *     format="int64",
     *     description="ID",
     *     title="ID",
     * )
     */
    private $dateRdv;
    private $heureRdv;

        /** 
        * @OA\Schema(
        *     description="RdvDTO model",
        *     title="Rdv model",
        *     required={"name", "photoUrls"},
        *     @OA\Xml(
        *         name="Rdv"
        *     )
        * )
        */
    

    /**
     * Get the value of idRdv
     */ 
    public function getIdRdv()
    {
        return $this->idRdv;
    }

    /**
     * Set the value of idRdv
     *
     * @return  self
     */ 
    public function setIdRdv($idRdv)
    {
        $this->idRdv = $idRdv;

        return $this;
    }

    /**
     * Get the value of dateRdv
     */ 
    public function getDateRdv()
    {
        return $this->dateRdv;
    }

    /**
     * Set the value of dateRdv
     *
     * @return  self
     */ 
    public function setDateRdv($dateRdv)
    {
        $this->dateRdv = $dateRdv;

        return $this;
    }

    /**
     * Get the value of heureRdv
     */ 
    public function getHeureRdv()
    {
        return $this->heureRdv;
    }

    /**
     * Set the value of heureRdv
     *
     * @return  self
     */ 
    public function setHeureRdv($heureRdv)
    {
        $this->heureRdv = $heureRdv;

        return $this;
    }
}