<?php
	session_start();
	include('include/connect.php');
			
	if(isset($_SESSION['valid']))
	{
        if ($_SESSION['role'] == "freelance") {
        
		$freelance = $_SESSION['id'];
		$query="SELECT * FROM users WHERE ID_user='$freelance'";
		$data=mysqli_query($con,$query);
		if($data)
		{
			$freelance=mysqli_fetch_assoc($data);
		}
		else
		{
			echo " Something went wrong!";
		}
    }else{
		header("location:../index.php");
	}
	}
	else    
	{
		header("location:../index.php");
	}
?>