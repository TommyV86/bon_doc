<?php

namespace App\DTO;

use OpenApi\Annotations as OA;

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
     * @var string
     */

    private $nom;

    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}
