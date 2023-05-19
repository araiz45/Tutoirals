<!-- 0 - this is Intialization of php and this is a comment  -->



<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <h1><?php //echo "Hello, world!"; /*This is araiz and this is araiz and this is from Pakistan and karahi korangi no 4 zaman town number is +9203032827831*/?></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html> -->




<?php 
// 1 - **** Introduction to Variable ****

/*
$name = "Injir"; // varibale are case sensitive;
$income = 200; // Keyword are not case sensitive; like echo
$float = 34.232;

echo "This is $name and <br> his income is $income<br>"; 
echo "$name is real monster and <br> his float is $float.<br>";
*/

?>


<?php
// 2 - **** Rules for creating php variable ****


// 1. php variable should start with $;
// 2. can not start with a number;
// 3. must start with string or an underscore;
// 4. variable contain alphanumeric characher or underscore;

// $_this = "araiz";
// echo "this is $_this"

?>
<?php
// 3 - **** Types of datatypes ****


// 1. strings
// 2. Integer
// 3. Float
// 4. Boolean
// 5. Object
// 6. Array
// 7. Null

/*
// String
$name = 'araiz';
$friend = 'azish';

echo "$name is the friend of $friend.";
echo "<br>";

// Integer

$income = 232;
$debts = -123;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

$income = 232.333;
$debts = -123.12121;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";



$x = true;
$y = false;

echo var_dump($x);
echo "<br>";
echo var_dump($y);
echo "<br>";




$arry = ['mango', 'banana', 'stewberry', 'pineapple'];
echo var_dump ($arry);
echo "<br>";
echo $arry[0] ;
echo "<br>";
echo $arry[1] ;
echo "<br>";
echo $arry[2] ;
echo "<br>";
echo $arry[3] ;
echo "<br>";
*/


?>



<?php 
// 4 - **** String Functions ****
/*
$name = "Araiz Beast ";
echo $name;
echo "<br>";
echo strlen($name);
echo "<br>";
echo "this is my string length: " . strlen($name);
echo "<br>";
echo "string in words is: " . str_word_count($name);
echo "<br>";
echo "this is my reverse string: " . strrev($name);
echo "<br>";
echo "this is my Finding of word in string: " . strpos($name, "Beast");
echo "<br>";
echo "this is my replacement of word in string: " . str_replace("Araiz","Injir", $name);
echo "<br>";
echo "this is my repeated string: " . str_repeat($name, 3);
echo "<pre>";
echo rtrim("            $name is a good boy              ");
echo "<br>";
echo ltrim("            $name is a good boy              ");
echo "</pre>";*/

?>


<?php
// 5 - Operators in PHP
$x = 4;
$y = 3;

// Airthemtical Operator

/*
echo "The sum of $x and $y is " . $x + $y;
echo "<br>";
echo "The subtraction of $x and $y is " . $x - $y;
echo "<br>";
echo "The multiplication of $x and $y is " . $x * $y;
echo "<br>";
echo "The division of $x and $y is " . $x / $y;
echo "<br>";
echo "The Modulus of $x and $y is " . $x % $y;
echo "<br>";
echo "The Exponential of $x and $y is " . $x ** $y;

*/

// Assignment Operator
// $a = $x;
// echo "The value of a is " . $a . "<br>";
// $a = $x;
// $a += 5;
// echo "The value of a is " . $a . "<br>";
// $a -= 5;
// echo "The value of a is " . $a . "<br>";
// $a *= 5;
// echo "The value of a is " . $a . "<br>";
// $a /= 5;
// echo "The value of a is " . $a . "<br>";
// $a %= 4;
// echo "The value of a is " . $a . "<br>";
// $a **= 5;
// echo "The value of a is " . $a . "<br>";
$a = 5;
$b = 58;

// echo "a == b is ";
// echo var_dump($a == $b);
// echo "<br>";
// echo "a < b is ";
// echo var_dump($a < $b);
// echo "<br>";
// echo "a > b is ";
// echo var_dump($a > $b);
// echo "<br>";
// echo "a <> b is ";
// echo var_dump($a <> $b);
// echo "<br>";
// echo "a <= b is ";
// echo var_dump($a <= $b);
// echo "<br>";
// echo "a >= b is ";
// echo var_dump($a >= $b);
// echo "<br>";
 

