<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $nbVictoires = null;

    #[ORM\Column]
    private ?int $yes = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNbVictoires(): ?int
    {
        return $this->nbVictoires;
    }

    public function setNbVictoires(int $nbVictoires): self
    {
        $this->nbVictoires = $nbVictoires;

        return $this;
    }

    public function getYes(): ?int
    {
        return $this->yes;
    }

    public function setYes(int $yes): self
    {
        $this->yes = $yes;

        return $this;
    }
}
