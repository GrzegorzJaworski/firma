<?php

namespace CrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visits
 *
 * @ORM\Table(name="visits")
 * @ORM\Entity(repositoryClass="CrmBundle\Repository\VisitsRepository")
 */
class Visits
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
     * @var \DateTime
     *
     * @ORM\Column(name="dataStart", type="datetime")
     */
    private $dataStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataEnd", type="datetime")
     */
    private $dataEnd;

    /**
     * @ORM\ManyToOne(targetEntity="Animals", inversedBy="visits")
     */
    private $animals;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="visits")
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
     * Set dataStart
     *
     * @param \DateTime $dataStart
     * @return Visits
     */
    public function setDataStart($dataStart)
    {
        $this->dataStart = $dataStart;

        return $this;
    }

    /**
     * Get dataStart
     *
     * @return \DateTime 
     */
    public function getDataStart()
    {
        return $this->dataStart;
    }

    /**
     * Set dataEnd
     *
     * @param \DateTime $dataEnd
     * @return Visits
     */
    public function setDataEnd($dataEnd)
    {
        $this->dataEnd = $dataEnd;

        return $this;
    }

    /**
     * Get dataEnd
     *
     * @return \DateTime 
     */
    public function getDataEnd()
    {
        return $this->dataEnd;
    }

    /**
     * Set animals
     *
     * @param \CrmBundle\Entity\Animals $animals
     * @return Visits
     */
    public function setAnimals(\CrmBundle\Entity\Animals $animals = null)
    {
        $this->animals = $animals;

        return $this;
    }

    /**
     * Get animals
     *
     * @return \CrmBundle\Entity\Animals 
     */
    public function getAnimals()
    {
        return $this->animals;
    }

    /**
     * Set employee
     *
     * @param \CrmBundle\Entity\User $employee
     * @return Visits
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
