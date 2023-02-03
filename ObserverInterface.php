<?php

interface ObserverInterface
{
    public function update(float $temperature, float $humidity, float $pressure);
}