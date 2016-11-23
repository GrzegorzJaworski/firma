<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movies
 *
 * @ORM\Table(name="movies")
 * @ORM\Entity(repositoryClass="CrmBundle\Repository\MoviesRepository")
 */
class Movies
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
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Animals", inversedBy="movie")
     */
    private $animal;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="movie")
     */
    private $employee;

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
     * Set link
     *
     * @param string $link
     * @return Movies
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Movies
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set animal
     *
     * @param \CrmBundle\Entity\Animals $animal
     * @return Movies
     */
    public function setAnimal(\CrmBundle\Entity\Animals $animal = null)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return \CrmBundle\Entity\Animals 
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * Set employee
     *
     * @param \CrmBundle\Entity\User $employee
     * @return Movies
     */
    public function setEmployee(\CrmBundle\Entity\User $employee = null)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return \CrmBundle\Entity\User 
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}
