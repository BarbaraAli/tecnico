<?php

namespace fichatecnica\fichaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * componentes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fichatecnica\fichaBundle\Entity\componentesRepository")
 */
class componentes
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
     * @ORM\Column(name="desccomp", type="string", length=255)
     */
    private $desccomp;

     /**
     * @var integer
     *
     * @ORM\Column(name="numpatri", type="integer", nullable=true)
     */
    private $numpatri;
   public function __toString() {
        return $this->desccomp;
    }
 
     /**
     * @ORM\ManyToOne(targetEntity="tipocomponente", inversedBy="componentes")
     * @ORM\JoinColumn(name="componente_id", referencedColumnName="id")
     * @return integer
     */
    private $tipocomponente;
    
    
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
     * Set desccomp
     *
     * @param string $desccomp
     * @return componentes
     */
    public function setDesccomp($desccomp)
    {
        $this->desccomp = $desccomp;
    
        return $this;
    }

    /**
     * Get desccomp
     *
     * @return string 
     */
    public function getDesccomp()
    {
        return $this->desccomp;
    }

    /**
     * Set numpatri
     *
     * @param integer $numpatri
     * @return componentes
     */
    public function setNumpatri($numpatri)
    {
        $this->numpatri = $numpatri;
    
        return $this;
    }

    /**
     * Get numpatri
     *
     * @return integer 
     */
    public function getNumpatri()
    {
        return $this->numpatri;
    }

    /**
     * Set tipocomponente
     *
     * @param \fichatecnica\fichaBundle\Entity\tipocomponente $tipocomponente
     * @return componentes
     */
    public function setTipocomponente(\fichatecnica\fichaBundle\Entity\tipocomponente $tipocomponente = null)
    {
        $this->tipocomponente = $tipocomponente;
    
        return $this;
    }

    /**
     * Get tipocomponente
     *
     * @return \fichatecnica\fichaBundle\Entity\tipocomponente 
     */
    public function getTipocomponente()
    {
        return $this->tipocomponente;
    }
}