<?php

namespace Acme\SicopeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="Usuario", uniqueConstraints={@ORM\UniqueConstraint(name="due_UNIQUE", columns={"due"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUsuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="due", type="string", length=45, nullable=true)
     */
    private $due;

    /**
     * @var string
     *
     * @ORM\Column(name="carrera", type="string", length=45, nullable=true)
     */
    private $carrera;

    /**
     * @var string
     *
     * @ORM\Column(name="miembro", type="string", length=45, nullable=true)
     */
    private $miembro;



    /**
     * Get idusuario
     *
     * @return integer 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set due
     *
     * @param string $due
     * @return Usuario
     */
    public function setDue($due)
    {
        $this->due = $due;

        return $this;
    }

    /**
     * Get due
     *
     * @return string 
     */
    public function getDue()
    {
        return $this->due;
    }

    /**
     * Set carrera
     *
     * @param string $carrera
     * @return Usuario
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return string 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set miembro
     *
     * @param string $miembro
     * @return Usuario
     */
    public function setMiembro($miembro)
    {
        $this->miembro = $miembro;

        return $this;
    }

    /**
     * Get miembro
     *
     * @return string 
     */
    public function getMiembro()
    {
        return $this->miembro;
    }
    
    function __toString(){
        return $this->nombre;
    }
}
