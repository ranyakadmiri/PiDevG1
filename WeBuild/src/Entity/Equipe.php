<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EquipeRepository::class)]
#[UniqueEntity(fields: ['nom'], message: 'This function is already in use.')]
class Equipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'le nom doit être renseingé ')]
    #[Assert\Length(min:3, max:8, minMessage:"le nom doit être minimum 3 ",maxMessage:" le nom est trés long")]
     #[Assert\Regex(pattern: '/^[a-zA-Z]+$/' , message: 'le nom ne peut contenir que des lettres')]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'le nom doit être renseingé ')]
    #[Assert\Length(min:10, max:255, minMessage:"la description doit être minimum 10 ",maxMessage:" la description est trés long")]
     #[Assert\Regex(pattern: '/^[a-zA-Z]+$/' , message: 'la description ne peut contenir que des lettres')]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'le projet doit être renseingé ')]
    private ?string $projet = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'le nombre doit être renseingé ')]
    private ?int $nombre_empl = null;

    #[ORM\OneToMany(targetEntity: Utilisateur::class, mappedBy: 'equipe')]
    private Collection $liste;

    public function __construct()
    {
        $this->liste = new ArrayCollection();
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
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getProjet(): ?string
    {
        return $this->projet;
    }

    public function setProjet(string $projet): static
    {
        $this->projet = $projet;

        return $this;
    }

    public function getNombreEmpl(): ?int
    {
        return $this->nombre_empl;
    }

    public function setNombreEmpl(int $nombre_empl): static
    {
        $this->nombre_empl = $nombre_empl;

        return $this;
    }

    /**
     * @return Collection<int, Utilisateur>
     */
    public function getListe(): Collection
    {
        return $this->liste;
    }

    public function addListe(Utilisateur $liste): static
    {
        if (!$this->liste->contains($liste)) {
            $this->liste->add($liste);
            $liste->setEquipe($this);
        }

        return $this;
    }

    public function removeListe(Utilisateur $liste): static
    {
        if ($this->liste->removeElement($liste)) {
            // set the owning side to null (unless already changed)
            if ($liste->getEquipe() === $this) {
                $liste->setEquipe(null);
            }
        }

        return $this;
    }

    

    
   
  
}
