<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RecurringDonation extends \Entity\RecurringDonation implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'user_id', 'recurring_donation_id', 'amount', 'npo_name', 'recur_type', 'status', 'last_date', 'next_date', 'notify', 'recur_types');
        }

        return array('__isInitialized__', 'id', 'user_id', 'recurring_donation_id', 'amount', 'npo_name', 'recur_type', 'status', 'last_date', 'next_date', 'notify', 'recur_types');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RecurringDonation $proxy) {
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
    public function setAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmount', array($amount));

        return parent::setAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmount', array());

        return parent::getAmount();
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
    public function setLastDate($last_date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastDate', array($last_date));

        return parent::setLastDate($last_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastDate', array());

        return parent::getLastDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setNextDate($next_date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNextDate', array($next_date));

        return parent::setNextDate($next_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getNextDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNextDate', array());

        return parent::getNextDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setNpoName($npo_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNpoName', array($npo_name));

        return parent::setNpoName($npo_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getNpoName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNpoName', array());

        return parent::getNpoName();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecurType($recur_type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecurType', array($recur_type));

        return parent::setRecurType($recur_type);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecurType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecurType', array());

        return parent::getRecurType();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecurringDonationId($recurring_donation_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecurringDonationId', array($recurring_donation_id));

        return parent::setRecurringDonationId($recurring_donation_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecurringDonationId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecurringDonationId', array());

        return parent::getRecurringDonationId();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserId($user_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserId', array($user_id));

        return parent::setUserId($user_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', array());

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
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
    public function setNotify($notify)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotify', array($notify));

        return parent::setNotify($notify);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotify()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotify', array());

        return parent::getNotify();
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