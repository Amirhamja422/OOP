<?php


class ihtclass{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name =$name;
        $this->age =$age;

    }

    public function display(){
        echo $this->name;
        echo "<br>";
        echo $this->age;

    }

}


class admin extends ihtclass{
    //public $roll='888';
    public function display(){
        echo $this->name;
        echo "<br>";
        echo $this->age;
        echo "<br>";
        echo $this->roll;


    }


}



$onemore = new ihtclass('amir','mr');
$onemore->display();

// for method
$dndclass = new admin('23','45');
$dndclass->roll ='admin';
$dndclass->display();












?>