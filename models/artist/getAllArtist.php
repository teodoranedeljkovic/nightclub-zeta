<?php
require "../../config/connection.php";

	header('Content-Type: application/json');

	$arr = execQuery("SELECT * FROM club.artist");
	if($arr){
		echo json_encode($arr,JSON_UNESCAPED_UNICODE);
		http_response_code(200);
	}
	else{
		http_response_code(500);
	}
 