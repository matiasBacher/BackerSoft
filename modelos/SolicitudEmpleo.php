<?php
namespace modelos;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "SolicitudDeEmpleado")]
class SolicitudEmpleo
{
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue]
    private int $id;

    #[ORM\Column(type: "string", length: 50, nullable: false)]
    private string $nombre;

    #[ORM\Column(type: "string", length: 50, nullable: false)]
    private string $apellido;

    #[ORM\ManyToOne(targetEntity: Puestos::class)]
    #[ORM\JoinColumn(name: "puestoRequerido", referencedColumnName: "id", nullable: false)]
    private Puestos $puestoRequerido;

    #[ORM\Column(type: "string", length: 20, unique: true, nullable: false)]
    private string $dni;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $annosDeExperiencia;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $otrosTrabajos;

    #[ORM\Column(type: "datetime")]
    private \DateTime $fechaCreacion;

    public function __construct(
        string $nombre,
        string $apellido,
        Puestos $puestoRequerido,
        string $dni,
        ?int $annosDeExperiencia = null,
        ?string $otrosTrabajos = null
    ) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->puestoRequerido = $puestoRequerido;
        $this->dni = $dni;
        $this->annosDeExperiencia = $annosDeExperiencia;
        $this->otrosTrabajos = $otrosTrabajos;
        $this->fechaCreacion = new \DateTime("now"); // Fecha actual por defecto
    }

    // Getters y Setters

    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    public function getPuestoRequerido(): Puestos
    {
        return $this->puestoRequerido;
    }

    public function setPuestoRequerido(Puestos $puestoRequerido): void
    {
        $this->puestoRequerido = $puestoRequerido;
    }

    public function getDni(): string
    {
        return $this->dni;
    }

    public function setDni(string $dni): void
    {
        $this->dni = $dni;
    }

    public function getAnnosDeExperiencia(): ?int
    {
        return $this->annosDeExperiencia;
    }

    public function setAnnosDeExperiencia(?int $annosDeExperiencia): void
    {
        $this->annosDeExperiencia = $annosDeExperiencia;
    }

    public function getOtrosTrabajos(): ?string
    {
        return $this->otrosTrabajos;
    }

    public function setOtrosTrabajos(?string $otrosTrabajos): void
    {
        $this->otrosTrabajos = $otrosTrabajos;
    }

    public function getFechaCreacion(): \DateTime
    {
        return $this->fechaCreacion;
    }

    public function setFechaCreacion(\DateTime $fechaCreacion): void
    {
        $this->fechaCreacion = $fechaCreacion;
    }
}
