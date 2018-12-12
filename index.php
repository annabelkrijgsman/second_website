<?php
    include 'includes/header.inc.php';
?>
        
        <article>
            
            <h2 align="center">Current Adverts</h2>
            
            <?php
            
                //SELECT ADVERTS FROM DATABASE                          
                $sql = "SELECT * FROM Advert ORDER BY date DESC" or die();
                    
                $result = mysqli_query($conn, $sql);
                $resultcheck = mysqli_num_rows($result);
                
                if ($resultcheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="articlebox">';
                        echo '<p><small>' . $row["Date"] . '</small></p>';
                        echo '<a href="readadvert.php?id=' . $row["advertID"] . '"><h3>' . $row["Title"] . '</a></h3>';
                        echo '<p><small>' . $row["Advert"] . '</small></p>';
                        echo '<p>&euro; ' . $row["Price"] . '</p>';
                        echo '</div><hr/>';
                    }
                }
                
            ?>
            <br/>
            
        </article>
        
<?php
    include 'includes/footer.inc.php';
?>