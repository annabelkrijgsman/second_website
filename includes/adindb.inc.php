<?php

//ADVERT INTO DATABASE
$title = "";
$advert = "";
$price = "";
$date = "";
	
if ($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST["title"]) && !empty($_POST["advert"]) && !empty($_POST["price"])) {
		
	$title = $_POST["title"];
	$advert = $_POST["advert"];
	$price = $_POST["price"];
	$date = date("d-m-Y, H:i");
	
	$sql = "INSERT INTO Advert (Title, Advert, Price, Date) VALUES ('$title', '$advert', '$price', '$date')";
	mysqli_query($conn, $sql);
	
	//CATEGORIES INTO DATABASE
	//$blogID = mysqli_insert_id($conn);
	//
	//$cname = "";
	//
	//for ($i=0; $i<count($catname); $i++) {
	//	$sql = "INSERT INTO Blogposts_Categories (BlogpostID, CategoryID) VALUES ($blogID, $catname[$i])";
	//	mysqli_query($conn, $sql);
	//}
	
	echo "<script>document.location.href='account.php?adindb=yes';</script>"; die();
	
}

?>