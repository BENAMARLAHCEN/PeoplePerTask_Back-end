<?php $servername = "localhost";
 $userName = "root";
 $password = "";
 $database = "peoplepertask";
 
 // Create connection
 $con = mysqli_connect($servername, $userName, $password,$database);
 
 // Check connection
 if (mysqli_connect_error()) {
   die("Connection failed: " . mysqli_connect_error());
 }

 ?>