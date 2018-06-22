<?php
    abstract class SuperProduct
    {
        abstract public function getPrice($price, $weight, $category,$delivery);
        abstract public function getDiscount($price,$discount,$category,$delivery);
    }
    class Product extends SuperProduct
    {
        public function getDiscount($price,$discount,$category,$delivery)
        {
            $finalprice = $price - ($price * $discount / 100);
            $this->delivery = $delivery+50;
            $this->price = $finalprice;
            echo "Продукт : $category";
            echo "<br>";
            echo "Цена доставки : $this->delivery";
            echo "<br>";
            echo "Цена без скидки : $price";
            echo "<br>";
            echo "Цена со скидкой : $finalprice";
            echo "<br>";
         }
        public function getPrice($price, $weight, $category,$delivery)
        {
            if ($category == 'Телевизор') {
                $discount = ($weight>10) ? 10 : 0;
                $delivery=($discount==0) ? 200 : 250;
                $this->getDiscount($price,$discount,$category,$delivery);
            } else {
                $discount=10;
                $this->getDiscount($price,$discount,$category,$delivery);
            }
        }
    }
    class Tv extends Product
    {
        public $diagonal;
    }
    class Door extends Product
    {
        public $height;
        public $width;
    }
    class Map extends Product
    {
        public $paper;
    }
    $tv= new Tv();
    $tv->diagonal=20;
    $tv->getprice(10000,9,'Телевизор',250);
    $door= new Door();
    $door->height=50;
    $door->width=40;
    $door->getprice(3000,3,'Дверь',250);
    $map= new Product();
    $door->paper='Высокое';
    $map->getprice(100,0.2,'Карта',250);
