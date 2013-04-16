<?php

namespace fichatecnica\fichaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * dependencias
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fichatecnica\fichaBundle\Entity\dependenciasRepository")
 */
class dependencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombredep", type="string", length=100)
     */
    private $nombredep;
     
    /**
     * @ORM\OneToMany(targetEntity="ficha", mappedBy="dependencias")
     * @return integer
     */
    private $ficha;
    
    public function __toString() {
        return $this->nombredep;
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombredep
     *
     * @param string $nombredep
     * @return dependencias
     */
    public function setNombredep($nombredep)
    {
        $this->nombredep = $nombredep;
    
        return $this;
    }

    /**
     * Get nombredep
     *
     * @return string 
     */
    public function getNombredep()
    {
        return $this->nombredep;
    }

    /**
     * Set ficha
     *
     * @param \fichatecnica\fichaBundle\Entity\ficha $ficha
     * @return dependencias
     */
    public function setFicha(\fichatecnica\fichaBundle\Entity\ficha $ficha = null)
    {
        $this->ficha = $ficha;
    
        return $this;
    }

    /**
     * Get ficha
     *
     * @return \fichatecnica\fichaBundle\Entity\ficha 
     */
    public function getFicha()
    {
        return $this->ficha;
    }
}