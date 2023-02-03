<?php

class Display implements SplObserver
{
    public function update(SplSubject $splSubject): void
    {
        echo "Temperature: " . $splSubject->getTemperature() . "°C\n";
        echo "Humidity: " . $splSubject->getHumidity() . "%\n";
        echo "Pressure: " . $splSubject->getPressure() . "hPa\n";
    }
}