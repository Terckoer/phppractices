<?php
    class Car{

        private $wheels=4;
        private $doors =2;

        function __construct($n1=0, $n2=0)
        {
            $this->wheels = $n1;
            $this->doors = $n2;
        }

        public function showInfo(){
            echo $this->wheels.' '.$this->doors;
        }

        public static function staticMethod(){
            echo 'I am a static method and i can be called without create an object';
        }

    }

    class Bus extends Car{
        private $sits=10;
        public function showInfo2(){
            echo 'The bus have '.$this->sits.' sits';
        }
    }

    $car = new Car();
    $bus = new Car(6,2);

    echo $car->showInfo();
    echo $bus->showInfo();
    $son = new Bus();

    
    //Car::staticMethod();
    
    $son->showInfo2();
    $son->showInfo();


?>