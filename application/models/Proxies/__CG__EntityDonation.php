<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Donation extends \Entity\Donation implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'userId', 'charityId', 'chargeId', 'cofId', 'amount', 'date', 'instant', 'recur_type', 'givercardTransactionId', 'paypal', 'paypal_token', 'dedication', 'hidden', 'recur_types', 'charity');
        }

        return array('__isInitialized__', 'id', 'userId', 'charityId', 'chargeId', 'cofId', 'amount', 'date', 'instant', 'recur_type', 'givercardTransactionId', 'paypal', 'paypal_token', 'dedication', 'hidden', 'recur_types', 'charity');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Donation $proxy) {
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
    public function donate(\Entity\User $user, $cofId, $amount, $charityId, $instant, $dedication, $recurType = 'NotRecurring', $giverCardTransaction = false, $giverCardTransactionId = NULL, $giverCardFromUser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'donate', array($user, $cofId, $amount, $charityId, $instant, $dedication, $recurType, $giverCardTransaction, $giverCardTransactionId, $giverCardFromUser));

        return parent::donate($user, $cofId, $amount, $charityId, $instant, $dedication, $recurType, $giverCardTransaction, $giverCardTransactionId, $giverCardFromUser);
    }

    /**
     * {@inheritDoc}
     */
    public function initialize_paypal(\Entity\User $user, \Entity\Charity $charity, $amount, $dedication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'initialize_paypal', array($user, $charity, $amount, $dedication));

        return parent::initialize_paypal($user, $charity, $amount, $dedication);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getCharity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCharity', array());

        return parent::getCharity();
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
    public function getUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', array());

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserEntity', array());

        return parent::getUserEntity();
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
    public function getDateTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateTime', array());

        return parent::getDateTime();
    }

    /**
     * {@inheritDoc}
     */
    public function getInstant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstant', array());

        return parent::getInstant();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstant($instant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstant', array($instant));

        return parent::setInstant($instant);
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
    public function getGivercardTransactionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGivercardTransactionId', array());

        return parent::getGivercardTransactionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaypal($paypal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaypal', array($paypal));

        return parent::setPaypal($paypal);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaypal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaypal', array());

        return parent::getPaypal();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaypalToken($paypal_token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaypalToken', array($paypal_token));

        return parent::setPaypalToken($paypal_token);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaypalToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaypalToken', array());

        return parent::getPaypalToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setChargeId($chargeId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChargeId', array($chargeId));

        return parent::setChargeId($chargeId);
    }

    /**
     * {@inheritDoc}
     */
    public function getChargeId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChargeId', array());

        return parent::getChargeId();
    }

    /**
     * {@inheritDoc}
     */
    public function isComplete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isComplete', array());

        return parent::isComplete();
    }

    /**
     * {@inheritDoc}
     */
    public function getDedication()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDedication', array());

        return parent::getDedication();
    }

    /**
     * {@inheritDoc}
     */
    public function setDedication($dedication)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDedication', array($dedication));

        return parent::setDedication($dedication);
    }

    /**
     * {@inheritDoc}
     */
    public function getHidden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHidden', array());

        return parent::getHidden();
    }

    /**
     * {@inheritDoc}
     */
    public function setHidden($hidden)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHidden', array($hidden));

        return parent::setHidden($hidden);
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
