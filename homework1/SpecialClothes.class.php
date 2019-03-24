<?php
include "Clothes.class.php";

class SpecialClothes extends Clothes
{
    private $category;

    public function __construct($name, $price, $color, $size, $material, $category)
    {
        parent::__construct($name, $price, $color, $size, $material);
        $this->category = $category;

    }

    function setCategory($category)
    {
        $this->category = $category;
    }

    function getCategory()
    {
        return $this->category;
    }

    function display()
    {
//        parent::display();
//        echo " Категория: " . $this->getCategory();
        echo "Товар: " . $this->getName() . ";" . " Цвет: " . $this->getColor() . ";" . " Размер: " . $this->getSize() . ";" .
            " Материал: " . $this->getMaterial() . ";" . " Цена: " . $this->getPrice() ." Категория: " . $this->getCategory(). "<br>";
    }

}

$sc1 = new SpecialClothes('Униформа', 5500, 'белый', 42, 'хлопок', 'Медицина');
$sc1->display();
