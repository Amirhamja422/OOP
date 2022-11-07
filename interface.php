<?php
interface Truck {
  // মেথড সমূহ
	public function setTruckModel($name);

	public function getTruckModel();
}

interface Wheels {
  public function setHasWheels($bool);

  public function getHasWheels();
}





class TruckDetails implements Truck, Wheels {
  private $model;
  private $hasWheels;

  public function setTruckModel($name) {
   $this->model = $name;
  }

 public function getTruckModel() {
   return $this->model;
 }

  public function setHasWheels($bool) {
    $this->hasWheels = $bool;
  }

 public function getHasWheels() {
  	return ($this->hasWheels)? "Has wheels" : "No wheels";
  }
}


// অবজেক্ট তৈরি
$truckdetails = new TruckDetails();
// মান সেট
$truckdetails->setTruckModel("Toyota");
$truckdetails->setHasWheels(true);
// ফলাফল আউটপুট
echo $truckdetails->getTruckModel();
echo $truckdetails->getHasWheels();



?>


<?php
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();
?>
 

 <?php    
   interface School{
   	public function mySchool();
   	public function myCollege();
   	public function myVersity();


   }



   class Teacher implements School{

   public function __construct(){
   	$this->mySchool();
   	$this->myCollege();
   	$this->myVersity();
   }

   public function mySchool(){
   	   		echo "i am new";
   	   	}   
   public function myCollege(){
   	   		echo "i am test";
   	   	}   
   public function myVersity(){
   	   		echo "i am user";
   	   	}

   }

   $tesst = new Teacher();

 ?>