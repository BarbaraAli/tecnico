<?php

namespace fichatecnica\fichaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tipocomponente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fichatecnica\fichaBundle\Entity\tipocomponenteRepository")
 */
class tipocomponente
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
     * @ORM\Column(name="descomponente", type="string", length=150)
     */
    private $descomponente;

    /**
     * @ORM\OneToMany(targetEntity="componentes", mappedBy="tipocomponentes")
     */
    private $componentes;
    
    public function __toString() {
        return $this->descomponente;
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
     * Set descomponente
     *
     * @param string $descomponente
     * @return tipocomponente
     */
    public function setDescomponente($descomponente)
    {
        $this->descomponente = $descomponente;
    
        return $this;
    }

    /**
     * Get descomponente
     *
     * @return string 
     */
    public function getDescomponente()
    {
        return $this->descomponente;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->componentes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add componentes
     *
     * @param \fichatecnica\fichaBundle\Entity\componentes $componentes
     * @return tipocomponente
     */
    public function addComponente(\fichatecnica\fichaBundle\Entity\componentes $componentes)
    {
        $this->componentes[] = $componentes;
    
        return $this;
    }

    /**
     * Remove componentes
     *
     * @param \fichatecnica\fichaBundle\Entity\componentes $componentes
     */
    public function removeComponente(\fichatecnica\fichaBundle\Entity\componentes $componentes)
    {
        $this->componentes->removeElement($componentes);
    }

    /**
     * Get componentes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComponentes()
    {
        return $this->componentes;
    }
}