$t = false;
$f = true;


// echo "t and f is ";
// echo var_dump($t and $f);
// echo "<br>";
// echo "t and f is ";
// echo var_dump($t or $f);
// echo "<br>";
// echo "t && f is ";
// echo var_dump($t && $f);
// echo "<br>";
// echo "t || f is ";
// echo var_dump($t || $f);
// echo "<br>";
// echo "!t is ";
// echo var_dump(!$t );
// echo "<br>";
?>



<?php 
// 6 - If-Else Conditional Operator

$a = 4;
// $b = 3;

// if($a < $b){
//   echo "b is greater than a";
// }

// else{
//   echo " a is greater than b";
// }

// if($a > 18){
//   echo "You can drink water and chai with alcohol.";
// }
// elseif($a > 13){
//   echo "you can drink chai and water . No alcohol for you.";
// }
// else{
//   echo "You can drink water only.";
// }

// $a = 1;
// if($a > 18 and $a < 65){
//   echo "You can Drive a car";
// }
// elseif($a > 10){
//   echo "You can ride on a bike";
// }

// elseif($a > 5){
//   echo "You can ride on bikecycle";
// }
// else{
//   echo "Invalid Age";
// }

?>




<?php 

// 7 - Switch Case in php

// $age = 12;
// switch($age){
//     case 12:
//       echo "you are 12 years old<br>";
//       break;

//     case 25:
//       echo "you are 25 years old <br>";
//       break;

//     case 45:
//       echo "you are 45 years old <br>";
//       break;

//     case 50:
//       echo "you are 50 years old <br>";
//       break;
//     default:
//       echo "Age achi nahi hai <br>";
//       break;
// }



?>



<?php 
// While Loops


// $i = 0;
// while($i < 5){
//   echo $i + 1;
//   echo "<br>";
//   $i++;
// }

// $i = 1;
// while ($i <= 10){
//   echo "5 X ";
//   echo $i . " = "; 
//   echo $i * 5;
//   echo "<br>";
//   $i++;
// }


// $i = 0;
// $x = 9;
// while($i <5000 && $x < 60){
//   echo $i . " - " . $x;
//   echo "<br>";
//   $i+=200;
//   $x+=3;
// }



?>



<?php 

# For Loops in php

#for($x = 0; $x<3; $x++){
 # for($y= 0; $y<3; $y++){
  #  echo $x . " " . $y;
    
  #}
  #echo "<br>";
#}

?>




<?php
// Do While loop
// $x = 5;


// do{
//   echo "hola";
//   echo "<br>";
//   $x++;

// }while($x<40)

?>

<?php 

// echo "For-Each Loop <br>";
// $arr = ["Monkey", "Zebra", "Lion", "Eagle", "Leopard", "Rehio"];
// // for ($i=0; $i < count($arr) ; $i++) { 
// //    echo $arr[$i];
// //    echo "<br>";
// // }
// foreach ($arr as $value) {
//   echo $value;
//   echo "<br>";
// }
?>



<?php 

// echo "<h1>Function in php</h1><br>";


// function marksProcess($sumMarks){
//   $sum = 0;
//   foreach ($sumMarks as $value) {
//     $sum += $value;
//   }

//   return $sum;
// }


// function avgProcess($sumMarks){
//   $sum = 0;
//   $i = 1;
//   foreach ($sumMarks as $value) {
//     $sum += $value;
//     $i++;

//   }

//   return $sum/$i;
// }
// function perProcess($sumMarks){
//   $sum = 0;
//   foreach ($sumMarks as $value) {
//     $sum += $value;

//   }

//   return ($sum/500)*100;
// }



// $Umar = [88, 55, 99, 55, 100];
// $UmarMarks = marksProcess($Umar);
// $UmarAvgMarks = avgProcess($Umar);
// $UmarperMarks = avgProcess($Umar);
// echo "Number of Umar in Final Term is <code>$UmarMarks/500</code> and the avg marks is $UmarAvgMarks and their percentage is $UmarperMarks<br>";

