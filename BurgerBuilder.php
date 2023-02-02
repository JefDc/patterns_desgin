<?php

class BurgerBuilder
{
    public int $size;
    public bool $cheese = false;
    public bool $pepperoni = false;
    public bool $lettuce = false;
    public bool $tomato = false;

    public function __construct(int $size) {
        $this->size = $size;
    }

    public function addPepperoni(): static
    {
        $this->pepperoni = true;
        return $this;
    }

    public function addLettuce(): static
    {
        $this->lettuce = true;
        return $this;
    }

    public function addCheese(): static
    {
        $this->cheese = true;
        return $this;
    }

    public function addTomato(): static
    {
        $this->tomato = true;
        return $this;
    }

    public function build(): Burger {
        return new Burger($this);
    }
}