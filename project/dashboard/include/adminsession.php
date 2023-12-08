<?php
	session_start();
	include('include/connect.php');
			
	if(isset($_SESSION['valid']))
	{
        if ($_SESSION['role'] == "admin") {
        
		$admin_id = $_SESSION['id'];
		$query="SELECT * FROM users WHERE ID_user='$admin_id'";
		$data=mysqli_query($con,$query);
		if($data)
		{
			$admin=mysqli_fetch_assoc($data);
			//print_r($result);  // to print all data fetch from admin table
		}
		else
		{
			echo " Something went wrong!";
		}
    }else if($_SESSION['role'] == "freelace"){
		header("location:profile.php");
	}else{
		header("location:../index.php");
	}
	}
	else    
	{
		header("location:../index.php");
	}
?>