// $Pataka = [92, 98, 99, 96, 94];
// $PatakaMarks = marksProcess($Pataka);
// $PatakaAvgMarks = avgProcess($Pataka);
// $PatakaperMarks = perProcess($Pataka);
// echo "Number of Pataka in Final Term is <code>$PatakaMarks/500</code> and the avg marks is $PatakaAvgMarks and their percentage is $PatakaperMarks<br>";

?>



<?php 

// date_default_timezone_set('Asia/Karachi');
// echo("<br>");
// $d = date('H:m:s , F: j : Y');
// echo $d;
// // Prints something like: Monday
// echo date("l");
// echo("<br>");

// // Prints something like: Monday 8th of August 2005 03:12:46 PM

// echo("<br>");


?>



<?php 

// $arr = array("tinu", "pingu", "Chingu", "Ingu");
// echo $arr[3];



// $arr = array (
// "Aaraiz" => "Daal",
// "Azish" => "Biryani",
// "Wasay" => "Chicken Karhai",
// "Yasir" => "Tikka Boti", 
// 4 => "Pangore"
// );


// foreach ($arr as $key => $value) {
//   echo "The Favorite Food of $key is $value <br>";
// }
?>


<?php 

// $multid = [
//   [2, 3, 4, 5],
//   [3, 5, 2, 2],
//   [1, 4, 6, 7]
// ];

// echo $multid[1][3];
// echo var_dump($multid)

// for ($i=0; $i < count($multid); $i++) { 
//     echo var_dump($multid[$i]);
//     echo "<br>";
// }
// for ($i=0; $i < count($multid); $i++) { 
//   for ($l=0; $l < count($multid[$i]); $l++) { 
//     echo $multid[$i][$l];
//     echo " ";
//   }
//   echo"<br>";
// }


// $multid = [
//   [
//     [2, 4, 5, 3],
//     [3, 5, 3, 5],
//     [2, 6, 7, 8],
//   ],
//   [
//     [3, 5, 2, 6],
//     [2, 4, 5, 7],
//     [1, 3, 4, 8],
//   ],
//   [
//     [3, 5, 2, 5],
//     [7, 3, 4, 6],
//     [7, 3, 4, 6],
//   ]
// ];

// for ($i=0; $i < count($multid); $i++) { 
//   for ($j=0; $j < count($multid[$i]); $j++) { 
//     for ($k=0; $k < count($multid[$i][$j]); $k++) { 
//       echo $multid [$i][$j][$k];
//       echo " ";
//     }
//     echo "<br>";
//   }
//   echo "<br>";
// }

?>




<?php 


// $a = 34;
// $b = 23;


// function tina(){

//   global $a, $b;
//   $a = 1000;
//   $b = 4000;

//   echo "The value of a is $a and the value of b is $b";
// }

// tina();
// echo "<br>";
// echo $a;



?>


<!-- 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>







  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<?php






// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//   $email = $_POST["email"];
//   $pass = $_POST["pass"];
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Holy guacamole!</strong> email is ' . $email . " and password is " . $pass . '
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';

// }
// else{
//   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//   <strong>Holy guacamole!</strong> You should check in on some of those fields below.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';
// }
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//   $email = $_POST['email'];
//   $password = $_POST['pass'];
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Success!</strong> Your email ' . $email.' and password '. $password.' has been submitted successfully!
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">×</span>
//   </button>
// </div>';
// }



?>







<div class="container mt12">
  <form action="/pingu/index.php" method="POST" >
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="pass" name="pass">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html> -->


<?php 

// $servername = 'localhost';
// $username = "root";
// $password = '';

// $conn = mysqli_connect($servername, $username, $password);
// if(!$conn){
//   die("Unable to connect due to : ". mysqli_connect_error());
// }
// else{
//   echo "Connection Successfull";

// }




?>



<?php

// $servername = 'localhost';
// $username = "root";
// $password = '';



// $conn = mysqli_connect($servername, $username, $password);


// $sql = 'CREATE DATABASE dbYasir3';
// $result = mysqli_query($conn ,$sql);
// if(!$conn){
//   die("Unable to connect due to : ". mysqli_connect_error());
// }
// else{
//   echo "Connection Successfull";
  
