<?php
    include 'header.php';
    //include 'footer';
?>

<div class="row">
    
    <article>
        
       <?php 
        
            //LOGIN
            //else {
                echo '<h2 align="center">Login</h2>';
                echo '<form method="post" id="contactblock" action="includes/login.inc.php">';
                echo '<label for="uname">Username</label><br/>';
                echo '<input type="text" class="textfield" name="email" placeholder="Username.."><br/>';    
                echo '<label for="psw">Password</label><br/>';        
                echo '<input type="password" class="textfield" name="pwd" placeholder="Password.."><br/>';
                echo '<button type="submit" name="loginsubmit" class="button">Login</button><br/>';
                echo '<a href="signup.php">Not a member yet?</a>';
                echo '</form>';
            //}
        
        ?>

    </article>
 
</div>