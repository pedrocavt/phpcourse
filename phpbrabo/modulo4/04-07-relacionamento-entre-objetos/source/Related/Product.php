<?php 

namespace Source\Related;

class Product
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return number_format($this->price, "2",".", ",");
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }


}


?>