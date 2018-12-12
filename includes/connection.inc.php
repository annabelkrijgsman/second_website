<?php

$host = "localhost";
$user_name = "root";
$pass_word = "";
$db = "Marktplaats";

// CREATE CONNECTION
$conn = mysqli_connect($host, $user_name, $pass_word, $db);

    // CHECK CONNECTION
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
?>