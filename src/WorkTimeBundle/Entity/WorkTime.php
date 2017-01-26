<?php

namespace WorkTimeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkTime
 *
 * @ORM\Table(name="work_time")
 * @ORM\Entity(repositoryClass="WorkTimeBundle\Repository\WorkTimeRepository")
 */
class WorkTime
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
     * Many WorkTimes have One Petsitter.
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="workTimes")
     */
    private $petsitter;

    /**
     * Many WorkTimes have One Animal.
     * @ORM\ManyToOne(targetEntity="AnimalsBundle\Entity\Animals", inversedBy="walks")
     */
    private $animal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="visitStart", type="datetime")
     */
    private $visitStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="visitEnd", type="datetime")
     */
    private $visitEnd;


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
     * Set petsitter
     *
     * @param string $petsitter
     *
     * @return WorkTime
     */
    public function setPetsitter($petsitter)
    {
        $this->petsitter = $petsitter;

        return $this;
    }

    /**
     * Get petsitter
     *
     * @return string
     */
    public function getPetsitter()
    {
        return $this->petsitter;
    }

    /**
     * Set animal
     *
     * @param string $animal
     *
     * @return WorkTime
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get animal
     *
     * @return string
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * Set visitStart
     *
     * @param \DateTime $visitStart
     *
     * @return WorkTime
     */
    public function setVisitStart($visitStart)
    {
        $this->visitStart = $visitStart;

        return $this;
    }

    /**
     * Get visitStart
     *
     * @return \DateTime
     */
    public function getVisitStart()
    {
        return $this->visitStart;
    }

    /**
     * Set visitEnd
     *
     * @param \DateTime $visitEnd
     *
     * @return WorkTime
     */
    public function setVisitEnd($visitEnd)
    {
        $this->visitEnd = $visitEnd;

        return $this;
    }

    /**
     * Get visitEnd
     *
     * @return \DateTime
     */
    public function getVisitEnd()
    {
        return $this->visitEnd;
    }
}
