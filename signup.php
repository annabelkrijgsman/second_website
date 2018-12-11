<?php
    include 'includes/header.inc.php';
?>
        
        <article>
            
            <form method="post" id="contactblock" action="includes/signup.inc.php">
                <label for="uname">Username</label><br/>
                <input type="text" id="uname" class="textfield" name="uname" placeholder="Username.."><br/>
                <label for="email">Email</label><br/>
                <input type="text" id="email" class="textfield" name="email" placeholder="Email.."><br/>
                <label for="psw">Password</label><br/>
                <input type="password" id="pwd" class="textfield" name="pwd" placeholder="Password.."><br/>
                <label for="psw">Repeat password</label><br/>
                <input type="password" id="pwdrepeat" class="textfield" name="pwdrepeat" placeholder="Repeat password.."><br/>
                <button type="submit" name="signupsubmit" class="button">Sign Up</button>
            </form>
            
        </article>
        
<?php
    include 'includes/footer.inc.php';
?>>