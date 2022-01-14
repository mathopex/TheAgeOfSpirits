<?php

namespace App\Entity;

use App\Entity\Traits\CreatedAtTrait;
use App\Repository\PersoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersoRepository::class)]
class Perso
{
    use CreatedAtTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $pseudo;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $niveau;

    #[ORM\Column(type: 'string', length: 255)]
    private $class;

    #[ORM\Column(type: 'string', length: 255)]
    private $clan;

    #[ORM\Column(type: 'string', length: 255)]
    private $sex;

    //#[ORM\ManyToOne(targetEntity: Combat::class)]
    //#[ORM\JoinColumn(nullable: true)]
    #[ORM\Column(type: 'integer')]
    private $nbVictoire;

    #[ORM\ManyToOne(targetEntity: Combat::class)]
    #[ORM\JoinColumn(nullable: true)]
    private $nbDefaite;




    // #[ORM\Column(type: 'integer')]
    // private $health;

    // #[ORM\Column(type: 'integer')]
    // private $attack;

    // #[ORM\Column(type: 'integer')]
    // private $defense;

    // #[ORM\Column(type: 'string', length: 255)]
    // private $specialitis;

    // #[ORM\Column(type: 'integer')]
    // private $specialitis_value;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setniveau(string $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getClan(): ?string
    {
        return $this->clan;
    }

    public function setClan(string $clan): self
    {
        $this->clan = $clan;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getNbVictoire(): ?float
    {
        return $this->nbVictoire;
    }

    public function setNbVictoire(float $nbVictoire): self
    {
        $this->nbVictoire = $nbVictoire;

        return $this;
    }

    public function getNbDefaite(): ?float
    {
        return $this->nbDefaite;
    }

    public function setNbDefaite(float $nbDefaite): self
    {
        $this->nbDefaite = $nbDefaite;

        return $this;
    }



    public function getHealth(): ?int
    {
        return $this->health;
    }

    public function setHealth(int $health): self
    {
        $this->health = $health;

        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): self
    {
        $this->attack = $attack;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getSpecialitis(): ?string
    {
        return $this->specialitis;
    }

    public function setSpecialitis(string $specialitis): self
    {
        $this->specialitis = $specialitis;

        return $this;
    }

    public function getSpecialitisValue(): ?int
    {
        return $this->specialitis_value;
    }

    public function setSpecialitisValue(int $specialitis_value): self
    {
        $this->specialitis_value = $specialitis_value;

        return $this;
    }
}
