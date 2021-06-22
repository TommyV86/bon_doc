<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=PatientRepository::class)
 */
class Patient
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="date")
     */
    private $date_inscription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hash;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $sexe;

    /**
     * @ORM\OneToMany(targetEntity=RDV::class, mappedBy="patient")
     */
    private $rdvs;

    public function __construct()
    {
        $this->rdvs = new Collection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->date_inscription;
    }

    public function setDateInscription(\DateTimeInterface $date_inscription): self
    {
        $this->date_inscription = $date_inscription;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getRdvs(): Collection
    {
        return $this->rdvs;
    }

    public function setRdvs(RDV $rdvs): self
    {
        // set the owning side of the relation if necessary
        if ($rdvs->getPatient() !== $this) {
            $rdvs->setPatient($this);
        }

        $this->rdvs = $rdvs;

        return $this;
    }



    public function addRdv(RDV $rdvsId): self //
    {
        if (!$this->rdvs->contains($rdvsId)) {
            $this->rdvs[] = $rdvsId;
            $rdvsId->setPatient($this);
        }

        return $this;
    }

    public function removeRdv(RDV $rdvsId): self
    {
        if ($this->rdvs->removeElement($rdvsId)) {    //suppression du rdv
            // set the owning side to null (unless already changed)
            if ($rdvsId->getPatient() === $this) {   //desassocie le rdv du patient
                $rdvsId->setPatient(null);
            }
        }

        return $this;
    }
}
