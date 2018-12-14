<?php
    include 'includes/header.inc.php';
    include 'includes/adindb.inc.php';
    include 'includes/reqfields.inc.php';


if (!isset($_SESSION['userID'])) {
    header ("Location: login.php?error=unvalid");
}

?>
        
        <article>
            
            <h2 align="center">Your Adverts</h2>
            
            <?php
            
                //EDIT AND DELETE ADVERTS
                echo '<table>';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Title</th>';
                echo '<th class="advert">Advert</th>';
                echo '<th>Price</th>';
                echo '<th>Action</th>';
                echo '</tr>';
                echo '</thead>';
                    
                $sql = "SELECT advertID FROM Advert WHERE UserID = " . $_SESSION["userID"] . " ORDER BY date DESC" or die();
                    
                $result = mysqli_query($conn, $sql);
                foreach ($result as $row) {
                    $advert = new Advert($row["advertID"]);
                    
                    echo '<tbody>';
                    echo '<tr>';
                    echo '<td>' . $advert->title . '</td>';
                    echo '<td class="advert">' . $advert->advert . '</td>';
                    echo '<td>&euro; ' . $advert->price . '</td>';
                    echo "<td><a class='button' href='editadvert.php?id=" . $advert->id . "'>Edit</a>  <a class='button' href='editadvert.php?id=" . $advert->id . "&delete=" . $advert->id . "'>Delete</a></td>";
                    echo '</tr>';
                    echo '</tbody>';                        
                }
                    echo '</table>';
                    
            ?>
            <br/>
            <div class="contactcolumn">
                
                <!--WRITE ADVERT-->
                <h2 align="center">Write Advert</h2>
                
                <label for="upload">Upload image</label><br/>
                <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
                    <input class="textfield" type="file" name="file"><br/>
                    <button type="submit" name="submit" class="button">Upload</button>
                 </form>
                <br/>
                <form method="post" id="form_one" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <!--IN TIME ADD AN IMAGE FORM-->
                    <label for="title">Advert Title</label><br/>
                    <input type="text" class="textfield" name="title" placeholder="Your advert title.." value="<?php echo $title;?>">
                    <span class="error"><b>* </b> <?php echo $titleErr;?></span><br/><br/>
                    <label for="article">Advert</label><br/>
                    <textarea class="textfield" name="advert" rows="10" cols="40" placeholder="Write your advert.."><?php echo $advertentie;?></textarea>
                    <span class="error"><b>* </b> <?php echo $advertErr;?></span><br/><br/>
                    <label for="price">Price</label><br/>
                    <input type="text" class="textfield" name="price" placeholder="Price.." value="<?php echo $price;?>">
                    <span class="error"><b>* </b> <?php echo $priceErr;?></span><br/>                                        
                    <span class="error">
                        <p><b>* required fields</b></p>
                    </span>
                    
                    <input type="submit" name="save" class= "button" value="Save"><br/>
                </form>
            </div>
            
        </article>
        
<?php
    include 'includes/footer.inc.php';
?>