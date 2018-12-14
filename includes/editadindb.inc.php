<?php

if (isset($_GET["id"])) {
	$editid = $_GET["id"];
}

//DELETE ADVERT
if(isset($_GET["delete"])) {
	$del = $_GET["delete"] * 1;
	if ($del > 0) {
		$sql = "DELETE FROM Advert WHERE advertID = " . $del;
		mysqli_query($conn, $sql);
		echo "<script>document.location.href='account.php?deladvert=yes';</script>"; die();
	}
}

//EDITED ADVERT IN DATABASE
$title = "";
$advert = "";
$price = "";
$date = "";
	
if ($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST["title"]) && !empty($_POST["advert"]) && !empty($_POST["price"])) {

	$title = $_POST["title"];
	$advert = $_POST["advert"];
	$price = $_POST["price"];
	$date = date("d-m-Y, H:i");
	
	$sql = "UPDATE Advert SET Title = '$title', Advert = '$advert', Price = '$price' WHERE advertID = " . $editid;
	mysqli_query($conn, $sql);
	//var_dump($editid); die; //$editid is empty
	
	echo "<script>document.location.href='account.php?editadindb=yes&id=$editid';</script>"; die(); //notice
}

?>