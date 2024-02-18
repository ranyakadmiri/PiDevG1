<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank(message: 'le contenu de commentaire ne peut pas etre vide')   ]
    #[Assert\Length(
        min:3,
        minMessage: ' le contenu doit faire au moins 3 caractères'
    )]
    private ?string $contenu = null;


    #[Assert\NotBlank(message: 'La date ne peut pas être vide')]
    #[Assert\Range(
        min: 'today',
        minMessage: 'La date ne peut pas être dans le passé',
        max: 'today',
        maxMessage: 'La date ne peut pas être dans le futur'
    )]
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datecreation = null;

    #[Assert\PositiveOrZero(message: 'Le nombre de likes doit être un entier positif ou zéro')]
    #[Assert\NotBlank(message: 'Le nombre de likes ne peut pas être vide')]
    #[ORM\Column(nullable: true)]
    private ?int $nbrlikes = null;

  
    #[Assert\PositiveOrZero(message: 'Le nombre de dislikes doit être un entier positif ou zéro')]
    #[Assert\NotBlank(message: 'Le nombre de dislikes ne peut pas être vide')]
    #[ORM\Column(nullable: true)]
    private ?int $nbrdislikes = null;

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Post $Post = null;

    #[Assert\NotBlank(message: 'le nom doit être renseingé ')]
    #[Assert\Length(min:3, max:8, minMessage:"le nom doit être minimum 3 ",maxMessage:" le nom est trés long")]
    #[Assert\Regex(pattern: '/^[a-zA-Z]+$/' , message: 'le nom ne peut contenir que des lettres')]
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(?\DateTimeInterface $datecreation): static
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    public function getNbrlikes(): ?int
    {
        return $this->nbrlikes;
    }

    public function setNbrlikes(?int $nbrlikes): static
    {
        $this->nbrlikes = $nbrlikes;

        return $this;
    }

    public function getNbrdislikes(): ?int
    {
        return $this->nbrdislikes;
    }

    public function setNbrdislikes(?int $nbrdislikes): static
    {
        $this->nbrdislikes = $nbrdislikes;

        return $this;
    }

    public function getPost(): ?Post
    {
        return $this->Post;
    }

    public function setPost(?Post $Post): static
    {
        $this->Post = $Post;

        return $this;
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

}
