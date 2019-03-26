<?php
//Штучный товар
include "product_abstract.class.php";
class singleProduct extends Product{
    public function __construct($name, $price, $toward)
    {
        parent::__construct($name, $price, $toward);

    }

    function Cost()
    {
        $this->getToward();
        $this->getPrice();
        $a=($this->getToward()*$this->getPrice());
        return $a;
    }
    function display()
    {
        echo "Товар: " . $this->getName() . ";" . " Цена: " . $this->getPrice() . ";"." Колличество проданного товара: "
            . $this->getToward()." (шт.)." . ";"." Доход: " . $this->cost()." рублей"."<br>";
    }
}
$singleProduct1 = new singleProduct('штучный товар', 2500, 2);
$singleProduct1->display();