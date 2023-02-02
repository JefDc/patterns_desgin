<?php

class MilkCoffee extends CoffeeDecorator
{
    public function getCost(): float {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription(): string {
        return $this->coffee->getDescription() . ", milk";
    }
}