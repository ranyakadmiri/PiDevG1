<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\NotBlank;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[Assert\NotBlank (message: "ne doit pas être  vide ")]
    #[Assert\Length(
        min: 5,
        max: 25,
        minMessage: 'Le nom doit avoir au moins 5 caractères',
        maxMessage: 'Le nom doit avoir au max 25 caractères'
    )]
    #[ORM\Column(length: 255)]
    private ?string $name = null;
    #[Assert\NotBlank (message: "ne doit pas être  vide ")]
    /**
     * @Assert\Choice(choices={"High", "MED", "Low"}, message="Invalid priority {High, MED, Low} .")
     */
    #[ORM\Column(length: 255)]
    private ?string $Priority = null;

    #[ORM\Column]
    private ?bool $Status = null;

    /**
     * @Assert\Length(min=20, minMessage="Description must be at least 20 characters long.")
     */
    #[Assert\NotBlank (message: "ne doit pas être  vide ")]
    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    /**
     * @Assert\GreaterThan("today", message="The date should be greater than today.")
     */
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Due = null;

    #[ORM\ManyToOne(inversedBy: 'tasks')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Chantier $id_chantier = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPriority(): ?string
    {
        return $this->Priority;
    }

    public function setPriority(string $Priority): static
    {
        $this->Priority = $Priority;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->Status;
    }

    public function setStatus(bool $Status): static
    {
        $this->Status = $Status;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDue(): ?\DateTimeInterface
    {
        return $this->Due;
    }

    public function setDue(\DateTimeInterface $Due): static
    {
        $this->Due = $Due;

        return $this;
    }

    public function getIdChantier(): ?Chantier
    {
        return $this->id_chantier;
    }

    public function setIdChantier(?Chantier $id_chantier): static
    {
        $this->id_chantier = $id_chantier;

        return $this;
    }


}
