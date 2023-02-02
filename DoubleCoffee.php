<?php

class DoubleCoffee implements CoffeeInterface
{

    public function getCost(): float
    {
        return 15.0;
    }

    public function getDescription(): string
    {
        return "Double Coffee";
    }
}