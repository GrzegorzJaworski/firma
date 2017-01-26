<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * One User has Many Animals.
     * @ORM\OneToMany(targetEntity="AnimalsBundle\Entity\Animals", mappedBy="owner")
     */
    private $animals;

    /**
     * One User has Many WorkTimes.
     * @ORM\OneToMany(targetEntity="WorkTimeBundle\Entity\WorkTime", mappedBy="petsitter")
     */
    private $workTimes;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    public function __construct()
    {
        parent::__construct();
        // your own logic
        $this->animals = new ArrayCollection();
        $this->workTimes = new ArrayCollection();
    }

    /**
     * Add animal
     *
     * @param \UserBundle\Entity\Animals $animal
     *
     * @return User
     */
    public function addAnimal(\UserBundle\Entity\Animals $animal)
    {
        $this->animals[] = $animal;

        return $this;
    }

    /**
     * Remove animal
     *
     * @param \UserBundle\Entity\Animals $animal
     */
    public function removeAnimal(\UserBundle\Entity\Animals $animal)
    {
        $this->animals->removeElement($animal);
    }

    /**
     * Get animals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * Add workTime
     *
     * @param \UserBundle\Entity\WorkTime $workTime
     *
     * @return User
     */
    public function addWorkTime(\UserBundle\Entity\WorkTime $workTime)
    {
        $this->workTimes[] = $workTime;

        return $this;
    }

    /**
     * Remove workTime
     *
     * @param \UserBundle\Entity\WorkTime $workTime
     */
    public function removeWorkTime(\UserBundle\Entity\WorkTime $workTime)
    {
        $this->workTimes->removeElement($workTime);
    }

    /**
     * Get workTimes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWorkTimes()
    {
        return $this->workTimes;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return User
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