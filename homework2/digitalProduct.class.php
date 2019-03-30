<?php
//Цифровой товар

include "product_abstract.class.php";
class digitalProduct extends Product{
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
            . $this->getToward()." (ед.)." . ";"." Доход: " . $this->cost()." рублей"."<br>";
    }
}
$digitalProduct1 = new digitalProduct('цифровой товар', 2500, 2);
$digitalProduct1->display();