<?php

namespace App\Entity;

use App\Repository\PortfolioRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: PortfolioRepository::class)]
#[Broadcast]
class Portfolio
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private $image = null;

    #[ORM\Column(length: 150)]
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    private ?string $profession = null;

    #[ORM\Column(length: 255)]
    private ?string $propos = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDeNaissance = null;

    #[ORM\Column(length: 255)]
    private ?string $tel = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $Qualite = null;

    #[ORM\Column(length: 255)]
    private ?string $competence = null;

    #[ORM\Column(length: 255)]
    private ?string $resume = null;

    #[ORM\Column(length: 255)]
    private ?string $experienceProfessionnel = null;

    #[ORM\Column(length: 255)]
    private ?string $service = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): static
    {
        $this->image = $image;

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

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): static
    {
        $this->profession = $profession;

        return $this;
    }

    public function getPropos(): ?string
    {
        return $this->propos;
    }

    public function setPropos(string $propos): static
    {
        $this->propos = $propos;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $dateDeNaissance): static
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getQualite(): ?string
    {
        return $this->Qualite;
    }

    public function setQualite(string $Qualite): static
    {
        $this->Qualite = $Qualite;

        return $this;
    }

    public function getCompetence(): ?string
    {
        return $this->competence;
    }

    public function setCompetence(string $competence): static
    {
        $this->competence = $competence;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): static
    {
        $this->resume = $resume;

        return $this;
    }

    public function getExperienceProfessionnel(): ?string
    {
        return $this->experienceProfessionnel;
    }

    public function setExperienceProfessionnel(string $experienceProfessionnel): static
    {
        $this->experienceProfessionnel = $experienceProfessionnel;

        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(string $service): static
    {
        $this->service = $service;

        return $this;
    }
}
