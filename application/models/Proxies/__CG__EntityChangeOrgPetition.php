<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ChangeOrgPetition extends \Entity\ChangeOrgPetition implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'petition_id', 'auth_key', 'title', 'status', 'url', 'overview', 'letter_body', 'signature_count', 'image_url', 'category', 'goal', 'created_at', 'end_at', 'creator_name', 'creator_url', 'organization_name', 'organization_url', 'updated_at', 'giverhub_url_slug', 'auth_key_error', 'profanity_filter', 'is_featured', 'featured_text', 'force_update', 'removed', 'trending', 'featuredPetitions', '_trending');
        }

        return array('__isInitialized__', 'id', 'petition_id', 'auth_key', 'title', 'status', 'url', 'overview', 'letter_body', 'signature_count', 'image_url', 'category', 'goal', 'created_at', 'end_at', 'creator_name', 'creator_url', 'organization_name', 'organization_url', 'updated_at', 'giverhub_url_slug', 'auth_key_error', 'profanity_filter', 'is_featured', 'featured_text', 'force_update', 'removed', 'trending', 'featuredPetitions', '_trending');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ChangeOrgPetition $proxy) {
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
    public function getTrending()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrending', array());

        return parent::getTrending();
    }

    /**
     * {@inheritDoc}
     */
    public function setTrending($trending)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTrending', array($trending));

        return parent::setTrending($trending);
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthKey($auth_key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthKey', array($auth_key));

        return parent::setAuthKey($auth_key);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthKey', array());

        return parent::getAuthKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($created_at)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($created_at));

        return parent::setCreatedAt($created_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAtDt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAtDt', array());

        return parent::getCreatedAtDt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatorName($creator_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatorName', array($creator_name));

        return parent::setCreatorName($creator_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatorName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatorName', array());

        return parent::getCreatorName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatorUrl($creator_url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatorUrl', array($creator_url));

        return parent::setCreatorUrl($creator_url);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatorUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatorUrl', array());

        return parent::getCreatorUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndAt($end_at)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndAt', array($end_at));

        return parent::setEndAt($end_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndAt', array());

        return parent::getEndAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getEndAtDt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndAtDt', array());

        return parent::getEndAtDt();
    }

    /**
     * {@inheritDoc}
     */
    public function hasEnd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasEnd', array());

        return parent::hasEnd();
    }

    /**
     * {@inheritDoc}
     */
    public function setGoal($goal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGoal', array($goal));

        return parent::setGoal($goal);
    }

    /**
     * {@inheritDoc}
     */
    public function getGoal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoal', array());

        return parent::getGoal();
    }

    /**
     * {@inheritDoc}
     */
    public function hasGoal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasGoal', array());

        return parent::hasGoal();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageUrl($image_url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageUrl', array($image_url));

        return parent::setImageUrl($image_url);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageUrl', array());

        return parent::getImageUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getImageUrlPrependHttp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageUrlPrependHttp', array());

        return parent::getImageUrlPrependHttp();
    }

    /**
     * {@inheritDoc}
     */
    public function setLetterBody($letter_body)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLetterBody', array($letter_body));

        return parent::setLetterBody($letter_body);
    }

    /**
     * {@inheritDoc}
     */
    public function getLetterBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLetterBody', array());

        return parent::getLetterBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganizationName($organization_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganizationName', array($organization_name));

        return parent::setOrganizationName($organization_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganizationName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganizationName', array());

        return parent::getOrganizationName();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganizationUrl($organization_url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganizationUrl', array($organization_url));

        return parent::setOrganizationUrl($organization_url);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganizationUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganizationUrl', array());

        return parent::getOrganizationUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setOverview($overview)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOverview', array($overview));

        return parent::setOverview($overview);
    }

    /**
     * {@inheritDoc}
     */
    public function getOverview()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOverview', array());

        return parent::getOverview();
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
    public function getPetitionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPetitionId', array());

        return parent::getPetitionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSignatureCount($signature_count)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSignatureCount', array($signature_count));

        return parent::setSignatureCount($signature_count);
    }

    /**
     * {@inheritDoc}
     */
    public function getSignatureCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSignatureCount', array());

        return parent::getSignatureCount();
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
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updated_at)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updated_at));

        return parent::setUpdatedAt($updated_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', array($url));

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', array());

        return parent::getUrl();
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
    public function setGiverhubUrlSlug($giverhub_url_slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGiverhubUrlSlug', array($giverhub_url_slug));

        return parent::setGiverhubUrlSlug($giverhub_url_slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getGiverhubUrlSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGiverhubUrlSlug', array());

        return parent::getGiverhubUrlSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function getGiverhubUrl($baseUrl = 'https://giverhub.com/')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGiverhubUrl', array($baseUrl));

        return parent::getGiverhubUrl($baseUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthKeyError($auth_key_error)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthKeyError', array($auth_key_error));

        return parent::setAuthKeyError($auth_key_error);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthKeyError()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthKeyError', array());

        return parent::getAuthKeyError();
    }

    /**
     * {@inheritDoc}
     */
    public function createOrUpdateTarget($name, $type, $first)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createOrUpdateTarget', array($name, $type, $first));

        return parent::createOrUpdateTarget($name, $type, $first);
    }

    /**
     * {@inheritDoc}
     */
    public function getTargets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTargets', array());

        return parent::getTargets();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstTargetString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstTargetString', array());

        return parent::getFirstTargetString();
    }

    /**
     * {@inheritDoc}
     */
    public function getTargetsString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTargetsString', array());

        return parent::getTargetsString();
    }

    /**
     * {@inheritDoc}
     */
    public function hasEnded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasEnded', array());

        return parent::hasEnded();
    }

    /**
     * {@inheritDoc}
     */
    public function sign(\Entity\User $user, $hidden = false, $reason = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'sign', array($user, $hidden, $reason));

        return parent::sign($user, $hidden, $reason);
    }

    /**
     * {@inheritDoc}
     */
    public function updateSignatures($pages)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateSignatures', array($pages));

        return parent::updateSignatures($pages);
    }

    /**
     * {@inheritDoc}
     */
    public function updateReasons($pages)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateReasons', array($pages));

        return parent::updateReasons($pages);
    }

    /**
     * {@inheritDoc}
     */
    public function updateNews($pages)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateNews', array($pages));

        return parent::updateNews($pages);
    }

    /**
     * {@inheritDoc}
     */
    public function addMoreReasonsAndSignatures($nr_to_add = 1000, $real_run = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMoreReasonsAndSignatures', array($nr_to_add, $real_run));

        return parent::addMoreReasonsAndSignatures($nr_to_add, $real_run);
    }

    /**
     * {@inheritDoc}
     */
    public function addMoreReasons($nr_to_add = 1000, $real_run = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMoreReasons', array($nr_to_add, $real_run));

        return parent::addMoreReasons($nr_to_add, $real_run);
    }

    /**
     * {@inheritDoc}
     */
    public function addMoreSignatures($nr_to_add = 1000, $real_run = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMoreSignatures', array($nr_to_add, $real_run));

        return parent::addMoreSignatures($nr_to_add, $real_run);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsCount', array());

        return parent::getNewsCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsUpdates($page = 1, $limit = 20)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsUpdates', array($page, $limit));

        return parent::getNewsUpdates($page, $limit);
    }

    /**
     * {@inheritDoc}
     */
    public function getReasonCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReasonCount', array());

        return parent::getReasonCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getReasons($page = 1, $limit = 20)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReasons', array($page, $limit));

        return parent::getReasons($page, $limit);
    }

    /**
     * {@inheritDoc}
     */
    public function getSignaturesCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSignaturesCount', array());

        return parent::getSignaturesCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getSignatures($page = 1, $limit = 20)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSignatures', array($page, $limit));

        return parent::getSignatures($page, $limit);
    }

    /**
     * {@inheritDoc}
     */
    public function getGoalProgress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoalProgress', array());

        return parent::getGoalProgress();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormattedSignaturesVsGoal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormattedSignaturesVsGoal', array());

        return parent::getFormattedSignaturesVsGoal();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfanityFilter($profanity_filter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfanityFilter', array($profanity_filter));

        return parent::setProfanityFilter($profanity_filter);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfanityFilter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfanityFilter', array());

        return parent::getProfanityFilter();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeaturedText($featured_text)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeaturedText', array($featured_text));

        return parent::setFeaturedText($featured_text);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeaturedText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeaturedText', array());

        return parent::getFeaturedText();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsFeatured($is_featured)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsFeatured', array($is_featured));

        return parent::setIsFeatured($is_featured);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsFeatured()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsFeatured', array());

        return parent::getIsFeatured();
    }

    /**
     * {@inheritDoc}
     */
    public function onPrePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPrePersist', array());

        return parent::onPrePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function setForceUpdate($force_update)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setForceUpdate', array($force_update));

        return parent::setForceUpdate($force_update);
    }

    /**
     * {@inheritDoc}
     */
    public function getForceUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForceUpdate', array());

        return parent::getForceUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function changeGiverhubUrlSlug($giverhub_url_slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'changeGiverhubUrlSlug', array($giverhub_url_slug));

        return parent::changeGiverhubUrlSlug($giverhub_url_slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getLink($full = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLink', array($full));

        return parent::getLink($full);
    }

    /**
     * {@inheritDoc}
     */
    public function isRemoved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isRemoved', array());

        return parent::isRemoved();
    }

    /**
     * {@inheritDoc}
     */
    public function setRemoved($removed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemoved', array($removed));

        return parent::setRemoved($removed);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemoved()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemoved', array());

        return parent::getRemoved();
    }

    /**
     * {@inheritDoc}
     */
    public function hasMedia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasMedia', array());

        return parent::hasMedia();
    }

    /**
     * {@inheritDoc}
     */
    public function getMediaHtml()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMediaHtml', array());

        return parent::getMediaHtml();
    }

    /**
     * {@inheritDoc}
     */
    public function getFullUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullUrl', array());

        return parent::getFullUrl();
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
