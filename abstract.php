<?php
//normal prosess
// class Student{
// 	public $name;
// 	public $age;


// 	public function abstrclass(){
// 		echo $this->name."and age".$this->age."years old";
// 	}

// }


// $test = new Student();
// $test->name ='Amir';
// $test->age  ='26';
// $test->abstrclass();

?>




<?php
//abstratc class er obj create kora jay nah  eta multiple class extend korte pare nah ekta class ke access korte pare 
//abstract class er body thake abar nou thakte pare  
abstract class Student{ // abstract class 
	public $name;
	public $age;


	public function abstrclass(){  // non abstract method declare  body ace
		echo $this->name."and age".$this->age."years old";  
	}


abstract public function details(); // abstract method body nei ei method er



}


class Boy extends Student{

	public function describe(){
		return parent::abstrclass(). "And i am high School Student";

	}


		public function details(){ // ei vabe over ride kore use kora jay method ke
			echo "i am over ride"; 

	}

}




$test = new Boy(); //sub cls er object 
$test->name ='Amir';
$test->age  ='26';
$test->describe();
$test->details();








?>