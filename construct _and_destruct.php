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

<?php
//destruct function ia an magical method
class persondestruct{

public $name;
public $age;


public function __destruct(){
    if(! empty($this->id)){
        echo "saving mode";
    }

}

public function setId($id){
    echo $this->id =$id;

}
}

$persondestructs = new persondestruct();

$persondestructs->setId(12);



?>




<?php
// consrtuc and destruct function in oop php 
 class twoInone{
 
    public $one;
    public $two;

    public function __construct($ones,$twos){
        echo $this->one =$ones;
        echo $this->two =$twos;

    }


    public function __desstruct(){
        unset($this->one);
        unset($this->two);

    }
 } 

 $testoness = new twoInone('1','3');





?>