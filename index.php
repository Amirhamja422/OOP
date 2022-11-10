
<!-- ///////////////////////////////////two number add ,sub ,div, mult using oop /////////////////////////////////// -->

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



