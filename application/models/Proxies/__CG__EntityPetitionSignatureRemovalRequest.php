<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PetitionSignatureRemovalRequest extends \Entity\PetitionSignatureRemovalRequest implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'allowed_types', 'type', 'reason', 'signatureId', 'dateAdded', 'dateRemoved', 'user', 'removedByUser');
        }

        return array('__isInitialized__', 'id', 'allowed_types', 'type', 'reason', 'signatureId', 'dateAdded', 'dateRemoved', 'user', 'removedByUser');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PetitionSignatureRemovalRequest $proxy) {
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
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', array());

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded(\DateTime $dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', array($dateAdded));

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateRemoved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateRemoved', array());

        return parent::getDateRemoved();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateRemoved(\DateTime $dateRemoved)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateRemoved', array($dateRemoved));

        return parent::setDateRemoved($dateRemoved);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemovedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemovedByUser', array());

        return parent::getRemovedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setRemovedByUser(\Entity\User $removedByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemovedByUser', array($removedByUser));

        return parent::setRemovedByUser($removedByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getSignatureId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSignatureId', array());

        return parent::getSignatureId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSignatureId($signatureId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSignatureId', array($signatureId));

        return parent::setSignatureId($signatureId);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', array());

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getReason()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReason', array());

        return parent::getReason();
    }

    /**
     * {@inheritDoc}
     */
    public function setReason($reason)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReason', array($reason));

        return parent::setReason($reason);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntity', array());

        return parent::getEntity();
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
