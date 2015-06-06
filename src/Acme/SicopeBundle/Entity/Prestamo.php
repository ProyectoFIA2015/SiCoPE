<?php

namespace Acme\SicopeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamo
 *
 * @ORM\Table(name="Prestamo", indexes={@ORM\Index(name="fk_Presta_idx", columns={"idPresta"}), @ORM\Index(name="fk_Recibe_idx", columns={"idRecibe"}), @ORM\Index(name="fk_Equipo_idx", columns={"idEquipo"})})
 * @ORM\Entity
 */
class Prestamo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idPrestamo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprestamo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaPrestamo", type="date", nullable=true)
     */
    private $fechaprestamo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaDevolucion", type="date", nullable=true)
     */
    private $fechadevolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var \Equipo
     *
     * @ORM\ManyToOne(targetEntity="Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEquipo", referencedColumnName="idEquipo")
     * })
     */
    private $idequipo;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPresta", referencedColumnName="idUsuario")
     * })
     */
    private $idpresta;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRecibe", referencedColumnName="idUsuario")
     * })
     */
    private $idrecibe;



    /**
     * Get idprestamo
     *
     * @return integer 
     */
    public function getIdprestamo()
    {
        return $this->idprestamo;
    }

    /**
     * Set fechaprestamo
     *
     * @param \DateTime $fechaprestamo
     * @return Prestamo
     */
    public function setFechaprestamo($fechaprestamo)
    {
        $this->fechaprestamo = $fechaprestamo;

        return $this;
    }

    /**
     * Get fechaprestamo
     *
     * @return \DateTime 
     */
    public function getFechaprestamo()
    {
        return $this->fechaprestamo;
    }

    /**
     * Set fechadevolucion
     *
     * @param \DateTime $fechadevolucion
     * @return Prestamo
     */
    public function setFechadevolucion($fechadevolucion)
    {
        $this->fechadevolucion = $fechadevolucion;

        return $this;
    }

    /**
     * Get fechadevolucion
     *
     * @return \DateTime 
     */
    public function getFechadevolucion()
    {
        return $this->fechadevolucion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Prestamo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set idequipo
     *
     * @param \Acme\SicopeBundle\Entity\Equipo $idequipo
     * @return Prestamo
     */
    public function setIdequipo(\Acme\SicopeBundle\Entity\Equipo $idequipo = null)
    {
        $this->idequipo = $idequipo;

        return $this;
    }

    /**
     * Get idequipo
     *
     * @return \Acme\SicopeBundle\Entity\Equipo 
     */
    public function getIdequipo()
    {
        return $this->idequipo;
    }

    /**
     * Set idpresta
     *
     * @param \Acme\SicopeBundle\Entity\Usuario $idpresta
     * @return Prestamo
     */
    public function setIdpresta(\Acme\SicopeBundle\Entity\Usuario $idpresta = null)
    {
        $this->idpresta = $idpresta;

        return $this;
    }

    /**
     * Get idpresta
     *
     * @return \Acme\SicopeBundle\Entity\Usuario 
     */
    public function getIdpresta()
    {
        return $this->idpresta;
    }

    /**
     * Set idrecibe
     *
     * @param \Acme\SicopeBundle\Entity\Usuario $idrecibe
     * @return Prestamo
     */
    public function setIdrecibe(\Acme\SicopeBundle\Entity\Usuario $idrecibe = null)
    {
        $this->idrecibe = $idrecibe;

        return $this;
    }

    /**
     * Get idrecibe
     *
     * @return \Acme\SicopeBundle\Entity\Usuario 
     */
    public function getIdrecibe()
    {
        return $this->idrecibe;
    }
}
