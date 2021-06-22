<?php

namespace App\DTO;

use OpenApi\Annotations as OA;
use App\Entity\Medecin;

/**
 *     @OA\Schema(
 *     description="La patientDTO",
 *     title="PatientDTO",
 *     required={"nom"},
 * )
 */

class PatientDTO
{
    /**
     * @OA\Property(
     *     description="The patient id",
     *     title="id",
     * )
     *
     * @var integer
     */
    private $id;
    /**
     * @OA\Property(
     *     description="The patient name",
     *     title="nom",
     * )
     *
     * @var integer
     */

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