// }
// echo "The Result is";
// echo "<br>";
// echo var_dump($result);
// echo "<br>";
// if($result){
//   echo "Database is created sucessfully .";

// }
// else{
//   echo "Database is not created successfully due to this error ". mysqli_error($conn);
// }



?>
<?php

// $servername = 'localhost';
// $username = "root";
// $password = '';
// $database = 'yasir';

// $conn = mysqli_connect($servername, $username, $password, $database);

// if(!$conn){
//   die("Unable to connect due to : ". mysqli_connect_error());
// }
// else{
//   echo "Connection Successfull";
  
// }

// $sql = 'CREATE TABLE `example` (`Sno` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(20) NOT NULL , `Nationality` VARCHAR(15) NOT NULL , `Date Of Join` DATE NOT NULL , PRIMARY KEY (`Sno`))';

// $result = mysqli_query($conn ,$sql);


// echo "The Result is";
// echo "<br>";
// echo var_dump($result);
// echo "<br>";
// if($result){
//   echo "Database is created sucessfully .";

// }
// else{
//   echo "Database is not created successfully due to this error ". mysqli_error($conn);
// }

?>




<?php 


// $servername = 'localhost';
// $username = "root";
// $password = '';
// $database = 'yasir';

// $conn = mysqli_connect($servername, $username, $password, $database);

// if(!$conn){
//   die("Unable to connect due to : ". mysqli_connect_error());
// }
// else{
//   echo "Connection Successfull";
  
// }
// $name = "Tanvir";
// $national = "Russian";
// $doj = '1532-04-03';


// $sql = "INSERT INTO `example` (`Name`, `Nationality`, `Date Of Join`) VALUES ('$name', '$national', '$doj')";
// $result = mysqli_query($conn ,$sql);


// echo "The Result is";
// echo "<br>";
// echo var_dump($result);
// echo "<br>";
// if($result){
//   echo "Record has been inserted sucessfully sucessfully .";

// }
// else{
//   echo "Record has not been able to inserted due to this error ". mysqli_error($conn);
// }

?>











<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>







  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->



<?php


  // if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //     $name = $_POST["name"];
  //     $email = $_POST["email"];
  //     $desc = $_POST["desc"];
    
  //     $servername = 'localhost';
  //     $username = "root";
  //     $password = '';
  //     $database = 'contacts';

  //     $conn = mysqli_connect($servername, $username, $password, $database);

  //     if(!$conn){
  //       die("Unable to connect due to : ". mysqli_connect_error());
  //     }
  //     else{

  //   }

  //   $sql = "INSERT INTO `contactnow` (`name`, `email`, `concern`, `datenow`) VALUES ('$name', '$email', '$desc', current_timestamp())";
  //   $result = mysqli_query($conn ,$sql);

  //   if($result){
  //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  //     <strong>Sucess</strong> Record has been inserted Successfully 
  //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  //     </div>';

  //   }
  //   else{
  //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  //     <strong>Error!</strong> Your Record can not inserted successfully due to this error'. mysqli_error($conn) . ' 
  //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  //     </div>';
  //   }
  // }
?>





<!-- 

<div class="container mt12">
  <form action="/pingu/index.php" method="POST" >
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
      <label for="desc" class="form-label">Enter Your Concer</label>
      <textarea name="desc" class="form-control" id="decs" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html> -->




<?php 

// $servername = 'localhost';
// $username = "root";
// $password = '';
// $database = 'contacts';

// $conn = mysqli_connect($servername, $username, $password, $database);

// if(!$conn){
//   die("Unable to connect due to : ". mysqli_connect_error());
// }
// else{

// }

// $sql = "SELECT * FROM `contactnow`";
// $result = mysqli_query($conn ,$sql);


// $num = mysqli_num_rows($result);

// echo $num;
// echo "<br>";

// if($num > 0){
//   // $rows = mysqli_fetch_assoc($result);
//   // echo var_dump($rows);
//   // echo "<br>";


//   while($rows = mysqli_fetch_assoc($result)){
//    echo $rows['sno'] . " , A person name ". $rows['name'] . " with email " . $rows['email'] . " have a concern with you is (" . $rows['concern'] . ") on time this " . $rows['datenow'];
//     echo "<br>";
  
