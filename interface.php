<?php
    interface Supercar
    {
        public function getTransmission($transmission);
    }
    class Car implements Supercar
    {
        public $color;
        public $name;
        public $transmission='Механика';
        public $engine;
        public function getTransmission($transmission)
        {
            return $this->transmission=$transmission;
        }
    }
    $bmw= new Car();
    $bmw->name='БМВ';
    $bmw->color='белый';
    $bmw->engine='2.0';
    $bmw->getTransmission('Автомат');
    echo "<pre>";
    print_r($bmw);
    $priora= new Car();
    $priora->name='Лада';
    $priora->color='красный';
    $priora->engine='1.6';
    $priora->transmission;
    print_r($priora);

   interface SuperProduct
   {
       public function getProperty($name, $price, $size);
   }
    class Product implements SuperProduct
    {
        private $privatecolor='Розовый';
        public function getProperty($name, $price, $size)
        {
            $this->name = $name;
            $this->price = $price;
            $this->size = $size;
        }
    }
    $tele= new Product();
    $tele->getProperty('Телефон',10000,'Маленький');
    $tv= new Product();
    $tele->getProperty('ТВ',300000,'Большой');
    print_r($tele);
    print_r($tv);
    interface SuperPen
    {
    public function getMaterial($a);
    public function getProperty($brand,$price,$color);
    }
    class Pen implements SuperPen
    {
        private $size=20;
        public static $material='Пластик';
        public function getMaterial($a)
        {
            self::$material=$a;
            echo self::$material;
            echo "<br>";
        }
        public function getProperty($brand,$price,$color)
        {
            $this->brand_=$brand;
            $this->price=$price;
            $this->color=$color;
        }
    }
    $blackpen= new Pen();
    $blackpen->getMaterial('Металл');
    $blackpen->getProperty('noname',10,'Черный');
    $greypen= new Pen();
    $greypen->getProperty('noname',10,'Серый');
    print_r($greypen);
    print_r($blackpen);
    interface SuperTv
    {
        public function getProperty($name,$diagonal,$price,$color);
    }
    class Tv implements SuperTv
    {
        private $weight=40;
        public function getProperty($name,$diagonal,$price,$color)
        {
            $this->name=$name;
            $this->diagonal=$diagonal;
            $this->price=$price;
            $this->color=$color;
        }
    }
    $sonytv= new Tv();
    $sonytv->getProperty('Sony',55,150000,'black');
    echo "<br>";
    print_r($sonytv);
    $panasonictv= new Tv();
    $panasonictv->getProperty('Panasonic',50,100000,'black');
    echo "<br>";
    print_r($panasonictv);
    interface SuperDuck
    {
        public function getProperty($name,$age,$rich);
    }
    class Duck implements SuperDuck
    {
        private $color='Белый';
        private $fly='Не летает';
        public function getProperty($name,$age,$rich)
        {
            $this->name=$name;
            $this->age=$age;
            $this->rich=$rich;
        }
    }
    $donaldduck= new Duck();
    $donaldduck->getProperty('Donald',20,'NO');
    echo "<br>";
    print_r($donaldduck);
    $scroogeduck= new Duck();
    $scroogeduck->getProperty('Scrooge',65,'YES');
    echo "<br>";
    print_r($scroogeduck);