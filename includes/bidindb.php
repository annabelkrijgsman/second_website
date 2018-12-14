<?php

//ADVERT INTO DATABASE
$bid = "";
$aid = "";
            
if (isset($_GET["id"])) {
	$aid = $_GET["id"];
}
	
if (isset($_POST['submitbid'])) {
	
	$sql = "SELECT MAX(Bids) AS maxbid FROM Bids WHERE advertID = " . $aid;
	$result = mysqli_query(Database::getConn(), $sql);
	$maxbid = mysqli_fetch_assoc($result);
	
	$bid = $_POST['bids'] *1;
	
	if ($bid > $maxbid["maxbid"]) {
		$sql = "INSERT INTO Bids (Bids, advertID, userID) VALUES ('$bid', " . $aid . ", " . $_SESSION["userID"] . ")";
		mysqli_query($conn, $sql);
	
		echo "<script>document.location.href='readadvert.php?bidsubmit=yes&id=" . $aid . "';</script>"; die();
	}
	else {
		echo '<article><p class="lowbid">Uw bod is te laag.</p></article>';
	}
	
	
}

?>