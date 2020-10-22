<?php

namespace App\Entity;

use App\Repository\ComentariosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ComentariosRepository::class)
 */
class Comentarios
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Comentario;


        /**
      * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="comentarios")
     */
    private $user;

     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Posts", inversedBy="comentarios")
     */
    private $posts;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha_publicacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComentario(): ?string
    {
        return $this->Comentario;
    }

    public function setComentario(string $Comentario): self
    {
        $this->Comentario = $Comentario;

        return $this;
    }

    public function getFechaPublicacion(): ?\DateTimeInterface
    {
        return $this->fecha_publicacion;
    }

    public function setFechaPublicacion(\DateTimeInterface $fecha_publicacion): self
    {
        $this->fecha_publicacion = $fecha_publicacion;

        return $this;
    }
}
