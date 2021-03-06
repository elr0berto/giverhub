<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ChangeOrgPetitionSignature extends \Entity\ChangeOrgPetitionSignature implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'id', 'petition_id', 'name', 'city', 'state', 'country_name', 'country_code', 'signed_on');
        }

        return array('__isInitialized__', 'id', 'petition_id', 'name', 'city', 'state', 'country_name', 'country_code', 'signed_on');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ChangeOrgPetitionSignature $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', array($city));

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', array());

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountryCode($country_code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountryCode', array($country_code));

        return parent::setCountryCode($country_code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountryCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountryCode', array());

        return parent::getCountryCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountryName($country_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountryName', array($country_name));

        return parent::setCountryName($country_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountryName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountryName', array());

        return parent::getCountryName();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPetitionId($petition_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPetitionId', array($petition_id));

        return parent::setPetitionId($petition_id);
    }

    /**
     * {@inheritDoc}
     */
    public function setPetition(\Entity\ChangeOrgPetition $petition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPetition', array($petition));

        return parent::setPetition($petition);
    }

    /**
     * {@inheritDoc}
     */
    public function getPetitionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPetitionId', array());

        return parent::getPetitionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSignedOn($signed_on)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSignedOn', array($signed_on));

        return parent::setSignedOn($signed_on);
    }

    /**
     * {@inheritDoc}
     */
    public function setSignedOnDt(\DateTime $signed_on)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSignedOnDt', array($signed_on));

        return parent::setSignedOnDt($signed_on);
    }

    /**
     * {@inheritDoc}
     */
    public function getSignedOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSignedOn', array());

        return parent::getSignedOn();
    }

    /**
     * {@inheritDoc}
     */
    public function getSignedOnDt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSignedOnDt', array());

        return parent::getSignedOnDt();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', array($state));

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', array());

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function getIntervalFromNow()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntervalFromNow', array());

        return parent::getIntervalFromNow();
    }

    /**
     * {@inheritDoc}
     */
    public function getPetition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPetition', array());

        return parent::getPetition();
    }

    /**
     * {@inheritDoc}
     */
    public function get_class_without_namespace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'get_class_without_namespace', array());

        return parent::get_class_without_namespace();
    }

}
