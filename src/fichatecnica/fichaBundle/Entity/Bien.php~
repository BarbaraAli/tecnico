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
}