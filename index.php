
<?php

// construct function 

class person{
public static $age ='22';
const NAME ="AMIR";

public static function display(){
	//const
	echo "Full Name :".person::NAME."</br>";
	//static
	echo "Age is    :".self::$age;
}


}

$amir = new person();
$amir->display();

//for static variable
person::display();
?>