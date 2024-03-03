<?php

namespace App\Entity;

use App\Repository\ChantierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;


#[ORM\Entity(repositoryClass: ChantierRepository::class)]
class Chantier
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
    private ?string $nom = null;
    #[Assert\NotBlank (message: "ne doit pas être  vide ")]
    #[ORM\Column(length: 255)]
    private ?string $Description = null;
    #[Assert\NotNull(message:"The remuneration value must not be Null")]
    #[Assert\Positive(message:"The remuneration value must be positive")]
    #[Assert\Type(type:"numeric", message:"The remuneration must be a numeric value")]
    #[ORM\Column]
    private ?float $remuneration = null;
    /**
     * @Assert\GreaterThan("today", message="The date should be greater than today.")
     */
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Start_date = null;

    #[ORM\OneToMany(targetEntity: Task::class, mappedBy: 'id_chantier', orphanRemoval: true)]
    private Collection $tasks;

    public function __construct()
    {
        $this->tasks = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getNom(); // Assuming getName() is a method that returns a string representation of the Chantier object.
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

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

    public function getRemuneration(): ?float
    {
        return $this->remuneration;
    }

    public function setRemuneration(float $remuneration): static
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->Start_date;
    }

    public function setStartDate(\DateTimeInterface $Start_date): static
    {
        $this->Start_date = $Start_date;

        return $this;
    }

    /**
     * @return Collection<int, Task>
     */
    public function getTasks(): Collection
    {
        return $this->tasks;
    }

    public function addTask(Task $task): static
    {
        if (!$this->tasks->contains($task)) {
            $this->tasks->add($task);
            $task->setIdChantier($this);
        }

        return $this;
    }

    public function removeTask(Task $task): static
    {
        if ($this->tasks->removeElement($task)) {
            // set the owning side to null (unless already changed)
            if ($task->getIdChantier() === $this) {
                $task->setIdChantier(null);
            }
        }

        return $this;
    }


}
