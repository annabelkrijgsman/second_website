<?php
    include 'includes/header.inc.php';
?>
        
        <article>
            
            <!--LOGIN FORM-->
            <h2 align="center">Login</h2>
            <form method="post" id="form" action="includes/login.inc.php">
                <label for="uname">Username</label><br/>
                <input type="text" class="textfield" name="email" placeholder="Username.."><br/>
                <label for="uname">Password</label><br/>
                <input type="password" class="textfield" name="pwd" placeholder="Username.."><br/>
                <button type="submit" name="loginsubmit" class="button">Login</button><br/>
                <a href="signup.php">Don't have an account yet?</a>
            </form>
            
        </article>
        
<?php
    include 'includes/footer.inc.php';
?>