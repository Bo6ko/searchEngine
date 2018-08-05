<?php

namespace AppBundle\Service;

class MessageGenerator {
    
    public function getHappyMessage() {
        $message = [
            'text 1',
            'text 2',
            'text 3',
        ];
        
        $index = array_rand($message);
        
        return $message[$index];
        
    }
    
}