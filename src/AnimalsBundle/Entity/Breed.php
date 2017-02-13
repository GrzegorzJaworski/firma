<?php

namespace AnimalsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Breed
 *
 * @ORM\Table(name="breed")
 * @ORM\Entity(repositoryClass="AnimalsBundle\Repository\BreedRepository")
 */
class Breed
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
     * @ORM\Column(name="breed", type="string", length=255)
     */
    private $breed;

    /**
     * Many Breed have One Specie.
     * @ORM\ManyToOne(targetEntity="Species", inversedBy="breeds", fetch="EAGER")
     */
    private $species;

    // ...
    /**
     * One Breed has Many Animals.
     * @ORM\OneToMany(targetEntity="Animals", mappedBy="breed")
     */
    private $animals;

    public function __construct() {
        $this->animals = new ArrayCollection();
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
     * Set breed
     *
     * @param string $breed
     *
     * @return Breed
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
     * Set species
     *
     * @param \AnimalsBundle\Entity\Species $species
     *
     * @return Breed
     */
    public function setSpecies(\AnimalsBundle\Entity\Species $species = null)
    {
        $this->species = $species;

        return $this;
    }

    /**
     * Get species
     *
     * @return \AnimalsBundle\Entity\Species
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Add animal
     *
     * @param \AnimalsBundle\Entity\Animals $animal
     *
     * @return Breed
     */
    public function addAnimal(\AnimalsBundle\Entity\Animals $animal)
    {
        $this->animals[] = $animal;

        return $this;
    }

    /**
     * Remove animal
     *
     * @param \AnimalsBundle\Entity\Animals $animal
     */
    public function removeAnimal(\AnimalsBundle\Entity\Animals $animal)
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
}
