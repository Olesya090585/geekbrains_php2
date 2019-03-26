<?php
abstract class Product{
    private $name;
    private $price;
    private $toward;

    function __construct($name, $price, $toward)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setToward($toward);

    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }
    function setToward($toward)
    {
        $this->toward = $toward;
    }
    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }
    function getToward()
    {
        return $this->toward;
    }

    abstract function Cost();
    abstract function display();

}


