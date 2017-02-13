<?php

namespace AnimalsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Species
 *
 * @ORM\Table(name="species")
 * @ORM\Entity(repositoryClass="AnimalsBundle\Repository\SpeciesRepository")
 */
class Species
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
     * @ORM\Column(name="species", type="string", length=255)
     */
    private $species;

    /**
     * One Spesies has Many Breed.
     * @ORM\OneToMany(targetEntity="Breed", mappedBy="species")
     */
    private $breeds;

    public function __construct() {
        $this->breeds = new ArrayCollection();
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
     * Set species
     *
     * @param string $species
     *
     * @return Species
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
     * Add breed
     *
     * @param \AnimalsBundle\Entity\Breed $breed
     *
     * @return Species
     */
    public function addBreed(\AnimalsBundle\Entity\Breed $breed)
    {
        $this->breeds[] = $breed;

        return $this;
    }

    /**
     * Remove breed
     *
     * @param \AnimalsBundle\Entity\Breed $breed
     */
    public function removeBreed(\AnimalsBundle\Entity\Breed $breed)
    {
        $this->breeds->removeElement($breed);
    }

    /**
     * Get breeds
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBreeds()
    {
        return $this->breeds;
    }
}
