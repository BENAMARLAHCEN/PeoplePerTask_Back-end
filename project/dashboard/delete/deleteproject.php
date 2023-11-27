<?php
if (isset($_GET["id"])) {

$id=$_GET["id"];
include('../include/connect.php');

// read the row of this id
$sql = "DELETE FROM projects WHERE id = $id";
$Dproject = mysqli_query($con,$sql);
header('location:../projects.php');
exit;
}
?>