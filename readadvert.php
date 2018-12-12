<?php
    include 'includes/header.inc.php';
?>
        
        <article>
            
                        <?php
                                          
                    //READ THE ADVERT YOU CLICKED ON 
                    $readid = 0;
                
                    if (isset($_GET["id"])) {
                        $readid = $_GET["id"];
                    }
                    
                    if ($readid > 0) {
                        $sql = "SELECT * FROM Advert WHERE advertID = " . $readid;
                        $result = mysqli_query($conn, $sql);
                        $id = mysqli_fetch_assoc($result);
                        
                        $title = $id["Title"];
                        $advert = $id["Advert"];
                        $price = $id["Price"];
                        
                        foreach ($result as $row) {
                            echo '<div class="readarticle">';
                            echo '<p><small>' . $row["Date"] . '</small></p>';
                            echo '<h3>'. $row["Title"] . '</h3>';
                            echo '<p>' . $row["Advert"] . '</p>';
                            echo '<p>&euro; ' . $row["Price"] . '</p>';
                            echo '</div><br/>';
                        }
                    }

                    //COMMENT ONLY WHEN LOGGED IN WORKS - DOESN'T SEND IT TO DATABASE AND BACK INTO THE PAGE YET
                    if (isset($_SESSION['userID'])) {
                        echo '<form method="post" id="contactblock" action="">';
                        echo '<label for="uname">Bids</label><br/>';
                        echo '<input type="text" class="textfield" name="bids" placeholder="Place your bid"><br/>';
                        echo '<button type="submit" name="submitcomment" class="button">Submit</button>';
                        echo '</form>';
                    }
                    else {
                        echo '<h4 style="color:red">Please login to join the bids</h4>';
                    }
                    
            ?>
            
        </article>
        
<?php
    include 'includes/footer.inc.php';
?>