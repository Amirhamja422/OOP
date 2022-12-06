<?php   

$arr = array("php","python");
$codding = new ArrayObject($arr);
$codding->append("java");
$iterator =$codding->getIterator();

while ($iterator->valid()) {
	echo $iterator->current()."<br/>";
	$iterator->next();

}


?>