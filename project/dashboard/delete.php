<?php
if (isset($_GET["id"])) {

$id=$_GET["id"];
include('include/connect.php');

// read the row of this id
$sql = "DELETE FROM users WHERE ID_user = $id";
$user = mysqli_query($con,$sql);
header('location:agents.php');
exit;
}
?>