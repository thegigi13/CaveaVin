<?php
// src/Entity/Article.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @Assert\NotBlank(message="Ce champ ne peut etre vide.")
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $publicationDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $lastUpdateDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPublished;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", inversedBy="articles")
     */
    private $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getId() // : ?int
    {
        return $this->id;
    }

    public function getPicture()// : ?string
    {
        return $this->picture;
    }

    public function setPicture($picture) // : self string
    {
        $this->picture = $picture;

        return $this;
    }

    public function getTitle() // : ?string
    {
        return $this->title;
    }

    public function setTitle($title) // : self string
    {
        $this->title = $title;

        return $this;
    }

    public function getContent() // : ?string
    {
        return $this->content;
    }

    public function setContent($content) // : self string
    {
        $this->content = $content;

        return $this;
    }

    public function getPublicationDate() // : ?\DateTimeInterface
    {
        return $this->publicationDate;
    }

    public function setPublicationDate($publicationDate) //  : self DateTimeInterface
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    public function getLastUpdateDate() // : ?\DateTimeInterface
    {
        return $this->lastUpdateDate;
    }

    public function setLastUpdateDate( $lastUpdateDate) // : self \DateTimeInterface
    {
        $this->lastUpdateDate = $lastUpdateDate;

        return $this;
    }

    public function getIsPublished() // : ?bool
    {
        return $this->isPublished;
    }

    public function setIsPublished($isPublished) //  : self bool
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategories() // : Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category) // : self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
        }

        return $this;
    }

    public function removeCategory(Category $category) // : self
    {
        if ($this->categories->contains($category)) {
            $this->categories->removeElement($category);
        }

        return $this;
    }
}
