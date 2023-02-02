<?php
class CircleFactory implements ShapeFactory
{
    public function getShape()
    {
        return new Circle();
    }
}