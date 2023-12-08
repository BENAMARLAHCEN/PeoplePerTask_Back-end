<?php
session_start();
if (isset($_SESSION['valid'])) {
    if ($_SESSION['valid'] == 'admin') {
        header("location:dashboard/dashboard.php");
    }
    header("location:index.php");
}
require 'dashboard/include/connect.php';
$email = "";
$username = "";
$errors = array();
$errorsin = array();

// function test_input($data)
// {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
if (isset($_POST['signup'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $usertype = mysqli_real_escape_string($con, $_POST['usertype']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email address.";
    }
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }
    $verify_email = mysqli_query($con, "SELECT email FROM users WHERE email = '$email'");
    $verify_username = mysqli_query($con, "SELECT user_name FROM users WHERE user_name = '$username'");
    if (mysqli_num_rows($verify_username) != 0) {
        $errors['username'] = "username that you have entered is already exist!";
    }
    if (mysqli_num_rows($verify_email) != 0) {
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if ($usertype !== 'user' && $usertype !== 'freelance') {
        $errors['usertype'] = "your usertype chois have in problem, Please verify your entry";
    }
    if (count($errors) === 0) {
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        mysqli_query($con, "INSERT INTO users(user_name,email,birthday,userPassword,role) values
    ('$username','$email','$birthday','$encpass','$usertype')") or die("Error Occured");
    }

}

    
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
//if user click login button
if (isset($_POST['login'])) {
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($con, $check_email);
    
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['userPassword'];
        if (password_verify($password, $fetch_pass)) {
            // $row = mysqli_fetch_assoc($res);
            $_SESSION['valid'] = $fetch['email'];
            $_SESSION['username'] = $fetch['user_name'];
            $_SESSION['id'] = $fetch['ID_user'];
            $_SESSION['role'] = $fetch['ROLE'];
            $_SESSION['image'] = $fetch['userimage'];

            setcookie('email', $email, time() + 2 * 33333, '/');
            setcookie('password', $password, time() + 2 * 33333, '/');
            header("location:index.php");
        } else {
            $errorsin['email'] = "Incorrect email or password!";
        }
    } else {
        $errorsin['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
    }
}
session_write_close();
