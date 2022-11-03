<?php

// class man{
	// public $name ='amir';
// 	public $name;
// 	public $age ='25';
// 	public $address ='Dhaka';


// function first($fname){
// 	$this->name =$fname;
// 	return  "Nmae  :".$this->name."";
	// return 'php oop';
	
// }
// }

// $amir = new man();
// echo $amir->name;
// $amir->name ='amir';
// echo $amir->name;
// echo $amir->age;
// echo $amir->address;
// echo $amir->first();
// echo $amir->first('hm amir');


?>

<?php

// construct function 

class person{

public $name;
public $age;


function __construct($fname,$lage){
	$this->nmae =$fname;
	$this->age =$lage;

}

function first(){
	return "Nmae: ".$this->name." And age :".$this->age."";

}



}

 $amir = new person('iiii','iuggg');

echo $amir->first(); 
?>