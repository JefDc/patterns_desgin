<?php

class AnimalFactory
{
    /**
     * @throws Exception
     */
    public function createAnimal($type) {
        if ($type === 'dog') {
            return new Dog();
        } elseif ($type === 'cat') {
            return new Cat();
        } else {
            return false;
        }
    }
}