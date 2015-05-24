<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Chat extends \Entity\Chat implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'timeSent', 'message', 'tmp_id', 'timeSeen', 'fromUser', 'toUser', 'toCharity', 'fromCharity', 'volunteer');
        }

        return array('__isInitialized__', 'id', 'timeSent', 'message', 'tmp_id', 'timeSeen', 'fromUser', 'toUser', 'toCharity', 'fromCharity', 'volunteer');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Chat $proxy) {
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
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', array());

        return parent::jsonSerialize();
    }

    /**
     * {@inheritDoc}
     */
    public function isUnreadByCurrentUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUnreadByCurrentUser', array());

        return parent::isUnreadByCurrentUser();
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
    public function getTimeSent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeSent', array());

        return parent::getTimeSent();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeSent(\DateTime $timeSent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeSent', array($timeSent));

        return parent::setTimeSent($timeSent);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessage', array());

        return parent::getMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage($message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessage', array($message));

        return parent::setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeSeen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeSeen', array());

        return parent::getTimeSeen();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeSeen(\DateTime $timeSeen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeSeen', array($timeSeen));

        return parent::setTimeSeen($timeSeen);
    }

    /**
     * {@inheritDoc}
     */
    public function getFromUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFromUser', array());

        return parent::getFromUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setFromUser(\Entity\User $fromUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFromUser', array($fromUser));

        return parent::setFromUser($fromUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getToUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToUser', array());

        return parent::getToUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setToUser(\Entity\User $toUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToUser', array($toUser));

        return parent::setToUser($toUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getTmpId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTmpId', array());

        return parent::getTmpId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTmpId($tmp_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTmpId', array($tmp_id));

        return parent::setTmpId($tmp_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getToCharity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToCharity', array());

        return parent::getToCharity();
    }

    /**
     * {@inheritDoc}
     */
    public function setToCharity($toCharity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToCharity', array($toCharity));

        return parent::setToCharity($toCharity);
    }

    /**
     * {@inheritDoc}
     */
    public function getFromCharity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFromCharity', array());

        return parent::getFromCharity();
    }

    /**
     * {@inheritDoc}
     */
    public function setFromCharity(\Entity\Charity $fromCharity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFromCharity', array($fromCharity));

        return parent::setFromCharity($fromCharity);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolunteer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolunteer', array());

        return parent::getVolunteer();
    }

    /**
     * {@inheritDoc}
     */
    public function setVolunteer(\Entity\CharityVolunteeringOpportunityVolunteer $volunteer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolunteer', array($volunteer));

        return parent::setVolunteer($volunteer);
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
