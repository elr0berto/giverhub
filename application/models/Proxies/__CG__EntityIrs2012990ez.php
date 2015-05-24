<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Irs2012990ez extends \Entity\Irs2012990ez implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'ein', 'taxPrd', 'subseccd', 'totcntrbs', 'prgmservrev', 'duesassesmnts', 'othrinvstinc', 'grsamtsalesastothr', 'basisalesexpnsothr', 'gnsaleofastothr', 'grsincgaming', 'grsrevnuefndrsng', 'direxpns', 'netincfndrsng', 'grsalesminusret', 'costgoodsold', 'grsprft', 'othrevnue', 'totrevnue', 'totexpns', 'totexcessyr', 'othrchgsnetassetfnd', 'totassetsend', 'totliabend', 'totnetassetsend', 'unrelbusincd', 'initiationfee', 'grspublicrcpts', 'nonpfrea', 'gftgrntrcvd170', 'txrevnuelevied170', 'srvcsval170', 'grsinc170', 'grsrcptsrelatd170', 'totgftgrntrcvd509', 'grsrcptsadmiss509', 'txrevnuelevied509', 'srvcsval509', 'subtotsuppinc509', 'totsupp509');
        }

        return array('__isInitialized__', 'id', 'ein', 'taxPrd', 'subseccd', 'totcntrbs', 'prgmservrev', 'duesassesmnts', 'othrinvstinc', 'grsamtsalesastothr', 'basisalesexpnsothr', 'gnsaleofastothr', 'grsincgaming', 'grsrevnuefndrsng', 'direxpns', 'netincfndrsng', 'grsalesminusret', 'costgoodsold', 'grsprft', 'othrevnue', 'totrevnue', 'totexpns', 'totexcessyr', 'othrchgsnetassetfnd', 'totassetsend', 'totliabend', 'totnetassetsend', 'unrelbusincd', 'initiationfee', 'grspublicrcpts', 'nonpfrea', 'gftgrntrcvd170', 'txrevnuelevied170', 'srvcsval170', 'grsinc170', 'grsrcptsrelatd170', 'totgftgrntrcvd509', 'grsrcptsadmiss509', 'txrevnuelevied509', 'srvcsval509', 'subtotsuppinc509', 'totsupp509');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Irs2012990ez $proxy) {
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
    public function setBasisalesexpnsothr($basisalesexpnsothr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBasisalesexpnsothr', array($basisalesexpnsothr));

        return parent::setBasisalesexpnsothr($basisalesexpnsothr);
    }

    /**
     * {@inheritDoc}
     */
    public function getBasisalesexpnsothr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBasisalesexpnsothr', array());

        return parent::getBasisalesexpnsothr();
    }

    /**
     * {@inheritDoc}
     */
    public function setCostgoodsold($costgoodsold)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCostgoodsold', array($costgoodsold));

        return parent::setCostgoodsold($costgoodsold);
    }

    /**
     * {@inheritDoc}
     */
    public function getCostgoodsold()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCostgoodsold', array());

        return parent::getCostgoodsold();
    }

    /**
     * {@inheritDoc}
     */
    public function setDirexpns($direxpns)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDirexpns', array($direxpns));

        return parent::setDirexpns($direxpns);
    }

    /**
     * {@inheritDoc}
     */
    public function getDirexpns()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDirexpns', array());

        return parent::getDirexpns();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuesassesmnts($duesassesmnts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuesassesmnts', array($duesassesmnts));

        return parent::setDuesassesmnts($duesassesmnts);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuesassesmnts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuesassesmnts', array());

        return parent::getDuesassesmnts();
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
    public function setGftgrntrcvd170($gftgrntrcvd170)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGftgrntrcvd170', array($gftgrntrcvd170));

        return parent::setGftgrntrcvd170($gftgrntrcvd170);
    }

    /**
     * {@inheritDoc}
     */
    public function getGftgrntrcvd170()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGftgrntrcvd170', array());

        return parent::getGftgrntrcvd170();
    }

    /**
     * {@inheritDoc}
     */
    public function setGnsaleofastothr($gnsaleofastothr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGnsaleofastothr', array($gnsaleofastothr));

        return parent::setGnsaleofastothr($gnsaleofastothr);
    }

    /**
     * {@inheritDoc}
     */
    public function getGnsaleofastothr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGnsaleofastothr', array());

        return parent::getGnsaleofastothr();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrsalesminusret($grsalesminusret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrsalesminusret', array($grsalesminusret));

        return parent::setGrsalesminusret($grsalesminusret);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrsalesminusret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrsalesminusret', array());

        return parent::getGrsalesminusret();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrsamtsalesastothr($grsamtsalesastothr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrsamtsalesastothr', array($grsamtsalesastothr));

        return parent::setGrsamtsalesastothr($grsamtsalesastothr);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrsamtsalesastothr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrsamtsalesastothr', array());

        return parent::getGrsamtsalesastothr();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrsinc170($grsinc170)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrsinc170', array($grsinc170));

        return parent::setGrsinc170($grsinc170);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrsinc170()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrsinc170', array());

        return parent::getGrsinc170();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrsincgaming($grsincgaming)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrsincgaming', array($grsincgaming));

        return parent::setGrsincgaming($grsincgaming);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrsincgaming()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrsincgaming', array());

        return parent::getGrsincgaming();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrsprft($grsprft)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrsprft', array($grsprft));

        return parent::setGrsprft($grsprft);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrsprft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrsprft', array());

        return parent::getGrsprft();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrspublicrcpts($grspublicrcpts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrspublicrcpts', array($grspublicrcpts));

        return parent::setGrspublicrcpts($grspublicrcpts);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrspublicrcpts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrspublicrcpts', array());

        return parent::getGrspublicrcpts();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrsrcptsadmiss509($grsrcptsadmiss509)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrsrcptsadmiss509', array($grsrcptsadmiss509));

        return parent::setGrsrcptsadmiss509($grsrcptsadmiss509);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrsrcptsadmiss509()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrsrcptsadmiss509', array());

        return parent::getGrsrcptsadmiss509();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrsrcptsrelatd170($grsrcptsrelatd170)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrsrcptsrelatd170', array($grsrcptsrelatd170));

        return parent::setGrsrcptsrelatd170($grsrcptsrelatd170);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrsrcptsrelatd170()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrsrcptsrelatd170', array());

        return parent::getGrsrcptsrelatd170();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrsrevnuefndrsng($grsrevnuefndrsng)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrsrevnuefndrsng', array($grsrevnuefndrsng));

        return parent::setGrsrevnuefndrsng($grsrevnuefndrsng);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrsrevnuefndrsng()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrsrevnuefndrsng', array());

        return parent::getGrsrevnuefndrsng();
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
    public function setInitiationfee($initiationfee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInitiationfee', array($initiationfee));

        return parent::setInitiationfee($initiationfee);
    }

    /**
     * {@inheritDoc}
     */
    public function getInitiationfee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInitiationfee', array());

        return parent::getInitiationfee();
    }

    /**
     * {@inheritDoc}
     */
    public function setNetincfndrsng($netincfndrsng)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNetincfndrsng', array($netincfndrsng));

        return parent::setNetincfndrsng($netincfndrsng);
    }

    /**
     * {@inheritDoc}
     */
    public function getNetincfndrsng()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNetincfndrsng', array());

        return parent::getNetincfndrsng();
    }

    /**
     * {@inheritDoc}
     */
    public function setNonpfrea($nonpfrea)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNonpfrea', array($nonpfrea));

        return parent::setNonpfrea($nonpfrea);
    }

    /**
     * {@inheritDoc}
     */
    public function getNonpfrea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNonpfrea', array());

        return parent::getNonpfrea();
    }

    /**
     * {@inheritDoc}
     */
    public function setOthrchgsnetassetfnd($othrchgsnetassetfnd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOthrchgsnetassetfnd', array($othrchgsnetassetfnd));

        return parent::setOthrchgsnetassetfnd($othrchgsnetassetfnd);
    }

    /**
     * {@inheritDoc}
     */
    public function getOthrchgsnetassetfnd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOthrchgsnetassetfnd', array());

        return parent::getOthrchgsnetassetfnd();
    }

    /**
     * {@inheritDoc}
     */
    public function setOthrevnue($othrevnue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOthrevnue', array($othrevnue));

        return parent::setOthrevnue($othrevnue);
    }

    /**
     * {@inheritDoc}
     */
    public function getOthrevnue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOthrevnue', array());

        return parent::getOthrevnue();
    }

    /**
     * {@inheritDoc}
     */
    public function setOthrinvstinc($othrinvstinc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOthrinvstinc', array($othrinvstinc));

        return parent::setOthrinvstinc($othrinvstinc);
    }

    /**
     * {@inheritDoc}
     */
    public function getOthrinvstinc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOthrinvstinc', array());

        return parent::getOthrinvstinc();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrgmservrev($prgmservrev)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrgmservrev', array($prgmservrev));

        return parent::setPrgmservrev($prgmservrev);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrgmservrev()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrgmservrev', array());

        return parent::getPrgmservrev();
    }

    /**
     * {@inheritDoc}
     */
    public function setSrvcsval170($srvcsval170)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSrvcsval170', array($srvcsval170));

        return parent::setSrvcsval170($srvcsval170);
    }

    /**
     * {@inheritDoc}
     */
    public function getSrvcsval170()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSrvcsval170', array());

        return parent::getSrvcsval170();
    }

    /**
     * {@inheritDoc}
     */
    public function setSrvcsval509($srvcsval509)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSrvcsval509', array($srvcsval509));

        return parent::setSrvcsval509($srvcsval509);
    }

    /**
     * {@inheritDoc}
     */
    public function getSrvcsval509()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSrvcsval509', array());

        return parent::getSrvcsval509();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubseccd($subseccd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubseccd', array($subseccd));

        return parent::setSubseccd($subseccd);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubseccd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubseccd', array());

        return parent::getSubseccd();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubtotsuppinc509($subtotsuppinc509)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubtotsuppinc509', array($subtotsuppinc509));

        return parent::setSubtotsuppinc509($subtotsuppinc509);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubtotsuppinc509()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubtotsuppinc509', array());

        return parent::getSubtotsuppinc509();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxPrd($taxPrd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxPrd', array($taxPrd));

        return parent::setTaxPrd($taxPrd);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxPrd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxPrd', array());

        return parent::getTaxPrd();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotassetsend($totassetsend)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotassetsend', array($totassetsend));

        return parent::setTotassetsend($totassetsend);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotassetsend()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotassetsend', array());

        return parent::getTotassetsend();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotcntrbs($totcntrbs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotcntrbs', array($totcntrbs));

        return parent::setTotcntrbs($totcntrbs);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotcntrbs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotcntrbs', array());

        return parent::getTotcntrbs();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotexcessyr($totexcessyr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotexcessyr', array($totexcessyr));

        return parent::setTotexcessyr($totexcessyr);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotexcessyr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotexcessyr', array());

        return parent::getTotexcessyr();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotexpns($totexpns)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotexpns', array($totexpns));

        return parent::setTotexpns($totexpns);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotexpns()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotexpns', array());

        return parent::getTotexpns();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotgftgrntrcvd509($totgftgrntrcvd509)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotgftgrntrcvd509', array($totgftgrntrcvd509));

        return parent::setTotgftgrntrcvd509($totgftgrntrcvd509);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotgftgrntrcvd509()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotgftgrntrcvd509', array());

        return parent::getTotgftgrntrcvd509();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotliabend($totliabend)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotliabend', array($totliabend));

        return parent::setTotliabend($totliabend);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotliabend()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotliabend', array());

        return parent::getTotliabend();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotnetassetsend($totnetassetsend)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotnetassetsend', array($totnetassetsend));

        return parent::setTotnetassetsend($totnetassetsend);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotnetassetsend()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotnetassetsend', array());

        return parent::getTotnetassetsend();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotrevnue($totrevnue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotrevnue', array($totrevnue));

        return parent::setTotrevnue($totrevnue);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotrevnue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotrevnue', array());

        return parent::getTotrevnue();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotsupp509($totsupp509)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotsupp509', array($totsupp509));

        return parent::setTotsupp509($totsupp509);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotsupp509()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotsupp509', array());

        return parent::getTotsupp509();
    }

    /**
     * {@inheritDoc}
     */
    public function setTxrevnuelevied170($txrevnuelevied170)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTxrevnuelevied170', array($txrevnuelevied170));

        return parent::setTxrevnuelevied170($txrevnuelevied170);
    }

    /**
     * {@inheritDoc}
     */
    public function getTxrevnuelevied170()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTxrevnuelevied170', array());

        return parent::getTxrevnuelevied170();
    }

    /**
     * {@inheritDoc}
     */
    public function setTxrevnuelevied509($txrevnuelevied509)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTxrevnuelevied509', array($txrevnuelevied509));

        return parent::setTxrevnuelevied509($txrevnuelevied509);
    }

    /**
     * {@inheritDoc}
     */
    public function getTxrevnuelevied509()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTxrevnuelevied509', array());

        return parent::getTxrevnuelevied509();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnrelbusincd($unrelbusincd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnrelbusincd', array($unrelbusincd));

        return parent::setUnrelbusincd($unrelbusincd);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnrelbusincd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnrelbusincd', array());

        return parent::getUnrelbusincd();
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
