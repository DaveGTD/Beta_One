<?php
	
	echo print_r($_POST);

	$data = json_decode($_POST['json']);
	var_dump($data);
?>