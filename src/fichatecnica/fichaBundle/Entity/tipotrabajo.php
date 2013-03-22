<?php

namespace fichatecnica\fichaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tipotrabajo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fichatecnica\fichaBundle\Entity\tipotrabajoRepository")
 */
class tipotrabajo
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
     * @ORM\Column(name="desctt", type="string", length=255)
     */
    private $desctt;


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
     * Set desctt
     *
     * @param string $desctt
     * @return tipotrabajo
     */
    public function setDesctt($desctt)
    {
        $this->desctt = $desctt;
    
        return $this;
    }

    /**
     * Get desctt
     *
     * @return string 
     */
    public function getDesctt()
    {
        return $this->desctt;
    }
}