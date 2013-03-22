<?php

namespace Proxies\__CG__\fichatecnica\fichaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class ficha extends \fichatecnica\fichaBundle\Entity\ficha implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setFecha($fecha)
    {
        $this->__load();
        return parent::setFecha($fecha);
    }

    public function getFecha()
    {
        $this->__load();
        return parent::getFecha();
    }

    public function setSolicitado($solicitado)
    {
        $this->__load();
        return parent::setSolicitado($solicitado);
    }

    public function getSolicitado()
    {
        $this->__load();
        return parent::getSolicitado();
    }

    public function setDependencia($dependencia)
    {
        $this->__load();
        return parent::setDependencia($dependencia);
    }

    public function getDependencia()
    {
        $this->__load();
        return parent::getDependencia();
    }

    public function setObservaciones($observaciones)
    {
        $this->__load();
        return parent::setObservaciones($observaciones);
    }

    public function getObservaciones()
    {
        $this->__load();
        return parent::getObservaciones();
    }

    public function setRealizadopor($realizadopor)
    {
        $this->__load();
        return parent::setRealizadopor($realizadopor);
    }

    public function getRealizadopor()
    {
        $this->__load();
        return parent::getRealizadopor();
    }

    public function setFirmadopor($firmadopor)
    {
        $this->__load();
        return parent::setFirmadopor($firmadopor);
    }

    public function getFirmadopor()
    {
        $this->__load();
        return parent::getFirmadopor();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'fecha', 'solicitado', 'dependencia', 'observaciones', 'realizadopor', 'firmadopor');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}