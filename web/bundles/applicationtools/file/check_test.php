<?php

	echo "Plik check_test.php";
	var_dump(($_POST));
	
	$q_1 = !empty($_POST["q_1"]) ? $_POST["q_1"] : 0;
	$q_2 = !empty($_POST["q_2"]) ? $_POST["q_2"] : 0;
	$q_3 = !empty($_POST["q_3"]) ? $_POST["q_3"] : 0;
	$q_4 = !empty($_POST["q_4"]) ? $_POST["q_4"] : 0;
	
	$suma= $q_1 + $q_2 + $q_3 + $q_4;
	
	echo $suma;
	
	
?>