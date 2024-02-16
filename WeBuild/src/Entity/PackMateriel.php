<?php

namespace App\Entity;

use App\Repository\PackMaterielRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PackMaterielRepository::class)]
class PackMateriel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $libelle_pack = null;

    #[ORM\Column(length: 800)]
    private ?string $description_pack = null;

    #[ORM\Column]
    private ?int $prix_pack = null;

    #[ORM\Column(length: 255)]
    private ?string $image_pack = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellePack(): ?string
    {
        return $this->libelle_pack;
    }

    public function setLibellePack(string $libelle_pack): static
    {
        $this->libelle_pack = $libelle_pack;

        return $this;
    }

    public function getDescriptionPack(): ?string
    {
        return $this->description_pack;
    }

    public function setDescriptionPack(string $description_pack): static
    {
        $this->description_pack = $description_pack;

        return $this;
    }

    public function getPrixPack(): ?int
    {
        return $this->prix_pack;
    }

    public function setPrixPack(int $prix_pack): static
    {
        $this->prix_pack = $prix_pack;

        return $this;
    }

    public function getImagePack(): ?string
    {
        return $this->image_pack;
    }

    public function setImagePack(string $image_pack): static
    {
        $this->image_pack = $image_pack;

        return $this;
    }
}
