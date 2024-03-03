<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\Type('String')]
    #[Assert\Length(min:3, max:15, minMessage:"le titre doit être minimum 3 ",maxMessage:" le titre est trés long")]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Assert\Type('String')]
    #[Assert\NotBlank(message: 'la description ne peut pas etre vide')   ]
    #[Assert\Length(
        min:8,
        minMessage: ' le titre doit contenir au moins 3 caractères'
    )]
    private ?string $description = null;

    #[ORM\Column]
    #[Assert\Type(
        type: 'float',
        message: 'The value {{ value }} is not a valid {{ type }}.',
    )]
    #[Assert\PositiveOrZero(message: 'Le salaire doit être un entier positif ou zéro')]
    #[Assert\NotBlank(message: 'Le salaire ne peut pas être vide')]
    private ?float $salary = null;

    
    #[ORM\OneToMany(targetEntity:Candidature::class, mappedBy:"offre" ,  )]
    private Collection $candidatures;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 6)]
    private ?string $latitude = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 6)]
    private ?string $longtitude = null;

    public function __construct()
    {
        $this->candidatures = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

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

    public function getSalary(): ?float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): static
    {
        $this->salary = $salary;

        return $this;
    }

     /**
     * @return Collection|Candidature[]
     */
    public function getCandidatures(): Collection
    {
        return $this->candidatures;
    }

    public function removeCandidature(Candidature $candidature): static
    {
        if ($this->candidatures->removeElement($candidature)) {
            // set the owning side to null (unless already changed)
            if ($candidature->getOffre() === $this) {
                $candidature->setOffre(null);
            }
        }

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongtitude(): ?string
    {
        return $this->longtitude;
    }

    public function setLongtitude(string $longtitude): static
    {
        $this->longtitude = $longtitude;

        return $this;
    }
}
