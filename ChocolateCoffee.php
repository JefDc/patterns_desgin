<?php

class ChocolateCoffee extends CoffeeDecorator
{
    public function getCost(): float {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription(): string {
        return $this->coffee->getDescription() . ", chocolate";
    }
}