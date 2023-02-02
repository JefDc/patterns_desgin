<?php

class BlueFactory implements ColorFactory
{

    public function getColor()
    {
        return new Blue();
    }
}