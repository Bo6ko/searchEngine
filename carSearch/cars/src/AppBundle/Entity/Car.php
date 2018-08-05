<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarRepository")
 */
class Car
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
     * @ORM\ManyToOne(targetEntity="Model", inversedBy="cars")
     * @ORM\Column(name="model_id", type="integer")
     */
    private $model;

    /**
     * @ORM\ManyToOne(targetEntity="Mark", inversedBy="cars")
     * @var unknown
     * @Assert\NotNull(message="Моля изберете марка")
     */
    private $mark;

    /**
     * @ORM\ManyToOne(targetEntity="Engine", inversedBy="cars")
     * @var unknown
     * @Assert\NotNull(message="Моля изберете двигател")
     */
    private $engine;

    /**
     * @ORM\ManyToOne(targetEntity="Color", inversedBy="cars")
     * @var unknown
     * @Assert\NotNull(message="Моля изберете цвят")
     */
    private $color;

    /**
     * @ORM\Column(name="price", type="integer", length=10)
     */
    private $price;

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
     * @param Model $model
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * @param Model $model
     */
    public function setModel($model) {
        $this->model = $model;
    }

    public function getMark() {
        return $this->mark;
    }

    public function setMark($mark) {
        $this->mark = $mark;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function setEngine($engine) {
        $this->engine = $engine;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

}

