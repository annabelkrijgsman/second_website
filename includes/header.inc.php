<?php

session_start();

?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Marktplaats</title>
        <link rel="stylesheet" type="text/css" href="includes/marktplaats.css" />
        
        <?php
            require 'connection.inc.php';
            include 'classes/advert.class.php';
        ?>
        
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
        
    </head>
    
    <body>
        
        <header>
            <div class="logo">
                <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
                <h1 align="center">CYBER SALE</h1>
            </div>
            <br/>            
            <div class="navigation">
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        
                            <?php
                            
                                if (isset($_SESSION['userID'])) {
                                    echo '<li><a href="account.php" style="color:green">Account</a></li>';
                                }
                                else {
                                    echo '<li><a href="login.php">Login/Sign Up</a></li>';
                                }
                                
                               if (isset($_SESSION['userID'])) {
                                    //DOESN'T LOGOUT YET
                                    echo '<form method="post" id="contactblock" action="includes/logout.inc.php">';
                                    echo '<li><button type="submit" name="logoutsubmit" class="button">Log Out</button></li>';
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
            <br/>
        </header>