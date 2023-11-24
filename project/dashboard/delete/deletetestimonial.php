<?php
if (isset($_GET["id"])) {

$id=$_GET["id"];
include('../include/connect.php');

// read the row of this id
$sql = "DELETE FROM testimonials WHERE id = $id";
$tes = mysqli_query($con,$sql);
header('location:../testimonials.php');
exit;
}
?>