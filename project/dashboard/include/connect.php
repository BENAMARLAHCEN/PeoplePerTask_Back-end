<?php $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "peoplepertask";
 
 // Create connection
 $con = mysqli_connect($servername, $username, $password,$database);
 
 // Check connection
 if (mysqli_connect_error()) {
   die("Connection failed: " . mysqli_connect_error());
 }
 ?>