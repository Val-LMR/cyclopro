<?php

namespace App\Entity;

use App\Repository\ReparationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReparationRepository::class)]
class Reparation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typeReparation = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_UTC_IMMUTABLE)]
    private ?\DateTimeImmutable $dateDepot = null;

    #[ORM\Column(length: 25)]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeReparation(): ?string
    {
        return $this->typeReparation;
    }

    public function setTypeReparation(string $typeReparation): static
    {
        $this->typeReparation = $typeReparation;

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

    public function getDateDepot(): ?\DateTimeImmutable
    {
        return $this->dateDepot;
    }

    public function setDateDepot(\DateTimeImmutable $dateDepot): static
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
