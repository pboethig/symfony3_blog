<?php

namespace Check\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Replies
 *
 * @ORM\Table(name="replies", indexes={@ORM\Index(name="userid", columns={"userid"}), @ORM\Index(name="postid", columns={"postid"})})
 * @ORM\Entity
 */
class Replies extends BaseEntity implements IEntity
{


    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="updated", type="string", length=255, nullable=false)
     */
    private $updated;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Check\BlogBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Check\BlogBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id")
     * })
     */
    private $userid;

    /**
     * @var \Check\BlogBundle\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="Check\BlogBundle\Entity\Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="postid", referencedColumnName="id")
     * })
     */
    private $postid;



    /**
     * Set title
     *
     * @param string $title
     *
     * @return Replies
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * @return Replies
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Replies
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param string $updated
     *
     * @return Replies
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userid
     *
     * @param \Check\BlogBundle\Entity\User $userid
     *
     * @return Replies
     */
    public function setUserid(\Check\BlogBundle\Entity\User $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return \Check\BlogBundle\Entity\User
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set postid
     *
     * @param \Check\BlogBundle\Entity\Post $postid
     *
     * @return Replies
     */
    public function setPostid(\Check\BlogBundle\Entity\Post $postid = null)
    {
        $this->postid = $postid;

        return $this;
    }

    /**
     * Get postid
     *
     * @return \Check\BlogBundle\Entity\Post
     */
    public function getPostid()
    {
        return $this->postid;
    }
}
