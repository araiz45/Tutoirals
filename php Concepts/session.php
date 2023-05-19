<?php 
// verify the user login info
session_start();

if(isset($_SESSION['username'])){
    echo "Welcome " . $_SESSION['username'];
    echo "<br> Your Favorite Category is " .  $_SESSION['FavCat'];
    echo "<br>";

}
else{
    echo "Please Login to continue";
}

?>