<?php

namespace fichatecnica\fichaBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * usuarios
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fichatecnica\fichaBundle\Entity\usuariosRepository")
 */

class usuarios extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nomyape", type="string", length=100)
     */
    private $nomyape;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    

    /**
     * Set nomyape
     *
     * @param string $nomyape
     * @return usuarios
     */
    public function setNomyape($nomyape)
    {
        $this->nomyape = $nomyape;
    
        return $this;
    }

    /**
     * Get nomyape
     *
     * @return string 
     */
    public function getNomyape()
    {
        return $this->nomyape;
    }
}