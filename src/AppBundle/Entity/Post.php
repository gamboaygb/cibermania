<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Util\Slugger;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 */
class Post
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
     * @ORM\Column(name="title", type="string", length=255,unique=true)
     */
    private $title;

    /**
     * Many Post have Many Category.
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="post")
     * @ORM\JoinTable(name="post_category")
     */
    private $category;


    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="short_content", type="text")
     */
    private $shortContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime")
     */
    private $createdDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="img_post", type="string", length=255)
     */
    private $imgPost;

    /**
     * @Assert\Image(maxSize = "500k")
     */
    private $photoPath;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     */
    private $person;

    /**
     * @var int
     *
     * @ORM\Column(name="views", type="integer")
     */
    private $views;

    /**
     * @var boolean
     * @ORM\Column(name="checked",type="boolean")
     */
    private $checked;

    public function __construct() {
        $this->category = new ArrayCollection();
    }


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
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;
        $this->slug = Slugger::getSlug($title);

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set shortContent
     *
     * @param string $shortContent
     *
     * @return Post
     */
    public function setShortContent($shortContent)
    {
        $this->shortContent = $shortContent;

        return $this;
    }

    /**
     * Get shortContent
     *
     * @return string
     */
    public function getShortContent()
    {
        return $this->shortContent;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Post
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
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return Post
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set imgPost
     *
     * @param string $imgPost
     *
     * @return Post
     */
    public function setImgPost($imgPost)
    {
        $this->imgPost = $imgPost;

        return $this;
    }

    /**
     * Get imgPost
     *
     * @return string
     */
    public function getImgPost()
    {
        return $this->imgPost;
    }

    /**
     * Set person
     *
     * @param \AppBundle\Entity\Person $person
     *
     * @return Post
     */
    public function setPerson(\AppBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \AppBundle\Entity\Person
     */
    public function getPerson()
    {
        return $this->person;
    }


    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Post
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set views
     *
     * @param integer $views
     *
     * @return Post
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set checked
     *
     * @param boolean $checked
     *
     * @return Post
     */
    public function setChecked($checked)
    {
        $this->checked = $checked;

        return $this;
    }

    /**
     * Get checked
     *
     * @return boolean
     */
    public function getChecked()
    {
        return $this->checked;
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

    public function subirFoto()
    {
        if (null === $this->photoPath) {
            return;
        }


        $nombreArchivoFoto = uniqid('post-').$this->id.'-'.$this->photoPath->getClientOriginalName();
        $this->photoPath->move($_SERVER['DOCUMENT_ROOT'].'/bundles/images/post/', $nombreArchivoFoto);
        $this->setImgPost($nombreArchivoFoto);
    }

    /**
     * Add category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Post
     */
    public function addCategory(\AppBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\Category $category
     */
    public function removeCategory(\AppBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategory()
    {
        return $this->category;
    }
}
