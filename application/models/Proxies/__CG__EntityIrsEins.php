<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class IrsEins extends \Entity\IrsEins implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'year', 'ein', 'primaryNameOfOrganization', 'inCareOfName', 'streetAddress', 'city', 'state', 'zipCode', 'groupExemptionNumber', 'subsectionCode', 'affiliationCode', 'classificationCodes', 'rulingDate', 'deductibilityCode', 'foundationCode', 'activityCodes', 'organizationCode', 'exemptOrganizationStatusCodeNew', 'taxPeriod', 'assetCode', 'incomeCode', 'filingRequirementCode', 'pfFilingRequirementCodeNew', 'accountingPeriod', 'assetAmount', 'incomeAmount', 'form990RevenueAmount', 'nationalTaxonomyOfExemptEntitiesNteeCode', 'sortNameSecondaryNameLine', 'deductabilityDescrip', 'foundationDescrip', 'subsectionDescrip', 'activityBroadDescrip', 'activityDescrip', 'exemptBroadDescrip', 'exemptDescrip', 'mostrecent', 'has990', 'has990ez', 'has990pf');
        }

        return array('__isInitialized__', 'id', 'year', 'ein', 'primaryNameOfOrganization', 'inCareOfName', 'streetAddress', 'city', 'state', 'zipCode', 'groupExemptionNumber', 'subsectionCode', 'affiliationCode', 'classificationCodes', 'rulingDate', 'deductibilityCode', 'foundationCode', 'activityCodes', 'organizationCode', 'exemptOrganizationStatusCodeNew', 'taxPeriod', 'assetCode', 'incomeCode', 'filingRequirementCode', 'pfFilingRequirementCodeNew', 'accountingPeriod', 'assetAmount', 'incomeAmount', 'form990RevenueAmount', 'nationalTaxonomyOfExemptEntitiesNteeCode', 'sortNameSecondaryNameLine', 'deductabilityDescrip', 'foundationDescrip', 'subsectionDescrip', 'activityBroadDescrip', 'activityDescrip', 'exemptBroadDescrip', 'exemptDescrip', 'mostrecent', 'has990', 'has990ez', 'has990pf');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (IrsEins $proxy) {
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
    public function setAccountingPeriod($accountingPeriod)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountingPeriod', array($accountingPeriod));

        return parent::setAccountingPeriod($accountingPeriod);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountingPeriod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountingPeriod', array());

        return parent::getAccountingPeriod();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivityBroadDescrip($activityBroadDescrip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivityBroadDescrip', array($activityBroadDescrip));

        return parent::setActivityBroadDescrip($activityBroadDescrip);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivityBroadDescrip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivityBroadDescrip', array());

        return parent::getActivityBroadDescrip();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivityCodes($activityCodes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivityCodes', array($activityCodes));

        return parent::setActivityCodes($activityCodes);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivityCodes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivityCodes', array());

        return parent::getActivityCodes();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivityDescrip($activityDescrip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivityDescrip', array($activityDescrip));

        return parent::setActivityDescrip($activityDescrip);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivityDescrip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivityDescrip', array());

        return parent::getActivityDescrip();
    }

    /**
     * {@inheritDoc}
     */
    public function setAffiliationCode($affiliationCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAffiliationCode', array($affiliationCode));

        return parent::setAffiliationCode($affiliationCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getAffiliationCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAffiliationCode', array());

        return parent::getAffiliationCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssetAmount($assetAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssetAmount', array($assetAmount));

        return parent::setAssetAmount($assetAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssetAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssetAmount', array());

        return parent::getAssetAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssetCode($assetCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssetCode', array($assetCode));

        return parent::setAssetCode($assetCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssetCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssetCode', array());

        return parent::getAssetCode();
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
    public function setClassificationCodes($classificationCodes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClassificationCodes', array($classificationCodes));

        return parent::setClassificationCodes($classificationCodes);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassificationCodes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassificationCodes', array());

        return parent::getClassificationCodes();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeductabilityDescrip($deductabilityDescrip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeductabilityDescrip', array($deductabilityDescrip));

        return parent::setDeductabilityDescrip($deductabilityDescrip);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeductabilityDescrip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeductabilityDescrip', array());

        return parent::getDeductabilityDescrip();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeductibilityCode($deductibilityCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeductibilityCode', array($deductibilityCode));

        return parent::setDeductibilityCode($deductibilityCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeductibilityCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeductibilityCode', array());

        return parent::getDeductibilityCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setEin($ein)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEin', array($ein));

        return parent::setEin($ein);
    }

    /**
     * {@inheritDoc}
     */
    public function getEin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEin', array());

        return parent::getEin();
    }

    /**
     * {@inheritDoc}
     */
    public function setExemptBroadDescrip($exemptBroadDescrip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExemptBroadDescrip', array($exemptBroadDescrip));

        return parent::setExemptBroadDescrip($exemptBroadDescrip);
    }

    /**
     * {@inheritDoc}
     */
    public function getExemptBroadDescrip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExemptBroadDescrip', array());

        return parent::getExemptBroadDescrip();
    }

    /**
     * {@inheritDoc}
     */
    public function setExemptDescrip($exemptDescrip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExemptDescrip', array($exemptDescrip));

        return parent::setExemptDescrip($exemptDescrip);
    }

    /**
     * {@inheritDoc}
     */
    public function getExemptDescrip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExemptDescrip', array());

        return parent::getExemptDescrip();
    }

    /**
     * {@inheritDoc}
     */
    public function setExemptOrganizationStatusCodeNew($exemptOrganizationStatusCodeNew)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExemptOrganizationStatusCodeNew', array($exemptOrganizationStatusCodeNew));

        return parent::setExemptOrganizationStatusCodeNew($exemptOrganizationStatusCodeNew);
    }

    /**
     * {@inheritDoc}
     */
    public function getExemptOrganizationStatusCodeNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExemptOrganizationStatusCodeNew', array());

        return parent::getExemptOrganizationStatusCodeNew();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilingRequirementCode($filingRequirementCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilingRequirementCode', array($filingRequirementCode));

        return parent::setFilingRequirementCode($filingRequirementCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilingRequirementCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilingRequirementCode', array());

        return parent::getFilingRequirementCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setForm990RevenueAmount($form990RevenueAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setForm990RevenueAmount', array($form990RevenueAmount));

        return parent::setForm990RevenueAmount($form990RevenueAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getForm990RevenueAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForm990RevenueAmount', array());

        return parent::getForm990RevenueAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setFoundationCode($foundationCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoundationCode', array($foundationCode));

        return parent::setFoundationCode($foundationCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoundationCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoundationCode', array());

        return parent::getFoundationCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setFoundationDescrip($foundationDescrip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoundationDescrip', array($foundationDescrip));

        return parent::setFoundationDescrip($foundationDescrip);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoundationDescrip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoundationDescrip', array());

        return parent::getFoundationDescrip();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupExemptionNumber($groupExemptionNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupExemptionNumber', array($groupExemptionNumber));

        return parent::setGroupExemptionNumber($groupExemptionNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupExemptionNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupExemptionNumber', array());

        return parent::getGroupExemptionNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setHas990($has990)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHas990', array($has990));

        return parent::setHas990($has990);
    }

    /**
     * {@inheritDoc}
     */
    public function getHas990()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHas990', array());

        return parent::getHas990();
    }

    /**
     * {@inheritDoc}
     */
    public function setHas990ez($has990ez)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHas990ez', array($has990ez));

        return parent::setHas990ez($has990ez);
    }

    /**
     * {@inheritDoc}
     */
    public function getHas990ez()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHas990ez', array());

        return parent::getHas990ez();
    }

    /**
     * {@inheritDoc}
     */
    public function setHas990pf($has990pf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHas990pf', array($has990pf));

        return parent::setHas990pf($has990pf);
    }

    /**
     * {@inheritDoc}
     */
    public function getHas990pf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHas990pf', array());

        return parent::getHas990pf();
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
    public function setInCareOfName($inCareOfName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInCareOfName', array($inCareOfName));

        return parent::setInCareOfName($inCareOfName);
    }

    /**
     * {@inheritDoc}
     */
    public function getInCareOfName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInCareOfName', array());

        return parent::getInCareOfName();
    }

    /**
     * {@inheritDoc}
     */
    public function setIncomeAmount($incomeAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIncomeAmount', array($incomeAmount));

        return parent::setIncomeAmount($incomeAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getIncomeAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIncomeAmount', array());

        return parent::getIncomeAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setIncomeCode($incomeCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIncomeCode', array($incomeCode));

        return parent::setIncomeCode($incomeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getIncomeCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIncomeCode', array());

        return parent::getIncomeCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setMostrecent($mostrecent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMostrecent', array($mostrecent));

        return parent::setMostrecent($mostrecent);
    }

    /**
     * {@inheritDoc}
     */
    public function getMostrecent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMostrecent', array());

        return parent::getMostrecent();
    }

    /**
     * {@inheritDoc}
     */
    public function setNationalTaxonomyOfExemptEntitiesNteeCode($nationalTaxonomyOfExemptEntitiesNteeCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNationalTaxonomyOfExemptEntitiesNteeCode', array($nationalTaxonomyOfExemptEntitiesNteeCode));

        return parent::setNationalTaxonomyOfExemptEntitiesNteeCode($nationalTaxonomyOfExemptEntitiesNteeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getNationalTaxonomyOfExemptEntitiesNteeCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNationalTaxonomyOfExemptEntitiesNteeCode', array());

        return parent::getNationalTaxonomyOfExemptEntitiesNteeCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganizationCode($organizationCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganizationCode', array($organizationCode));

        return parent::setOrganizationCode($organizationCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganizationCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganizationCode', array());

        return parent::getOrganizationCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setPfFilingRequirementCodeNew($pfFilingRequirementCodeNew)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPfFilingRequirementCodeNew', array($pfFilingRequirementCodeNew));

        return parent::setPfFilingRequirementCodeNew($pfFilingRequirementCodeNew);
    }

    /**
     * {@inheritDoc}
     */
    public function getPfFilingRequirementCodeNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPfFilingRequirementCodeNew', array());

        return parent::getPfFilingRequirementCodeNew();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimaryNameOfOrganization($primaryNameOfOrganization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrimaryNameOfOrganization', array($primaryNameOfOrganization));

        return parent::setPrimaryNameOfOrganization($primaryNameOfOrganization);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimaryNameOfOrganization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimaryNameOfOrganization', array());

        return parent::getPrimaryNameOfOrganization();
    }

    /**
     * {@inheritDoc}
     */
    public function setRulingDate($rulingDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRulingDate', array($rulingDate));

        return parent::setRulingDate($rulingDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getRulingDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRulingDate', array());

        return parent::getRulingDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setSortNameSecondaryNameLine($sortNameSecondaryNameLine)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSortNameSecondaryNameLine', array($sortNameSecondaryNameLine));

        return parent::setSortNameSecondaryNameLine($sortNameSecondaryNameLine);
    }

    /**
     * {@inheritDoc}
     */
    public function getSortNameSecondaryNameLine()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSortNameSecondaryNameLine', array());

        return parent::getSortNameSecondaryNameLine();
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
    public function setStreetAddress($streetAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreetAddress', array($streetAddress));

        return parent::setStreetAddress($streetAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getStreetAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreetAddress', array());

        return parent::getStreetAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubsectionCode($subsectionCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubsectionCode', array($subsectionCode));

        return parent::setSubsectionCode($subsectionCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubsectionCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubsectionCode', array());

        return parent::getSubsectionCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubsectionDescrip($subsectionDescrip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubsectionDescrip', array($subsectionDescrip));

        return parent::setSubsectionDescrip($subsectionDescrip);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubsectionDescrip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubsectionDescrip', array());

        return parent::getSubsectionDescrip();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxPeriod($taxPeriod)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxPeriod', array($taxPeriod));

        return parent::setTaxPeriod($taxPeriod);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxPeriod()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxPeriod', array());

        return parent::getTaxPeriod();
    }

    /**
     * {@inheritDoc}
     */
    public function setYear($year)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYear', array($year));

        return parent::setYear($year);
    }

    /**
     * {@inheritDoc}
     */
    public function getYear()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYear', array());

        return parent::getYear();
    }

    /**
     * {@inheritDoc}
     */
    public function setZipCode($zipCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipCode', array($zipCode));

        return parent::setZipCode($zipCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipCode', array());

        return parent::getZipCode();
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
