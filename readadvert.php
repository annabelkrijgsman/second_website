<?php
    include 'includes/header.inc.php';
    include 'includes/bidindb.php';
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
                    
                    $advert = new Advert($id["advertID"]);
                    echo $advert->getHtml();
                }
                else {
                    echo "Advert not found.";
                }
                    
                    
            ?>
            
        </article>
        
<?php
    include 'includes/footer.inc.php';
?>