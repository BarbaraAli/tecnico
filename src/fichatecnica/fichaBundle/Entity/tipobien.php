<?php

namespace fichatecnica\fichaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tipobien
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fichatecnica\fichaBundle\Entity\tipobienRepository")
 */
class tipobien
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
     * @ORM\Column(name="nombien", type="string", length=100)
     */
    private $nombien;


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
     * Set nombien
     *
     * @param string $nombien
     * @return tipobien
     */
    public function setNombien($nombien)
    {
        $this->nombien = $nombien;
    
        return $this;
    }

    /**
     * Get nombien
     *
     * @return string 
     */
    public function getNombien()
    {
        return $this->nombien;
    }
}
