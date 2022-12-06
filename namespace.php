<?php 
// page include syntex
include "classes/php.php";
include "classes/java.php";
include "classes/rubey.php";
?>

<?php
// daynamic autoload kore page gulo ke
//  spl_autoload_register(function($class_name){
// 	include "classes/".$class_name.".php";
// });

// obj call kora hoiche data view korar jonno
new amirtwo\Java();
new amir\Rubey();
//new amir\php();
// ei vabe alice kore kaj kora jay
use amir\php as ph;
new ph();

