<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Model
 *
 * @ORM\Table(name="model")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModelRepository")
 */
class Model
{

    public function __construct() {
        $this->cars = new ArrayCollection();
    }


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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Car", mappedBy="model")
     * @var unknown
     */
    private $cars;

    /**
     * @ORM\Column(name="mark_id", type="integer", length=10)
     * @var unknown
     */
    private $mark_id;

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
     * @return Model
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

    public function getCars() {
        return $this->cars;
    }

    public function setCars($car) {
        $this->cars->add($car);
    }

    public function __toString() {
        return $this->name;
    }

    public function getMark() {
        return $this->mark_id;
    }

    public function setMark($mark) {
        $this->mark_id = $mark;
    }

}

