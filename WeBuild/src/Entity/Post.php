<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

   
    #[Assert\NotBlank(message: 'Le titre ne peut pas être vide')]
    #[Assert\Length(
        min: 3,
        minMessage: 'Le titre doit avoir au moins 3 caractères'
    )]
    #[Assert\Regex(
        pattern: '/\d/',
        match: false,
        message: 'Le titre ne peut pas contenir de numéros'
    )]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[Assert\NotBlank(message: 'La description ne peut pas être vide')]
    #[Assert\Length(
        min: 3,
        minMessage: 'La description doit avoir au moins 3 caractères'
    )]
    #[Assert\Regex(
        pattern: '/\d/',
        match: false,
        message: 'La description ne peut pas contenir de numéros'
    )]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;
   

    #[Assert\NotBlank(message: 'La date ne peut pas être vide')]
    #[Assert\Range(
        min: 'today',
        minMessage: 'La date ne peut pas être dans le passé',
        max: 'today',
        maxMessage: 'La date ne peut pas être dans le futur'
    )]
    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
   
    private ?\DateTimeInterface $date = null;

    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'Post')]
    private Collection $commentaires;

    #[ORM\ManyToOne(inversedBy: 'Post')]
    private ?User $user = null;

    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

   

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection<int, Commentaire>
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): static
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires->add($commentaire);
            $commentaire->setPost($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): static
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getPost() === $this) {
                $commentaire->setPost(null);
            }
        }

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
