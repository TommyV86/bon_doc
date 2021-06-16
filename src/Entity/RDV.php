<?php

namespace App\Entity;

use App\Repository\RDVRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RDVRepository::class)
 */
class RDV
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_rdv;

    /**
     * @ORM\Column(type="datetime")
     */
    private $heure_rdv;

    /**
     * @ORM\ManyToOne(targetEntity=Medecin::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $medecin;

    /**
     * @ORM\OneToOne(targetEntity=Patient::class, inversedBy="rdv", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRdv(): ?\DateTimeInterface
    {
        return $this->date_rdv;
    }

    public function setDateRdv(\DateTimeInterface $date_rdv): self
    {
        $this->date_rdv = $date_rdv;

        return $this;
    }

    public function getHeureRdv(): ?\DateTimeInterface
    {
        return $this->heure_rdv;
    }

    public function setHeureRdv(\DateTimeInterface $heure_rdv): self
    {
        $this->heure_rdv = $heure_rdv;

        return $this;
    }

    public function getMedecin(): ?Medecin
    {
        return $this->medecin;
    }

    public function setMedecin(?Medecin $medecin): self
    {
        $this->medecin = $medecin;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }
}
