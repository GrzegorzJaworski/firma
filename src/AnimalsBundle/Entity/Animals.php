<?php

namespace AnimalsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Animals
 *
 * @ORM\Table(name="animals")
 * @ORM\Entity(repositoryClass="AnimalsBundle\Repository\AnimalsRepository")
 */
class Animals
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
     * Many Animals have One Breed.
     * @ORM\ManyToOne(targetEntity="AnimalsBundle\Entity\Breed")
     */
    private $breed;

    /**
     * Many Animals have One Owner.
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="animals")
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * One Animal has Many walks.
     * @ORM\OneToMany(targetEntity="WorkTimeBundle\Entity\WorkTime", mappedBy="animal")
     */
    private $walks;


    public function __construct() {
        $this->walks = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Animals
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
     * Set species
     *
     * @param string $species
     *
     * @return Animals
     */


    public function setSpecies($species)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return string
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set breed
     *
     * @param string $breed
     *
     * @return Animals
     */
    public function setBreed($breed)
    {
        $this->breed = $breed;

        return $this;
    }

    /**
     * Get breed
     *
     * @return string
     */
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return Animals
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Animals
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
     * Add walk
     *
     * @param \AnimalsBundle\Entity\WorkTime $walk
     *
     * @return Animals
     */
    public function addWalk(\AnimalsBundle\Entity\WorkTime $walk)
    {
        $this->walks[] = $walk;

        return $this;
    }

    /**
     * Remove walk
     *
     * @param \AnimalsBundle\Entity\WorkTime $walk
     */
    public function removeWalk(\AnimalsBundle\Entity\WorkTime $walk)
    {
        $this->walks->removeElement($walk);
    }

    /**
     * Get walks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWalks()
    {
        return $this->walks;
    }
}
