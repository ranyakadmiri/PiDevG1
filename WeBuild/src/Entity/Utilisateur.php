<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'This email is already in use.')]
#[UniqueEntity(fields: ['cin'], message: 'This CIN is already in use.')]
class Utilisateur
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
    #[Assert\NotBlank(message: 'le prenom doit être renseingé ')]
    #[Assert\Length(min:3, max:8, minMessage:"le prénom doit être minimum 3 ",maxMessage:" le prénom est trés long")]
    #[Assert\Regex(pattern: '/^[a-zA-Z]+$/' , message: 'le prénom ne peut contenir que des lettres')]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'le CIN doit être renseingé ')]
    #[Assert\Regex(pattern: '/^[0-9]+$/', message:' le CIN doit contenir que des chiffres')]
    #[Assert\Length(min:8, max:8, minMessage:"le cin est égale à 8 ",maxMessage:" le cin est égale à 8")]
    private ?string $cin = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'la fonction doit être renseingée ')]
    private ?string $fonction = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'le mot de passe doit être renseingé ')]
    #[Assert\Length(min: 8, max: 20, minMessage: "Password must be at least {{ limit }} characters long")]
    #[Assert\Regex(
        pattern: '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
        message: 'Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character'
    )]
    private ?string $mot_de_passe = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'l\'Email doit être renseingé ')]
    #[Assert\Email(message:'entrer un valide email ')]
    private ?string $email = null;

    #[ORM\ManyToOne( inversedBy: 'liste')]
    #[ORM\JoinColumn(nullable:false)]
    private ?Equipe $equipe = null;
    

   



   


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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): static
    {
        $this->cin = $cin;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): static
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->mot_de_passe;
    }

    public function setMotDePasse(string $mot_de_passe): static
    {
        $this->mot_de_passe = $mot_de_passe;

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

    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $equipe): static
    {
        $this->equipe = $equipe;

        return $this;
    }
  

   
   

    
   
  

}
