<?php

namespace App\Entity;

use App\Repository\LocationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocationRepository::class)]
class Location
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idL = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateD = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateF = null;

    #[ORM\ManyToOne(inversedBy: 'locations')]
    private ?PackMateriel $PackMateriel = null;

    #[ORM\Column]
    private ?int $idUser = null;

    public function getIdL(): ?int
    {
        return $this->idL;
    }

    public function getDateD(): ?\DateTimeInterface
    {
        return $this->dateD;
    }

    public function setDateD(\DateTimeInterface $dateD): static
    {
        $this->dateD = $dateD;

        return $this;
    }

    public function getDateF(): ?\DateTimeInterface
    {
        return $this->dateF;
    }

    public function setDateF(\DateTimeInterface $dateF): static
    {
        $this->dateF = $dateF;

        return $this;
    }

    public function getPackMateriel(): ?PackMateriel
    {
        return $this->PackMateriel;
    }

    public function setPackMateriel(?PackMateriel $PackMateriel): static
    {
        $this->PackMateriel = $PackMateriel;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }
}
