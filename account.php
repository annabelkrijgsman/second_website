<?php
    include 'header.php';
    //include 'footer';
    
//if (!isset($_SESSION['userID'])) {
//    header ("Location: login.php?error=unvalid");
//}
?>

<div class="row">
    
    <article>
        <h2 align="center">Your adverts</h2>
        
        <?php
        
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th class="pic">Image</th>';
            echo '<th class="title">Title</th>';
            echo '<th>Price</th>';
            echo '</tr>';
            echo '</thead>';
                
/*            $sql = "SELECT * FROM Advert ORDER BY date DESC";
                
            $result = mysqli_query($conn, $sql);
            foreach ($result as $row) {
                echo '<tbody>';
                echo '<tr>';
                echo '<td>' . $row["Image"] . '</td>';
                echo '<td>' . $row["Title"] . '</td>';
                echo '<td>' . $row["Price"] . '</td>';
                echo "<td><a class='button' href='account.php?id=" . $row["ID"] . "'>Edit</a>  <a class='button' href='account.php?id=" . $row["ID"] . "&delete=" . $row["ID"] . "'>Delete</a></td>";
                echo '</tr>';
                echo '</tbody>';                        
            }
                echo '</table>';*/
            
        ?>

    </article>
 
</div>