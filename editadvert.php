<?php
    include 'includes/header.inc.php';
    include 'includes/editadindb.inc.php';
    include 'includes/reqfields.inc.php';
    
if (!isset($_SESSION['userID'])) {
    header ("Location: login.php?error=unvalid");
}

?>
        
        <article>
            <div class="contactcolumn">
                <!--EDIT ADVERT-->
                <h2 align="center">Edit Advert</h2>
                <form method="post" id="contactblock">
                
                    <?php
                        
                        $editid = 0;
                    
                        if (isset($_GET["id"])) {
                            $editid = $_GET["id"];
                        }
                        
                        if ($editid > 0) {
                            $sql = "SELECT * FROM Advert WHERE advertID = " . $editid;
                            $result = mysqli_query($conn, $sql);
                            //var_dump($editid); die(); $editid is whatever it's supposed to be
                            $editadvert = mysqli_fetch_assoc($result); 
                            
                            $title = $editadvert["Title"];
                            $advert = $editadvert["Advert"];
                            $price = $editadvert["Price"];
                        }
                        
                    ?>
                
                    <!--IN TIME ADD AN IMAGE FORM-->
                    <label for="title">Advert Title</label><br/>
                    <input type="text" class="textfield" name="title" placeholder="Your advert title.." value="<?php echo $title;?>">
                    <span class="error"><b>* </b> <?php echo $titleErr;?></span><br/><br/>
                    <label for="article">Advert</label><br/>
                    <textarea class="textfield" name="advert" rows="10" cols="40" placeholder="Write your advert.."><?php echo $advert;?></textarea>
                    <span class="error"><b>* </b> <?php echo $advertErr;?></span><br/><br/>
                    <label for="price">Price</label><br/>
                    <input type="text" class="textfield" name="price" placeholder="Price.." value="<?php echo $price;?>">
                    <span class="error"><b>* </b> <?php echo $priceErr;?></span>
                                        
                    <span class="error">
                        <p><b>* required fields</b></p>
                    </span>
                    
                    <input type="submit" class= "button" value="Save"><br/>
                </form>
            </div>
            
        </article>
        
<?php
    include 'includes/editadindb.inc.php';
    include 'includes/footer.inc.php';
?>