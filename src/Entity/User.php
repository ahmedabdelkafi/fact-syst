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
   
    #[ORM\Column(length: 255)]
    private string $name;
    
    #[ORM\Column(length: 255)]
    private string $prename;

    #[ORM\Column(length: 255)]
    private string $mail;

    #[ORM\Column(length: 255)]
    private string $psw;

    #[ORM\Column(length: 255)]
    private int $num;
   
   
   
    public function getId(): ?int
    {
        return $this->id;
    }
}
