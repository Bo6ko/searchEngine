<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
class PriceCalculator {
    
    /**
     * @var EntityManager
     */
    protected $emanager;
    
    /**
     * @var $promotion
     */
    protected $promotion;
    
    /**
     * @param EntityManager $emanager
     */
    public function __construct(EntityManager $emanager) {
        $this->emanager = $emanager;
        $this->initMaxPromotion();
    }
    
    /**
     * @param float $price
     * @return float
     */
    public function calculate($price) {
        return $price - $price * ($this->promotion / 100);
    }
    
    public function initMaxPromotion() {
        $this->promotion = $this->emanager->getRepository('AppBundle:Promotion')->fetchBiggestPromotion();
    }
    
    public function getPromotion() {
        return $this->promotion;
    }
    
}