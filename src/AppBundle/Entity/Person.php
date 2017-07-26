<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonRepository")
 */
class Person
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     * @ORM\Column(name="desccription",type="string", length=255,nullable=true)
     */

    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime")
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="activated_date", type="datetime")
     */
    private $activatedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255,nullable=true)
     */
    private $picture;

    /**
     * @Assert\Image(maxSize = "500k")
     */
    private $photoPath;


    /**
     * @var string
     *
     * @ORM\Column(name="ip_client", type="string", length=255)
     */
    private $ipClient;

    /**
     * @var string
     *
     * @ORM\Column(name="url_validate", type="string", length=255)
     */
    private $urlValidate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Person
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Person
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Person
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set activatedDate
     *
     * @param \DateTime $activatedDate
     *
     * @return Person
     */
    public function setActivatedDate($activatedDate)
    {
        $this->activatedDate = $activatedDate;

        return $this;
    }

    /**
     * Get activatedDate
     *
     * @return \DateTime
     */
    public function getActivatedDate()
    {
        return $this->activatedDate;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return Person
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPhotoPath()
    {
        return $this->photoPath;
    }



    /**
     * @param UploadedFile $picture
     */
    public function setPhotoPath(UploadedFile $photoPath = null)
    {
        $this->photoPath = $photoPath;
        $this->subirFoto();
    }
    /**
     * @return UploadedFile
     */
    public function getPicture()
    {
        return $this->picture;
    }

    public function subirFoto()
    {
        if (null === $this->photoPath) {
            return;
        }


        $nombreArchivoFoto = uniqid('usr-').$this->name.'-'.$this->photoPath->getClientOriginalName();
        $this->photoPath->move($_SERVER['DOCUMENT_ROOT'].'/bundles/images/user/', $nombreArchivoFoto);
        $this->setPicture($nombreArchivoFoto);
    }




    /**
     * Set ipClient
     *
     * @param string $ipClient
     *
     * @return Person
     */
    public function setIpClient($ipClient)
    {
        $this->ipClient = $ipClient;

        return $this;
    }

    /**
     * Get ipClient
     *
     * @return string
     */
    public function getIpClient()
    {
        return $this->ipClient;
    }

    /**
     * Set urlValidate
     *
     * @param string $urlValidate
     *
     * @return Person
     */
    public function setUrlValidate($urlValidate)
    {
        $this->urlValidate = $urlValidate;

        return $this;
    }

    /**
     * Get urlValidate
     *
     * @return string
     */
    public function getUrlValidate()
    {
        return $this->urlValidate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Person
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
