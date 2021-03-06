<?php

namespace fichatecnica\fichaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * bien
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fichatecnica\fichaBundle\Entity\bienRepository")
 */
class bien
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
     * @ORM\Column(name="descbien", type="string", length=255)
     */
    private $descbien;

     /**
     * @var integer
     *
     * @ORM\Column(name="numpatrimonio", type="integer")
     */
    private $numpatrimonio;

    public function __toString() {
        return $this->descbien;
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
     * Set descbien
     *
     * @param string $descbien
     * @return bien
     */
    public function setDescbien($descbien)
    {
        $this->descbien = $descbien;
    
        return $this;
    }

    /**
     * Get descbien
     *
     * @return string 
     */
    public function getDescbien()
    {
        return $this->descbien;
    }

    /**
     * Set numpatrimonio
     *
     * @param integer $numpatrimonio
     * @return bien
     */
    public function setNumpatrimonio($numpatrimonio)
    {
        $this->numpatrimonio = $numpatrimonio;
    
        return $this;
    }

    /**
     * Get numpatrimonio
     *
     * @return integer 
     */
    public function getNumpatrimonio()
    {
        return $this->numpatrimonio;
    }
}