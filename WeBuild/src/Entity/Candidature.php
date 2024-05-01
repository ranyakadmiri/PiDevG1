<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Symfony\component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatureRepository::class)]
class Candidature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

  

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'le contenu ne peut pas etre vide')   ]
    #[Assert\Length(
        min:3,
        minMessage: ' le contenu doit faire au moins 10 caractères'
    )]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Competences = null;

    #[ORM\ManyToOne(inversedBy: 'candidatures')]
    private ?Offre $offre = null;

    #[ORM\Column(length: 255)]
    #[Assert\Email(message: 'l email ne peut pas etre vide') ]
    private ?string $email = null;

    #[ORM\ManyToOne(inversedBy: 'Candidature')]
    private ?User $user = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOffre(): ?Offre
    {
        return $this->offre;
    }

    public function setOffre(?Offre $offre): self
    {
        $this->offre = $offre;

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

    public function getCompetences(): ?string
    {
        return $this->Competences;
    }

    public function setCompetences(string $Competences): static
    {
        $this->Competences = $Competences;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
