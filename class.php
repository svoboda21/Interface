<?php
    class SuperProduct
    {
        public $name;
        public $color;
        public function __construct($name,$color)
        {
            $this->name=$name;
            $this->color=$color;
        }
    }
    class Car extends SuperProduct
    {
        public $transmission='Механика';
        public $engine;
        public function getTransmission($transmission)
        {
            return $this->transmission=$transmission;
        }
    }
    $bmw= new Car('БМВ','Черный');
    $bmw->engine='2.0';
    $bmw->getTransmission('Автомат');
    echo "<pre>";
    print_r($bmw);
    $priora= new Car('Лада','Белый');
    $priora->engine='1.6';
    $priora->transmission;
    print_r($priora);

    class Product extends SuperProduct
    {
        public function __construct($name,$color,$price,$size)
        {
            $this->price = $price;
            $this->size = $size;
            parent::__construct($name,$color);
        }
    }
    $tele= new Product('Телефон','Белый',10000,'Маленький');
    print_r($tele);
    $tv= new Product('ТВ','Черный',10000,'Большой');
    print_r($tv);

    class Pen extends SuperProduct
    {
        private $size=20;
        public static $material='Пластик';
        public function getMaterial($a)
        {
            self::$material=$a;
            echo self::$material;
            echo "<br>";
        }
        public function __construct($name,$color,$price)
        {

            $this->price=$price;
            parent::__construct($name,$color);
        }
    }
    $blackpen= new Pen('ErichKrause','Черный',20);
    print_r($blackpen);
    $blackpen->getMaterial('Металл');
    $greykpen= new Pen('noname','Серый',2);
    print_r($greykpen);
    echo pen::$material;

    class Tv extends SuperProduct
    {
        private $weight=40;
        public function __construct($name,$color,$diagonal,$price)
        {

            $this->diagonal=$diagonal;
            $this->price=$price;
            parent::__construct($name,$color);

        }
    }
    $sonytv= new Tv('Sony','black',55,150000);
    echo "<br>";
    print_r($sonytv);
    $panasonictv= new Tv('Panasonic','black',50,100000);
    echo "<br>";
    print_r($panasonictv);
    class Duck extends SuperProduct
    {
        private $fly='Не летает';
        public function __construct($name,$color,$age,$rich)
        {
            $this->age=$age;
            $this->rich=$rich;
            parent::__construct($name,$color);
        }
    }
    $donaldduck= new Duck('Donald','Белый',20,'NO');
    echo "<br>";
    print_r($donaldduck);
    $scroogeduck= new Duck('Scrooge','Белый',65,'YES');
    echo "<br>";
    print_r($scroogeduck);