<?php
    include 'includes/header.inc.php';
?>
        
        <article>
            
            <form method="post" id="contactblock" action="includes/login.inc.php">
                <label for="uname">Username</label><br/>
                <input type="text" class="textfield" name="email" placeholder="Username.."><br/>
                <label for="uname">Password</label><br/>
                <input type="password" class="textfield" name="pwd" placeholder="Username.."><br/>
                <button type="submit" name="loginsubmit" class="button">Login</button>
            </form>
            
        </article>
        
<?php
    include 'includes/footer.inc.php';
?>