<?php

class Clothes
{
    private $name;
    private $price;
    private $color;
    private $size;
    private $material;

    function __construct($name, $price, $color, $size, $material)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setColor($color);
        $this->setSize($size);
        $this->setMaterial($material);
//        $this->display();
    }

//  SETTER

    function setName($name)
    {
        $this->name = $name;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    function setSize($size)
    {
        $this->size = $size;
    }

    function setMaterial($material)
    {
        $this->material = $material;
    }

//    GETTER

    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getColor()
    {
        return $this->color;
    }

    function getSize()
    {
        return $this->size;
    }

    function getMaterial()
    {
        return $this->material;
    }

    function display()
    {
        echo "Товар: " . $this->getName() . ";" . " Цвет: " . $this->getColor() . ";" . " Размер: " . $this->getSize() . ";" .
            " Материал: " . $this->getMaterial() . ";" . " Цена: " . $this->getPrice() . "<br>";
    }
}

$clothes1 = new Clothes('Джинсы', 2500, 'черные', 42, 'хлопок');
$clothes1->display();
$clothes2 = new Clothes('Юбка', 1500, 'синяя', 42, 'хлопок');
$clothes2->display();
$clothes3 = new Clothes('Футболка', 500, 'белая', 40, 'хлопок');
$clothes3->display();