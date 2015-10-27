<?php
	

	echo print_r($_POST);
	$data = json_decode($_POST['data']);
	var_dump($data);
?>