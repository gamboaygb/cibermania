<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Person extends \AppBundle\Entity\Person implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'lastName', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'token', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'createdDate', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'activatedDate', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'picture', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'photoPath', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'ipClient', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'urlValidate'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'lastName', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'token', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'createdDate', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'activatedDate', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'picture', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'photoPath', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'ipClient', '' . "\0" . 'AppBundle\\Entity\\Person' . "\0" . 'urlValidate'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Person $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedDate($createdDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedDate', [$createdDate]);

        return parent::setCreatedDate($createdDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedDate', []);

        return parent::getCreatedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivatedDate($activatedDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivatedDate', [$activatedDate]);

        return parent::setActivatedDate($activatedDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivatedDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivatedDate', []);

        return parent::getActivatedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicture($picture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicture', [$picture]);

        return parent::setPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhotoPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhotoPath', []);

        return parent::getPhotoPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhotoPath(\Symfony\Component\HttpFoundation\File\UploadedFile $photoPath = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhotoPath', [$photoPath]);

        return parent::setPhotoPath($photoPath);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicture', []);

        return parent::getPicture();
    }

    /**
     * {@inheritDoc}
     */
    public function subirFoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'subirFoto', []);

        return parent::subirFoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpClient($ipClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpClient', [$ipClient]);

        return parent::setIpClient($ipClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpClient', []);

        return parent::getIpClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrlValidate($urlValidate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrlValidate', [$urlValidate]);

        return parent::setUrlValidate($urlValidate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrlValidate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrlValidate', []);

        return parent::getUrlValidate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

}
