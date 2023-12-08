<?php
session_start();
if (isset($_SESSION['valid']) && $_SESSION['role'] === 'user') {
    $id=$_SESSION['id'];
}else {
    header("location:../index.php");
}
?>