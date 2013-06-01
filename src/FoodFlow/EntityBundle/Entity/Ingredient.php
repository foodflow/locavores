<?php

namespace FoodFlow\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Ingredient
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ingredient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="from_chef", type="text")
     */
    private $from_chef;

    /**
     * @var string
     *
     * @ORM\Column(name="from_restaurant", type="text")
     */
    private $from_restaurant;

    /**
     * @var string
     *
     * @ORM\Column(name="varieties", type="text")
     */
    private $varieties;

    /**
     * @var string
     *
     * @ORM\Column(name="farms", type="text")
     */
    private $farms;

    /**
     * @var string
     *
     * @ORM\Column(name="tip", type="text")
     */
    private $tip;

    /**
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;


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
     * Set title
     *
     * @param string $title
     * @return Ingredient
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
     * Set description
     *
     * @param string $description
     * @return Ingredient
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

    /**
     * Set from_chef
     *
     * @param string $fromChef
     * @return Ingredient
     */
    public function setFromChef($fromChef)
    {
        $this->from_chef = $fromChef;

        return $this;
    }

    /**
     * Get from_chef
     *
     * @return string 
     */
    public function getFromChef()
    {
        return $this->from_chef;
    }

    /**
     * Set from_restaurant
     *
     * @param string $fromRestaurant
     * @return Ingredient
     */
    public function setFromRestaurant($fromRestaurant)
    {
        $this->from_restaurant = $fromRestaurant;

        return $this;
    }

    /**
     * Get from_restaurant
     *
     * @return string 
     */
    public function getFromRestaurant()
    {
        return $this->from_restaurant;
    }

    /**
     * Set varieties
     *
     * @param string $varieties
     * @return Ingredient
     */
    public function setVarieties($varieties)
    {
        $this->varieties = $varieties;

        return $this;
    }

    /**
     * Get varieties
     *
     * @return string 
     */
    public function getVarieties()
    {
        return $this->varieties;
    }

    /**
     * Set farms
     *
     * @param string $farms
     * @return Ingredient
     */
    public function setFarms($farms)
    {
        $this->farms = $farms;

        return $this;
    }

    /**
     * Get farms
     *
     * @return string 
     */
    public function getFarms()
    {
        return $this->farms;
    }

    /**
     * Set tip
     *
     * @param string $tip
     * @return Ingredient
     */
    public function setTip($tip)
    {
        $this->tip = $tip;

        return $this;
    }

    /**
     * Get tip
     *
     * @return string 
     */
    public function getTip()
    {
        return $this->tip;
    }
    
    /**
     * Set slug
     *
     * @param string $slug
     * @return Ingredient
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
}
