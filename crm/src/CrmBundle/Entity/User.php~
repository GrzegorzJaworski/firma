<?php

namespace CrmBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Animals", mappedBy="owner")
     */
    private $animals;

    /**
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="owner")
     */
    private $orders;
    
    /**
     * @ORM\OneToMany(targetEntity="Visits", mappedBy="employee")
     */
    private $visits;
    
    /**
     * @ORM\OneToMany(targetEntity="Movies", mappedBy="employee")
     */
    private $movie;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;
    
    /**
     * @var intt
     *
     * @ORM\Column(name="phone", type="integer")
     */
    private $phone;
    
    /**
     * @var int
     *
     * @ORM\Column(name="alarmPhone", type="integer")
     */
    private $alarmPhone;
    

    public function __construct() {
        parent::__construct();
        $this->animals = new ArrayCollection();
        $this->orders = new ArrayCollection();
        $this->visits = new ArrayCollection();
        $this->movie = new ArrayCollection();
    }


    /**
     * Add animals
     *
     * @param \CrmBundle\Entity\Animals $animals
     * @return User
     */
    public function addAnimal(\CrmBundle\Entity\Animals $animals)
    {
        $this->animals[] = $animals;

        return $this;
    }

    /**
     * Remove animals
     *
     * @param \CrmBundle\Entity\Animals $animals
     */
    public function removeAnimal(\CrmBundle\Entity\Animals $animals)
    {
        $this->animals->removeElement($animals);
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
     * Add orders
     *
     * @param \CrmBundle\Entity\Orders $orders
     * @return User
     */
    public function addOrder(\CrmBundle\Entity\Orders $orders)
    {
        $this->orders[] = $orders;

        return $this;
    }

    /**
     * Remove orders
     *
     * @param \CrmBundle\Entity\Orders $orders
     */
    public function removeOrder(\CrmBundle\Entity\Orders $orders)
    {
        $this->orders->removeElement($orders);
    }

    /**
     * Get orders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Add visits
     *
     * @param \CrmBundle\Entity\Visits $visits
     * @return User
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

    /**
     * Add movie
     *
     * @param \CrmBundle\Entity\Movie $movie
     * @return User
     */
    public function addMovie(\CrmBundle\Entity\Movies $movie)
    {
        $this->movie[] = $movie;

        return $this;
    }

    /**
     * Remove movie
     *
     * @param \CrmBundle\Entity\Movie $movie
     */
    public function removeMovie(\CrmBundle\Entity\Movies $movie)
    {
        $this->movie->removeElement($movie);
    }

    /**
     * Get movie
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
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


    

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set alarmPhone
     *
     * @param integer $alarmPhone
     * @return User
     */
    public function setAlarmPhone($alarmPhone)
    {
        $this->alarmPhone = $alarmPhone;

        return $this;
    }

    /**
     * Get alarmPhone
     *
     * @return integer 
     */
    public function getAlarmPhone()
    {
        return $this->alarmPhone;
    }
}
