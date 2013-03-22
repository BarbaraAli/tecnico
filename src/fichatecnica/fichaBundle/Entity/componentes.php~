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
}