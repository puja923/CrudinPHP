<?php
// $con = new mysqli ('localhost', 'root', 'password', 'crudoperations');

// if($con){
//     echo "Connection succesfull";
// }
// else{
//     die(mysqli_error($con));
// }

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "crudoperations");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

if($connect){
       echo "Connection succesfull";
     }
     else{
         die(mysqli_error($con));
     }

?>