<?php

namespace App\Entity;

use App\Repository\SortieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SortieRepository::class)
 */
class Sortie
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
    private $numSortie;

    /**
     * @ORM\Column(type="integer")
     */
    private $qte;

    /**
     * @ORM\Column(type="date")
     */
    private $dateSortie;

    /**
     * @ORM\Column(type="float")
     */
    private $prixSortie;

    /**
     * @return mixed
     */
    public function getPrixSortie()
    {
        return $this->prixSortie;
    }

    /**
     * @param mixed $prixSortie
     */
    public function setPrixSortie($prixSortie): void
    {
        $this->prixSortie = $prixSortie;
    }


        public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumSortie(): ?int
    {
        return $this->numSortie;
    }

    public function setNumSortie(int $numSortie): self
    {
        $this->numSortie = $numSortie;

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

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->dateSortie;
    }

    public function setDateSortie(\DateTimeInterface $dateSortie): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }
}
