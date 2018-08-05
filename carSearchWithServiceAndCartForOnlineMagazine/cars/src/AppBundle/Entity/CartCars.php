<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartCars
 *
 * @ORM\Table(name="cart_cars")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CartCarsRepository")
 */
class CartCars
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
     * @var Cart
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cart", inversedBy="cartCars")
     * @ORM\JoinColumn(name="cart_id", referencedColumnName="id")
     */
    private $cart;

    /**
     * @var \stdClass
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Car")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     */
    private $car;

    /**
     * @var int
     *
     * @ORM\Column(name="qty", type="integer")
     */
    private $qty;


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
     * Set cart
     *
     * @param \stdClass $cart
     *
     * @return CartCars
     */
    public function setCart($cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return \stdClass
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set car
     *
     * @param \stdClass $car
     *
     * @return CartCars
     */
    public function setCar($car)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return \stdClass
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set qty
     *
     * @param integer $qty
     *
     * @return CartCars
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return int
     */
    public function getQty()
    {
        return $this->qty;
    }
}

