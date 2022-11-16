




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


// class Person{
//   public $name ="amirkhan";
//   public $age ="26";
//   public $skil ="programmer";
//   private $email ="amir@gmail.com";
//   protected $password ="1234567890";

// function testName(){
//   foreach ($this as $key => $value) {
//   echo "<pre>"; 
//   echo "$key => $value";
//   echo "</pre>";
//   # code...
// }
// }

//  }



// $class = new Person;
// $class->testName();


?>


<?php 
// kichu method independently use kora jay onno class e
// abstratc class directly obj create korea kaj kortea pari nah
//abstartc class ke subclass er extend korea subclass er obj crete korea use kortea pari
//interface er khetre onek gulo interface meanse class ke implement korea kaj kora jay
// trait er khetre interffacce er motoy onek gulo trait nea kaj kora jay

// trait java{
//   public function javaCoder(){
//      return "i love java";
//   }
// }
// trait php{
//   public function phpCoder(){
//      return "i love java";
//   }
// }


// class coderOne{
//   use java,php;
// }



// $obj1 = new coderOne;
// echo $obj1->javaCoder();
// echo $obj1->phpCoder();

?>


<?php 
// kichu method independently use kora jay onno class e
// abstratc class directly obj create korea kaj kortea pari nah
//abstartc class ke subclass er extend korea subclass er obj crete korea use kortea pari
//interface er khetre onek gulo interface meanse class ke implement korea kaj kora jay
// trait er khetre interffacce er motoy onek gulo trait nea kaj kora jay

//trait method  ke prority dei nah jodi class er vtr method thake  ota ke pririty dei

// trait java{
//   public function javaCoder(){
//      return "i love java</br>";
//   }
// }
// trait php{
//   public function phpCoder(){
//      return "i love java</br>";
//   }
// }


// trait javaphp{
//   use java,php;
// }

// class coderOne{
//   use javaphp;
// }



// $obj1 = new coderOne;
// echo $obj1->javaCoder();
// echo $obj1->phpCoder();

?>


<?php

 // Late Static Binding er maddome super class sub class er stattic propert and method gulo access kortea parea


// class php{
//   public static function framework(){
//     echo "cakephp i don't know";
//   } 

//   public  function getFramework(){
//     self::framework();
//   }
// }

// $php = new php;
// $php->getFramework();

?>



<?php

class Php{
  public static function framework(){
   echo static::getClass();
  }

   public static function getClass(){
    return __CLASS__;
    }
}



class phpChild extends php{

   public static function getClass(){
    return __CLASS__;
   }

}


$php = new php;
$php->framework();

$childphp = new phpChild;
$childphp->framework();





?>