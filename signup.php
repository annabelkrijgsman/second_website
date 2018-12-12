<?php
    include 'includes/header.inc.php';
?>
        
        <article>
            
            <?php
            
                //SIGN UP ERRORS
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p style="color:red">Please fill in all fields</p>';
                    }
                    elseif ($_GET["error"] == "invalidmailuname") {
                        echo '<p style="color:red">Invalid username and email</p>';
                    }
                    elseif ($_GET["error"] == "invalidmail") {
                        echo '<p style="color:red">Invalid email</p>';
                    }
                    elseif ($_GET["error"] == "invaliduname") {
                        echo '<p style="color:red">Invalid username</p>';
                    }
                    elseif ($_GET["error"] == "passwordcheck") {
                        echo '<p style="color:red">Your passwords don\'t match</p>';
                    }
                    elseif ($_GET["error"] == "usertaken") {
                        echo '<p style="color:red">Username is already taken</p>';
                    }
                }
                    
            ?>
            
            <!--SIGN UP FORM-->
            <h2 align="center">Sign Up</h2>
            <form method="post" id="form" action="includes/signup.inc.php">
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
?>