<?php

class SimpleCoffee implements CoffeeInterface
{

    public function getCost(): float
    {
        return 10.0;
    }

    public function getDescription(): string
    {
        return "Simple Coffee";
    }
}