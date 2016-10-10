<?php

namespace Proxies\__CG__\AeroportBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class avions extends \AeroportBundle\Entity\avions implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AeroportBundle\\Entity\\avions' . "\0" . 'id', '' . "\0" . 'AeroportBundle\\Entity\\avions' . "\0" . 'idAvion', '' . "\0" . 'AeroportBundle\\Entity\\avions' . "\0" . 'idVol', '' . "\0" . 'AeroportBundle\\Entity\\avions' . "\0" . 'idUser', '' . "\0" . 'AeroportBundle\\Entity\\avions' . "\0" . 'capacity'];
        }

        return ['__isInitialized__', '' . "\0" . 'AeroportBundle\\Entity\\avions' . "\0" . 'id', '' . "\0" . 'AeroportBundle\\Entity\\avions' . "\0" . 'idAvion', '' . "\0" . 'AeroportBundle\\Entity\\avions' . "\0" . 'idVol', '' . "\0" . 'AeroportBundle\\Entity\\avions' . "\0" . 'idUser', '' . "\0" . 'AeroportBundle\\Entity\\avions' . "\0" . 'capacity'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (avions $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdAvion($idAvion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdAvion', [$idAvion]);

        return parent::setIdAvion($idAvion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdAvion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdAvion', []);

        return parent::getIdAvion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdVol($idVol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdVol', [$idVol]);

        return parent::setIdVol($idVol);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdVol()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdVol', []);

        return parent::getIdVol();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUser($idUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUser', [$idUser]);

        return parent::setIdUser($idUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUser', []);

        return parent::getIdUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCapacity($capacity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCapacity', [$capacity]);

        return parent::setCapacity($capacity);
    }

    /**
     * {@inheritDoc}
     */
    public function getCapacity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCapacity', []);

        return parent::getCapacity();
    }

}
