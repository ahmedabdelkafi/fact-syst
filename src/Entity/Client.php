<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $name;

    #[ORM\Column(length: 255)]
    private string $prename;

    #[ORM\Column(length: 255)]
    private string $gender;

   
    private int $num;

    #[ORM\Column(length: 255)]
    private string $psw;

    #[ORM\Column(length: 255)]
    private string $addr;

    #[ORM\Column(length: 255)]
    private string $speciality;

    #[ORM\Column(length: 255)]
    private string $ville;

    #[ORM\Column(length: 255)]
    private string $langues;

    #[ORM\Column(length: 255)]
    private string $cnam;

    


    public function getId(): ?int
    {
        return $this->id;
    }
}
