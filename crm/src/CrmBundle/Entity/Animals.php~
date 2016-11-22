<?php

namespace CrmBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;


use Doctrine\ORM\Mapping as ORM;

/**
 * Animals
 *
 * @ORM\Table(name="animals")
 * @ORM\Entity(repositoryClass="CrmBundle\Repository\AnimalsRepository")
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="animals")
     */
    private $owner;

    /**
     * @ORM\OneToMany(targetEntity="Visits", mappedBy="animals")
     */
    private $visits;
    
    public function __construct() {
        $this->visits = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
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
     * Set description
     *
     * @param string $description
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
     * Set owner
     *
     * @param string $owner
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
     * Add visits
     *
     * @param \CrmBundle\Entity\Visits $visits
     * @return Animals
     */
    public function addVisit(\CrmBundle\Entity\Visits $visits)
    {
        $this->visits[] = $visits;

        return $this;
    }

    /**
     * Remove visits
     *
     * @param \CrmBundle\Entity\Visits $visits
     */
    public function removeVisit(\CrmBundle\Entity\Visits $visits)
    {
        $this->visits->removeElement($visits);
    }

    /**
     * Get visits
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVisits()
    {
        return $this->visits;
    }
}
