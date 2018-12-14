<?php

//REQUIRED FIELDS
$titleErr = $advertErr = $priceErr = "";
$title = $advertentie = $price = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["title"])) {
			$titleErr = "Title is required";
	}
    	
	if (empty($_POST["advert"])) {
			$advertErr = "Advert is required";
	}

	if (empty($_POST["price"])) {
			$priceErr = "Price is required";
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
	}
	
?>