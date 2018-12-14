<?php
session_start();

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

//LOGIN    
if (isset($_POST['loginsubmit'])) {
    
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    
    if (empty($email) || empty($pwd)){
        header("Location: ../login.php?error=emptyfields");
        exit();        
    }
    else {
        $sql = "SELECT * FROM Users WHERE Username=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?error=sqlerror");
        exit();            
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdcheck = password_verify($pwd, $row['Password']);
                if ($pwdcheck == false) {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();                        
                }
                elseif ($pwdcheck == true) {
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['userUsername'] = $row['Username'];
                    //$_SESSION['userGroup'] = $row['GroupID'];
                    header("Location: ../account.php?login=succes");
                    exit();
                }
                else {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();                     
                }
            }
            else {
                header("Location: ../login.php?error=nouser");
                exit();                
            }
            
        }
    }
    
}   
    else {
        header("Location: login.php");
        exit();
    }
    
?>