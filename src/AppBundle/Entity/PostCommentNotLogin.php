<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostCommentNotLogin
 *
 * @ORM\Table(name="post_comment_not_login")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostCommentNotLoginRepository")
 */
class PostCommentNotLogin
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
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commentDate", type="datetime")
     */
    private $commentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetime")
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="commentTitle", type="string", length=255)
     */
    private $commentTitle;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Post")
     */
    private $post;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255,nullable=true)
     */
    private $website;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_user", type="boolean")
     */
    private $isUser;

    /**
     * @var string
     *
     * @ORM\Column( name="name", type="string", length=255)
     */
    private $name;


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
     * Set comment
     *
     * @param string $comment
     *
     * @return PostCommentNotLogin
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set commentDate
     *
     * @param \DateTime $commentDate
     *
     * @return PostCommentNotLogin
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;

        return $this;
    }

    /**
     * Get commentDate
     *
     * @return \DateTime
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return PostCommentNotLogin
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
     * Set commentTitle
     *
     * @param string $commentTitle
     *
     * @return PostCommentNotLogin
     */
    public function setCommentTitle($commentTitle)
    {
        $this->commentTitle = $commentTitle;

        return $this;
    }

    /**
     * Get commentTitle
     *
     * @return string
     */
    public function getCommentTitle()
    {
        return $this->commentTitle;
    }

    /**
     * Set post
     *
     * @param \stdClass $post
     *
     * @return PostCommentNotLogin
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \stdClass
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return PostCommentNotLogin
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return PostCommentNotLogin
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set isUser
     *
     * @param boolean $isUser
     *
     * @return PostCommentNotLogin
     */
    public function setIsUser($isUser)
    {
        $this->isUser = $isUser;

        return $this;
    }

    /**
     * Get isUser
     *
     * @return bool
     */
    public function getIsUser()
    {
        return $this->isUser;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PostCommentNotLogin
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
}
