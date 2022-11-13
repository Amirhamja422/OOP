




<?php
//only using __construct
// class personOne{
//    // public $names;
//    public function __construct($test,$age){
//    	echo $this->nameee = $test;
//    	echo "<br>";
//    	echo $this->nameee = $age;
// }

// }
// $personTwo = new personOne('amirkhan','6778888');

?>


<!-- //  object e perameter pass korle oboshoi constuct method declare kortea hobe
	obje e peramter pass korle method e kivabe use korbo using function call sakil vi
 -->


<?php
//only using function
// class personOne{
//    public $test = 'newww';
//    public $age = '354364';
//    public function testName(){
//    	echo $this->test;
//    	echo "<br>";
//    	echo $this->age;
// }

// }
// $personTwo = new personOne();
// $personTwo->testName();

?>



<?php


//only using function
// class personOne{
//    public $names;
//    public $age;
//    public function testName($test,$age){
//    	echo $this->nameee = $test;
//    	echo "<br>";
//    	echo $this->age = $age;
// }

// }
// // $personTwo = new personOne('yhh','efrgt'); eta only construct er khetrea kaj kore otherwise perameter kaj korea nah
// $personTwo = new personOne();
// $personTwo->testName('ere','ewfe');

?>



<?php
// Bangla Object Oriented PHP Part-19 (PHP Object Iteration)


// class Person{
//   public $name ="amirkhan";
//   public $age ="26";
//   public $skil ="programmer";
//   private $email ="amir@gmail.com";
//   protected $password ="1234567890";
// }

// $class = new Person;
// foreach ($class as $key => $value) {
//   echo "<pre>"; 
//   echo "$key => $value";
//   echo "</pre>";
//   # code...
// }


?>


<?php


class Person{
  public $name ="amirkhan";
  public $age ="26";
  public $skil ="programmer";
  private $email ="amir@gmail.com";
  protected $password ="1234567890";

function testName(){
  foreach ($this as $key => $value) {
  echo "<pre>"; 
  echo "$key => $value";
  echo "</pre>";
  # code...
}
}

 }



$class = new Person;
$class->testName();


?>