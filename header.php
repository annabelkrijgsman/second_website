<?php

session_start();

?>

<!DOCTYPE html>
<html>
	
    <head>
        <title>Marktplaats</title>
        <link rel="stylesheet" type="text/css" href="marktplaats.css" />
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        
        <?php
            include 'connection.php'
        ?>
    </head>
    
    <body>
    
        <header>
            
            <div class="navigation">
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <?php
                            if (isset($_SESSION['userID'])) {
                                echo '<li><a href="editadvert.php">Place advert</a></li>';
                            }
                            else {
                                echo '<li><a href="login.php">Login/Sign Up</a></li>';
                            }
                            
                            if (isset($_SESSION['userID'])) {
                                echo '<form method="post" id="contactblock" action="includes/logout.inc.php">';
                                echo '<button type="submit" name="logoutsubmit" class="button">Log Out</button>';
                                echo '</form>';
                            }
                            
                        ?>
                    </ul>
            </div>
            <div class="search">
                    <ul class="nav">
                        <!--SEARCHFIELD + CATEGORIES-->
                    </ul>
            </div>
            
        </header>
        <br/>