<?php

namespace AppBundle\Transformer;

use Symfony\Component\Form\DataTransformerInterface;
class TagsTransformer implements DataTransformerInterface {
    
    public function transform($tagAsArray) {
        if (empty($tagAsArray)) {
            return '';
        }
        return implode(', ', $tagAsArray);
    }
    
    public function reverseTransform($tagAsString) {
        if (empty($tagAsString)) {
            return [];
        }
        return explode(',', $tagAsString);
    }
    
}