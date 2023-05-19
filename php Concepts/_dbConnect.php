<?php 

$servername = 'localhost';
$username = "root";
$password = '';
$database = 'contacts';

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die("Unable to connect due to : ". mysqli_connect_error());
}
else{
    echo "Connection successful";
}



?>