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
     * @OA\Property(
     *     description="The patient second name",
     *     title="prenom",
     * )
     *
     * @var string
     */

    private $prenom;

    /**
     * @OA\Property(
     *     description="The patient birth date",
     *     title="naissance",
     * )
     *
     * @var string
     */

    private $dateNaissance;

    /**
     * @OA\Property(
     *     description="The patient email",
     *     title="email",
     * )
     *
     * @var string
     */

    private $email;

    /**
     * @OA\Property(
     *     description="The patient phone",
     *     title="telephone",
     * )
     *
     * @var string
     */

    private $telephone;

    /**
     * @OA\Property(
     *     description="The patient adress",
     *     title="adresse",
     * )
     *
     * @var string
     */

    private $adresse;

    /**
     * @OA\Property(
     *     description="The patient inscription date",
     *     title="inscription",
     * )
     *
     * @var string
     */

    private $dateInscription;

    /**
     * @OA\Property(
     *     description="The patient password hash",
     *     title="hash",
     * )
     *
     * @var string
     */

    private $hash;

    /**
     * @OA\Property(
     *     description="The patient sex",
     *     title="sexe",
     * )
     *
     * @var string
     */

    private $sexe;

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

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of dateInscription
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     *
     * @return  self
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get the value of hash
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set the value of hash
     *
     * @return  self
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get the value of sexe
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }
}
