<?php
class person{

public $name;
public $age;

public function __construct($fname){
    echo $this->name=$fname;
    echo "<br>";
    //echo "construct created";
}
}

$man = new person('amir');

?>


<?php
//consttruct function
class personOne{

   public $names;
   public $ages;

   public function __construct($fnames,$ages){
    $this->name = $fnames;
    $this->age = $ages;
   }

   public function testName(){
   echo $this->name;
   echo "<br>";
   echo $this->age;
}

}

$personTwo = new personOne('testperson','testpersontwo');
$personTwo->testName();


?>