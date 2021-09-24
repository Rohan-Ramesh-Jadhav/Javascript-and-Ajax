<?php
	$name = $_POST['name']; // here i store the data from call in local variable, if get is the type then use $_GET[]

	if($name == 'ABC')
		echo json_encode(1234567890);
	else
		echo json_encode(0);
?>