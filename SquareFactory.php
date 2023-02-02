<?php

class SquareFactory implements ShapeFactory
{

    public function getShape()
    {
        return new Square();
    }
}