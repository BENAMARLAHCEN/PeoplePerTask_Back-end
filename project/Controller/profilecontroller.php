<?php
include 'dashboard/include/connect.php';

if(!isset($_GET['un'])){
    echo "<script> alert('this profile is not exist') </script>";
    header('location: index.php');
}

$sql = "SELECT * FROM users left join ville on users.City = ville.id left join region on region.id = ville.region WHERE user_name = '$_GET[un]' AND ROLE = 'freelance'";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) == 0) {
    echo "<script> alert('this profile is not exist') </script>";
    header('location: index.php');
}
$user = mysqli_fetch_assoc($result);

$sqli = "select skills.id as skills_id , name from freelance_skills left join skills on skills.id = freelance_skills.skills_id where freelance_skills.freelance_id = $user[ID_user]";
$result2 = mysqli_query($con,$sqli);
$skils = mysqli_fetch_assoc($result2);

$sql2 = "SELECT * FROM projects left join categories on projects.id_categorie =categories.id WHERE freelance_id =  $user[ID_user]";
$result3 = mysqli_query($con,$sql2);
// $project = mysqli_fetch_assoc($result3);

?>