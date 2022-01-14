<?php

namespace App\Entity;

use App\Repository\CombatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CombatRepository::class)]
class Combat
{
    CONST STATUS_EN_COUR = "en cour";
    CONST STATUS_ANNULER = "annuler";
    CONST SATUS_TERMINER = "terminer";

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;
 

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private $user_demande;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private $user_reception;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $vainqueur;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

    #[ORM\Column(type: 'string', length: 255)]
    private $status = self::STATUS_EN_COUR;

  
    public function Annuler(): bool
    {
        return $this->status === self::STATUS_ANNULER;
    }
    public function Terminer(): bool
    {
        return $this->status === self::SATUS_TERMINER;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserDemande(): ?User
    {
        return $this->user_demande;
    }

    public function setUserDemande(User $user_demande): self
    {
        $this->user_demande = $user_demande;

        return $this;
    }

    public function getUserReception(): User
    {
        return $this->user_reception;
    }

    public function setUserReception(User $user_reception): self
    {
        $this->user_reception = $user_reception;

        return $this;
    }

    public function getVainqueur(): ?string
    {
        return $this->vainqueur;
    }

    public function setVainqueur(?string $vainqueur): self
    {
        $this->vainqueur = $vainqueur;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
