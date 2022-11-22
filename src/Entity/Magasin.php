<?php

namespace App\Entity;

use App\Repository\MagasinRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MagasinRepository::class)
 */
class Magasin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomMg;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMg(): ?string
    {
        return $this->nomMg;
    }

    public function setNomMg(string $nomMg): self
    {
        $this->nomMg = $nomMg;

        return $this;
    }
}
