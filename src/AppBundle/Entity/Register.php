<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/07/17
 * Time: 18:18
 */

namespace AppBundle\Entity;
use AppBundle\Entity\User as user;
use AppBundle\Entity\Person as person;

class Register
{
    private $user;
    private $person;

    public function __construct()
    {
        $this->user= new user();
        $this->person= new person();

        $this->person->setToken(uniqid());
        $this->person->setUrlValidate($_SERVER['SERVER_NAME'].'/token/'.$this->person->getToken());



        $this->person->setCreateDate(new \DateTime());
        $this->person->setActivatedDate(new \DateTime());
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param mixed $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }
}