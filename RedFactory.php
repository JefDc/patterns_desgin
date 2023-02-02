<?php

class RedFactory implements ColorFactory
{

    public function getColor()
    {
        return new Red();
    }
}