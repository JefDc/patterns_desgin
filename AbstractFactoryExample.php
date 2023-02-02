<?php

class AbstractFactoryExample
{
    public static function main($shape, $color) {
        //Shape
        if ($shape == 'circle') {
            $shapeFactory = new CircleFactory();
            $shape = $shapeFactory->getShape();
            $shape->draw();
        } elseif ($shape == 'square') {
            $shapeFactory = new SquareFactory();
            $shape = $shapeFactory->getShape();
            $shape->draw();
        } else {
            echo "Random shape \n";
        }
        //Color
        if ($color == 'red') {
            $colorFactory = new BlueFactory();
            $color = $colorFactory->getColor();
            $color->fill();
        } elseif ($color == 'blue') {
            $colorFactory = new BlueFactory();
            $color = $colorFactory->getColor();
            $color->fill();
        } elseif ($color == 'green') {
            $colorFactory = new GreenFactory();
            $color = $colorFactory->getColor();
            $color->fill();
        } else {
            echo "random color \n";
        }
    }
}