//   }
// }


?>




<?php 

// $servername = 'localhost';
// $username = "root";
// $password = '';
// $database = 'contacts';

// $conn = mysqli_connect($servername, $username, $password, $database);

// if(!$conn){
//   die("Unable to connect due to : ". mysqli_connect_error());
// }
// else{

// }

// $sql = "SELECT * FROM `contactnow` WHERE `email`='araizzahid45@gmail.com';";
// $result = mysqli_query($conn ,$sql);


// $num = mysqli_num_rows($result);

// echo $num;
// echo "<br>";

// if($num > 0){
//   $no = 1;
//   while($rows = mysqli_fetch_assoc($result)){
//    echo $no . " , A person name ". $rows['name'] . " with email " . $rows['email'] . " have a concern with you is (" . $rows['concern'] . ") on time this " . $rows['datenow'];
//     echo "<br>";
//     $no = $no + 1;
  
//   }
// }


// $sql = "UPDATE `contactnow` SET `name` = 'Aaraiz' WHERE `email` = 'araizzahid45@gmail.com'";
// $result = mysqli_query($conn ,$sql);

// $aff = mysqli_affected_rows($conn);


// echo "Total Number of Rows affected is $aff <br>";
// if($result){
//   echo "we updated the rows sucessfully!";
// }
// else{
//   echo "WE could not update the rows successfully";
// }

?>



<?php 

// $servername = 'localhost';
// $username = "root";
// $password = '';
// $database = 'contacts';

// $conn = mysqli_connect($servername, $username, $password, $database);

// if(!$conn){
//   die("Unable to connect due to : ". mysqli_connect_error());
// }
// else{

// }



// $sql = 'DELETE FROM `contactnow` WHERE `email` = "araizzahid45@gmail.com"';
// $result = mysqli_query($conn ,$sql);
// if($result){
//   echo "We Deleted Sucessfully";
// }

// else{
//   echo "we can not delete sucessfully";
// }
?>


<?php 

// Include and require 
// require '_dbConnect.php';


// $sql = "SELECT * FROM `contactnow`";
// $result = mysqli_query($conn ,$sql);


// $num = mysqli_num_rows($result);

// echo $num;
// echo "<br>";

// if($num > 0){
//   $no = 1;
//   while($rows = mysqli_fetch_assoc($result)){
//    echo $no . " , A person name ". $rows['name'] . " with email " . $rows['email'] . " have a concern with you is (" . $rows['concern'] . ") on time this " . $rows['datenow'];
//     echo "<br>";
//     $no = $no + 1;
  
//   }
// }
?>



<?php 

// $a = readfile("tingu.txt");
// readfile("tingu.txt");
// readfile("sample.html");


?>


<?php 

// $fptr = fopen("tingu.txt", "r");

// if(!$fptr){
//   die("Unable to continue");
// }

// $content = fread($fptr, filesize("tingu.txt"));
// echo $content;
// fclose($fptr);
?>


<?php 

// $fptr = fopen("tingu.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);
// echo var_dump(fgets($fptr));

// while($a = fgets($fptr)){
//   echo $a;
// }
// echo "End of the file has been reached";



// echo fgetc($fptr);


// while($a = fgetc($fptr)){
//   echo $a;
//   // break;
// }
// Write a program which reads content of a file untill. has been encounterd
// while($a = fgetc($fptr)){
//   echo $a;
//   if($a == "."){
//     break;
//   }
// }

// fclose($fptr);
?>


<?php 
// $fptr = fopen("tingu2.txt", "a");
// // fwrite($fptr, "This is the best file on this planet . please don't argue with me on this one.\n");
// // fwrite($fptr, "This is another content\n");
// // fwrite($fptr, "This is one another content\n");

// // fclose($fptr);
// fwrite($fptr, "This is the best file on this planet . please don't argue with me on this one apended.\n");
// fclose($fptr);






?>

<?php 

// $cookie_name = "user";
// $cookie_value = "John Doe";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// if(!isset($_COOKIE[$cookie_name])) {
//   echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
//   echo "Cookie '" . $cookie_name . "' is set!<br>";
//   echo "Value is: " . $_COOKIE[$cookie_name];
// }

?>



<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>