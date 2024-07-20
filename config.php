<?php

 $servername ="localhost";
 $username ="u790430628_Miwallet";
 $password ="Miwallet2020";
 $dbname ="u790430628_Miwallet";
//connection

 $conn=mysqli_connect($servername, $username, $password, $dbname);
//check connection 
if (!$conn){
die("connection failed" . mysqli_connect_error());
}
?>