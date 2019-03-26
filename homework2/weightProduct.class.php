<?php
//Весовой товар

include "product_abstract.class.php";
class weightProduct extends Product{
    public function __construct($name, $price, $toward)
    {
        parent::__construct($name, $price, $toward);

    }

    function Cost()
    {
        $this->getToward();
        $this->getPrice();
        $a=($this->getToward()*$this->getPrice())/2;
        return $a;
    }

    function display()
    {
        echo "Товар: " . $this->getName() . ";" . " Цена: " . $this->getPrice() . ";"." Колличество проданного товара: "
            . $this->getToward()." (кг.)." . ";"." Доход: " . $this->cost()." рублей"."<br>";
    }
}
$weightProduct1 = new weightProduct('весовой товар', 250.50, 2.3);
$weightProduct1->display();