<?php

class GreenFactory implements ColorFactory
{

    public function getColor()
    {
        return new Green();
    }
}