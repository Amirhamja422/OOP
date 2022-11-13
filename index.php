
<!-- ///////////////////////////////////two number add ,sub ,div, mult using oop /////////////////////////////////// -->


<!-- ///////////////////////////////////two number add ,sub ,div, mult using oop /////////////////////////////////// -->
<!-- 
<?php include "inc/function.php";?>
   <form action="" method="post">
    <table>
      <tr>
       <td>Enter the first number</td>
       <td><input type="number" name="num1"></td>
       <td>Enter the Secound number</td>
       <td><input type="number" name="num2"></td>
       </tr>
       <tr>
        <td><input type="submit" name="calculation" value="calculation"></td>
       </tr>
    </table>  
   </form>

  <?php
    if(isset($_POST['calculation'])){
      $numOne = $_POST['num1'];  
      $numTwo =$_POST['num2'];

      if(empty($numOne) or empty($numTwo)){
        echo "<span style='color:red;'>Field must not be empty</span>";

      }

      $cal = new calculations();
      $cal->twonumberAdd($numOne,$numTwo);
      $cal->twonumberSub($numOne,$numTwo);
      $cal->twonumberMult($numOne,$numTwo);
      $cal->twonumberDiv($numOne,$numTwo);

    }

  ?>
 -->


<!-- <?php include "inc/function.php";?>
   <form action="" method="post">
    <table>
    	<tr>
    	 <td>Enter the first number</td>
    	 <td><input type="number" name="num1"></td>
    	 <td>Enter the Secound number</td>
    	 <td><input type="number" name="num2"></td>
       </tr>
       <tr>
       	<td><input type="submit" name="calculation" value="calculation"></td>
       </tr>
    </table>	
   </form>

	<?php
	  if(isset($_POST['calculation'])){
	  	$numOne = $_POST['num1'];  
	    $numTwo =$_POST['num2'];

	    if(empty($numOne) or empty($numTwo)){
	    	echo "<span style='color:red;'>Field must not be empty</span>";

	    }

	    $cal = new calculations();
	    $cal->twonumberAdd($numOne,$numTwo);
	    $cal->twonumberSub($numOne,$numTwo);
	    $cal->twonumberMult($numOne,$numTwo);
	    $cal->twonumberDiv($numOne,$numTwo);

	  }

	?>
 -->


<?php
//consttruct function
// class personOne{
//    public $names ='amirrr';
//    public function __construct(){
//     echo $this->names;
//    }
// }
//  $personTwo = new personOne();
?>






<?php
//consttruct function
// class personOne{
//    public function __construct($names){
//     echo $this->names = $names;
//    }
// }
//  $personTwo = new personOne('tesruser');
?>







<?php
//only using function
// class personOne{
//    public function testName($names){
//    echo $this->name =$names; //ei vbe likhle run korbe
//    echo $names; // ei vabe likhle run korbe
// }

// }
// $personTwo = new personOne();
// $personTwo->testName('tesname');

?>





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
class personOne{
   public $names;
   public $age;
   public function testName($test,$age){
   	echo $this->nameee = $test;
   	echo "<br>";
   	echo $this->age = $age;
}

}
$personTwo = new personOne('yhh','efrgt');
$personTwo->testName('ere','ewfe');

?>
