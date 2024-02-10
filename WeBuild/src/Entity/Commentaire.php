<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
#[Broadcast]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contenu = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datecreation = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbrlikes = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbrdislikes = null;

    #[ORM\OneToMany(targetEntity: Post::class, mappedBy: 'Commentaire', orphanRemoval: true)]
    private Collection $posts;

    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }

   
 

    
   
   

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

    public function setDatecreation(\DateTimeInterface $datecreation): static
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

    /**
     * @return Collection<int, Post>
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Post $post): static
    {
        if (!$this->posts->contains($post)) {
            $this->posts->add($post);
            $post->setCommentaire($this);
        }

        return $this;
    }

    public function removePost(Post $post): static
    {
        if ($this->posts->removeElement($post)) {
            // set the owning side to null (unless already changed)
            if ($post->getCommentaire() === $this) {
                $post->setCommentaire(null);
            }
        }

        return $this;
    }

    
    

   
}
