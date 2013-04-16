<?php

namespace fichatecnica\fichaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ficha
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fichatecnica\fichaBundle\Entity\fichaRepository")
 */


class ficha
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;
    
    /**
     * @ORM\ManyToOne(targetEntity="dependencias", inversedBy="ficha")
     * @ORM\JoinColumn(name="dependencias_id", referencedColumnName="id")
     */
    private $dependencia;
    public function __toString() {
        return $this->dependencia;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="solicitado", type="string", length=255)
     */
    private $solicitado;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;

     /**
     * @var integer
     *
     * @ORM\Column(name="bien", type="integer", nullable=true)
     */
    
    /**
     * @ORM\ManyToMany(targetEntity="fichatecnica\fichaBundle\Entity\bien")
     * @ORM\JoinTable(name="ficha_bien",
     *      joinColumns={@ORM\JoinColumn(name="ficha_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="bien_id", referencedColumnName="id")}
     *      )
     */
     private $bien;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="actsimple", type="string", length=100, nullable=true)
     */
    private $actsimple;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="realizadopor", type="string", length=255)
     */
    private $realizadopor;
    
    /**
     * @var string
     *
     * @ORM\Column(name="firmadopor", type="string", length=255)
     */
    private $firmadopor;
    
    
     /**
     * @var integer
     *
     * @ORM\Column(name="componentes", type="integer", nullable=true)
     */

      /**
     * @ORM\ManyToMany(targetEntity="fichatecnica\fichaBundle\Entity\componentes")
     * @ORM\JoinTable(name="ficha_componentes",
     *      joinColumns={@ORM\JoinColumn(name="ficha_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="componentes_id", referencedColumnName="id")}
     *      )
     */
    private $componentes;

         /**
     * @var integer
     *
     * @ORM\Column(name="tipot", type="integer")
     */
        /**
     * @ORM\ManyToMany(targetEntity="fichatecnica\fichaBundle\Entity\tipotrabajo")
     * @ORM\JoinTable(name="ficha_tipot",
     *      joinColumns={@ORM\JoinColumn(name="ficha_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="tipot_id", referencedColumnName="id")}
     *      )
     */
    private $tipot;
    
    /**
     * Get id
     *
     * @return integer 
     **/        
    public function getId()
    {
        return $this->id;
    }

    

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ficha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set solicitado
     *
     * @param string $solicitado
     * @return ficha
     */
    public function setSolicitado($solicitado)
    {
        $this->solicitado = $solicitado;
    
        return $this;
    }

    /**
     * Get solicitado
     *
     * @return string 
     */
    public function getSolicitado()
    {
        return $this->solicitado;
    }

    /**
     * Set dependencia
     *
     * @param string $dependencia
     * @return ficha
     */
    public function setDependencia($dependencia)
    {
        $this->dependencia = $dependencia;
    
        return $this;
    }

    /**
     * Get dependencia
     *
     * @return string 
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return ficha
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
   
    /**
     * Set realizadopor
     *
     * @param string $realizadopor
     * @return ficha
     */
    public function setRealizadopor($realizadopor)
    {
        $this->realizadopor = $realizadopor;
    
        return $this;
    }

    /**
     * Get realizadopor
     *
     * @return string 
     */
    public function getRealizadopor()
    {
        return $this->realizadopor;
    }

    /**
     * Set firmadopor
     *
     * @param string $firmadopor
     * @return ficha
     */
    public function setFirmadopor($firmadopor)
    {
        $this->firmadopor = $firmadopor;
    
        return $this;
    }

    /**
     * Get firmadopor
     *
     * @return string 
     */
    public function getFirmadopor()
    {
        return $this->firmadopor;
    }

    /**
     * Set bien
     *
     * @param integer $bien 
     * @return ficha
     */
    public function setBien(bien $bien)
    {
        $this->bien = $bien;
    
        return $this;
    }

    /**
     * Get bien
     *
     * @return integer 
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set componentes
     *
     * @param integer $componentes
     * @return ficha
     */
    public function setComponentes(componentes $componentes)
    {
        $this->componentes = $componentes;
    
        return $this;
    }

    /**
     * Get componentes
     *
     * @return integer 
     */
    public function getComponentes()
    {
        return $this->componentes;
    }
    
  public function __constructorComponentes() {
        $this->componentes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function __constructorBien() {
        $this->bien = new \Doctrine\Common\Collections\ArrayCollection();
    }
     public function __constructorTipot() {
        $this->tipot = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bien
     *
     * @param \fichatecnica\fichaBundle\Entity\bien $bien
     * @return ficha
     */
    public function addBien(\fichatecnica\fichaBundle\Entity\bien $bien)
    {
        $this->bien[] = $bien;
    
        return $this;
    }

    /**
     * Remove bien
     *
     * @param \fichatecnica\fichaBundle\Entity\bien $bien
     */
    public function removeBien(\fichatecnica\fichaBundle\Entity\bien $bien)
    {
        $this->bien->removeElement($bien);
    }

    /**
     * Add componentes
     *
     * @param \fichatecnica\fichaBundle\Entity\componentes $componentes
     * @return ficha
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
     * Set tipot
     *
     * @param integer $tipot
     * @return ficha
     */
    public function setTipot($tipot)
    {
        $this->tipot = $tipot;
    
        return $this;
    }

    /**
     * Get tipot
     *
     * @return integer 
     */
    public function getTipot()
    {
        return $this->tipot;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bien = new \Doctrine\Common\Collections\ArrayCollection();
        $this->componentes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tipot = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set actsimple
     *
     * @param string $actsimple
     * @return ficha
     */
    public function setActsimple($actsimple)
    {
        $this->actsimple = $actsimple;
    
        return $this;
    }

    /**
     * Get actsimple
     *
     * @return string 
     */
    public function getActsimple()
    {
        return $this->actsimple;
    }

    /**
     * Add tipot
     *
     * @param \fichatecnica\fichaBundle\Entity\tipotrabajo $tipot
     * @return ficha
     */
    public function addTipot(\fichatecnica\fichaBundle\Entity\tipotrabajo $tipot)
    {
        $this->tipot[] = $tipot;
    
        return $this;
    }

    /**
     * Remove tipot
     *
     * @param \fichatecnica\fichaBundle\Entity\tipotrabajo $tipot
     */
    public function removeTipot(\fichatecnica\fichaBundle\Entity\tipotrabajo $tipot)
    {
        $this->tipot->removeElement($tipot);
    }
}