<?php

if (isset($_POST["adress1"]) && isset($_POST["Madress1"]) && isset($_POST["Code1"]) && isset($_POST["Type1"])&& isset($_POST["gpio1"]) 
	&&isset($_POST["adress2"]) && isset($_POST["Madress2"]) && isset($_POST["Code2"]) && isset($_POST["Type2"])&& isset($_POST["gpio2"])
	&&isset($_POST["adress3"]) && isset($_POST["Madress3"]) && isset($_POST["Code3"]) && isset($_POST["Type3"])&& isset($_POST["gpio3"]) 
	&&isset($_POST["adress4"]) && isset($_POST["Madress4"]) && isset($_POST["Code4"]) && isset($_POST["Type4"])&& isset($_POST["gpio4"])
 ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'adress1' => $_POST["adress1"],
    	'Madress1' => $_POST["Madress1"],
		'Code1' => $_POST["Code1"],
		'Type1' => $_POST["Type1"],
		'gpio1' => $_POST["gpio1"],
		'adress2' => $_POST["adress2"],
    	'Madress2' => $_POST["Madress2"],
		'Code2' => $_POST["Code2"],
		'Type2' => $_POST["Type2"],
		'gpio2' => $_POST["gpio2"],
		'adress3' => $_POST["adress3"],
    	'Madress3' => $_POST["Madress3"],
		'Code3' => $_POST["Code3"],
		'Type3' => $_POST["Type3"],
		'gpio3' => $_POST["gpio3"],
		'adress4' => $_POST["adress4"],
    	'Madress4' => $_POST["Madress4"],
		'Code4' => $_POST["Code4"],
		'Type4' => $_POST["Type4"],
		'gpio4' => $_POST["gpio4"]
    ); 


    // Переводим массив в JSON
echo json_encode($result);
#$fp = fopen('results.json', 'w');
#fwrite($fp, json_encode($result));
#fclose($fp);	
}

?>