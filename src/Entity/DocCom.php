<?php

namespace App\Entity;

use App\Repository\DocComRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Float_;
use Symfony\Component\Validator\Constraints\Date;

#[ORM\Entity(repositoryClass: DocComRepository::class)]
class DocCom
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $docnum;

    #[ORM\Column(length: 255)]
    private string $objet;

    #[ORM\Column(length: 255)]
    private string $etat;

    /**
     * @ORM\Column(type="date")
     */
    private $createdat;

    #[ORM\Column(length: 255)]
    private float $prixU;

    #[ORM\Column(length: 255)]
    private int $qte;
        
    #[ORM\Column(length: 255)]
    private string  $cnam;


    public function getId(): ?int
    {
        return $this->id;
    }
}
