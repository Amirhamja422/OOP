
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



<?php

// magic method 


//get ($property)
//set ($property, $value)   // all are magic method
//call($method, $arg_array) //undefined method

class Student{
	public $name;
	public function describe(){
     echo "I am a Student";
	}
	public function __get($pm){
		echo "$pm does not match";


	}


public function __set($pm,$value){
	echo "we set $pm->$value";
}

public function __call($pm,$value){
	echo 'There is no '.$pm.' method and argument '.implode(',',$value);
}

}





$st = new Student();
$st->describe();
$st->Amir; // thise is undefined property 
$st->age ="12";
$st->DEscribeIt('2','7','10');






 ?>