<?php

namespace App\Entity;

use App\Repository\EntrRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrRepository::class)
 */
class Entr
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numEntr;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEntr;

    /**
     * @ORM\Column(type="float")
     */
    private $prixEntr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumEntr(): ?int
    {
        return $this->numEntr;
    }

    public function setNumEntr(int $numEntr): self
    {
        $this->numEntr = $numEntr;

        return $this;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(int $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getDateEntr(): ?\DateTimeInterface
    {
        return $this->dateEntr;
    }

    public function setDateEntr(\DateTimeInterface $dateEntr): self
    {
        $this->dateEntr = $dateEntr;

        return $this;
    }

    public function getPrixEntr(): ?float
    {
        return $this->prixEntr;
    }

    public function setPrixEntr(float $prixEntr): self
    {
        $this->prixEntr = $prixEntr;

        return $this;
    }
}
