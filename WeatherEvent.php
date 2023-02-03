<?php

class WeatherEvent
{
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
    }
}