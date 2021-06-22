<?php 

namespace App\DTO;

use App\Entity\Medecin;

class PatientDTO
{
    private $id;
    private $nom;
    private $medecinId;
    private $medecinDTO;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of medecinId
     */ 
    public function getMedecinId()
    {
        return $this->medecinId;
    }

    /**
     * Set the value of medecinId
     *
     * @return  self
     */ 
    public function setMedecinId($medecinId)
    {
        $this->medecinId = $medecinId;

        return $this;
    }

    /**
     * Get the value of medecinDTO
     */ 
    public function getMedecinDTO()
    {
        return $this->medecinDTO;
    }

    /**
     * Set the value of medecinDTO
     *
     * @return  self
     */ 
    public function setMedecinDTO($medecinDTO)
    {
        $this->medecinDTO = $medecinDTO;

        return $this;
    }
}