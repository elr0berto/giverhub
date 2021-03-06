<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GivingPot extends \Entity\GivingPot implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'companyLogo', 'companyName', 'potSize', 'summary', 'body', 'buttonText', 'buttonUrl', 'amountRemaining', 'published', 'cardOnFile', 'user', 'scope', 'errors', '_recipients');
        }

        return array('__isInitialized__', 'id', 'companyLogo', 'companyName', 'potSize', 'summary', 'body', 'buttonText', 'buttonUrl', 'amountRemaining', 'published', 'cardOnFile', 'user', 'scope', 'errors', '_recipients');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GivingPot $proxy) {
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
    public function getScope()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScope', array());

        return parent::getScope();
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
    public function getCompanyLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyLogo', array());

        return parent::getCompanyLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyLogo($companyLogo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyLogo', array($companyLogo));

        return parent::setCompanyLogo($companyLogo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyName', array());

        return parent::getCompanyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyName($companyName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyName', array($companyName));

        return parent::setCompanyName($companyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getPotSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPotSize', array());

        return parent::getPotSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setPotSize($potSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPotSize', array($potSize));

        return parent::setPotSize($potSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getSummary()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSummary', array());

        return parent::getSummary();
    }

    /**
     * {@inheritDoc}
     */
    public function setSummary($summary)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSummary', array($summary));

        return parent::setSummary($summary);
    }

    /**
     * {@inheritDoc}
     */
    public function getBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBody', array());

        return parent::getBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setBody($body)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBody', array($body));

        return parent::setBody($body);
    }

    /**
     * {@inheritDoc}
     */
    public function getButtonText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getButtonText', array());

        return parent::getButtonText();
    }

    /**
     * {@inheritDoc}
     */
    public function setButtonText($buttonText)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setButtonText', array($buttonText));

        return parent::setButtonText($buttonText);
    }

    /**
     * {@inheritDoc}
     */
    public function getButtonUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getButtonUrl', array());

        return parent::getButtonUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setButtonUrl($buttonUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setButtonUrl', array($buttonUrl));

        return parent::setButtonUrl($buttonUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmountRemaining()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmountRemaining', array());

        return parent::getAmountRemaining();
    }

    /**
     * {@inheritDoc}
     */
    public function setAmountRemaining($amountRemaining)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmountRemaining', array($amountRemaining));

        return parent::setAmountRemaining($amountRemaining);
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', array());

        return parent::isPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublished($published)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublished', array($published));

        return parent::setPublished($published);
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
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', array($user));

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'render', array());

        return parent::render();
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', array());

        return parent::toArray();
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
    public function deleteCompanyLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deleteCompanyLogo', array());

        return parent::deleteCompanyLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function validate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validate', array());

        return parent::validate();
    }

    /**
     * {@inheritDoc}
     */
    public function saveFromPost($post, $validate = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'saveFromPost', array($post, $validate));

        return parent::saveFromPost($post, $validate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCardOnFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCardOnFile', array());

        return parent::getCardOnFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setCardOnFile(\Entity\CardOnFile $cardOnFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCardOnFile', array($cardOnFile));

        return parent::setCardOnFile($cardOnFile);
    }

    /**
     * {@inheritDoc}
     */
    public function addRecipients($recipients)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRecipients', array($recipients));

        return parent::addRecipients($recipients);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecipients()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecipients', array());

        return parent::getRecipients();
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
