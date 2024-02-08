<?php

namespace App\Entity;

use App\Repository\AssuranceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssuranceRepository::class)]
class Assurance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $condition_age = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $condition_medicale = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $condition_financiere = null;

    #[ORM\Column]
    private ?\DateInterval $duree_couv = null;

    #[ORM\Column]
    private ?float $franchise = null;

    #[ORM\Column]
    private ?float $prime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getConditionAge(): ?string
    {
        return $this->condition_age;
    }

    public function setConditionAge(?string $condition_age): static
    {
        $this->condition_age = $condition_age;

        return $this;
    }

    public function getConditionMedicale(): ?string
    {
        return $this->condition_medicale;
    }

    public function setConditionMedicale(?string $condition_medicale): static
    {
        $this->condition_medicale = $condition_medicale;

        return $this;
    }

    public function getConditionFinanciere(): ?string
    {
        return $this->condition_financiere;
    }

    public function setConditionFinanciere(?string $condition_financiere): static
    {
        $this->condition_financiere = $condition_financiere;

        return $this;
    }

    public function getDureeCouv(): ?\DateInterval
    {
        return $this->duree_couv;
    }

    public function setDureeCouv(\DateInterval $duree_couv): static
    {
        $this->duree_couv = $duree_couv;

        return $this;
    }

    public function getFranchise(): ?float
    {
        return $this->franchise;
    }

    public function setFranchise(float $franchise): static
    {
        $this->franchise = $franchise;

        return $this;
    }

    public function getPrime(): ?float
    {
        return $this->prime;
    }

    public function setPrime(float $prime): static
    {
        $this->prime = $prime;

        return $this;
    }
}
