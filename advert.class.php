<?php

//require_once 'includes/connection.inc.php';

class Advert {
    public $id;
    public $title;
    public $advert;
    public $price;
    public $html;
    public $userid;
    
    public function __construct($advertID) {
        $sql = "SELECT * FROM Advert WHERE advertID = " . $advertID;
        $result = mysqli_query(Database::getConn(), $sql);
        $row = mysqli_fetch_assoc($result);
        
        $this->id = $row["advertID"];
        $this->title = $row["Title"];
        $this->advert = $row["Advert"];
        $this->price = $row["Price"];
        $this->userid = $row["UserID"];
        
        $adverthtml = '<div class="readarticle">
        <p><small>' . $row["Date"] . '</small></p>
        <h3>'. $row["Title"] . '</h3>
        <p>' . $row["Advert"] . '</p>
        <p>&euro; ' . $row["Price"] . '</p>
        </div><br/>';
        
        $adverthtml .= $this->getBids();
        
        if (isset($_SESSION['userID'])) {
            $adverthtml .= '<br/><form method="post" id="contactblock">
            <label for="uname">Place your bid</label><br/>
            &euro; <input type="text" class="textfield" name="bids" placeholder="Place your bid"><br/>
            <button type="submit" name="submitbid" class="button">Submit</button>
            </form>';
        }
        else {
            $adverthtml .= '<h4 style="color:red">Please login to join the bids</h4>';
        }
        
        $this->html = $adverthtml;
    }
    
    public function getHtml() {
        return $this->html;
    }
    
    public function getBids() {
        $sql = "SELECT * FROM Bids WHERE advertID = " . $this->id . " ORDER BY Bids DESC";
        $result = mysqli_query(Database::getConn(), $sql);
        
        $bidHtml = '<h3>Bids</h3>';
        $bidHtml .= '<ul class="bidlist">';
        while ($row = mysqli_fetch_assoc($result)) {
            $bidHtml .= '<li>&euro; ' . $row["Bids"] . '</li>';
        }
        $bidHtml .= '</u>';
        
        return $bidHtml;
    }
}
?>