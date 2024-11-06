<?php
namespace modelos;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: "Puestos")]
class Puestos
{
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: "string", length: 100)]
    private string $descripcion;

     public function __construct(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }

    // Getters y Setters

    public function getId(): int
    {
        return $this->id;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

  
}
  
