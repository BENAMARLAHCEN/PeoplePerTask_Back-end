<?php
$errors = array();
$done = array();

if (isset($_POST['saveChange'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $City = mysqli_real_escape_string($con, $_POST['City']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $job = mysqli_real_escape_string($con, $_POST['job']);
    $PostalCode = mysqli_real_escape_string($con, $_POST['PostalCode']);
    do {
        if (empty($username) || empty($email) || empty($firstName) || empty($lastName) || empty($birthday) || empty($City) || empty($PostalCode)) {
            $errors['data'] = "add all your information";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Invalid email address.";
            }
            $verify_email = mysqli_query($con, "SELECT email FROM users WHERE email = '$email'");
            $verify_username = mysqli_query($con, "SELECT user_name FROM users WHERE user_name = '$username'");
            if (mysqli_num_rows($verify_username) != 0) {
                $errors['username'] = "username that you have entered is already exist!";
            }
            if (mysqli_num_rows($verify_email) != 0) {
                $errors['email'] = "Email that you have entered is already exist!";
            }
            if (count($errors) === 0) {
                $sql = " UPDATE users SET user_name = '$username', firstName = '$firstName', lastName = '$lastName', email = '$email', phone = '$phone' , job = '$job', birthday = '$birthday', City = $City,PostalCode = '$PostalCode' WHERE ID_user = $id ";
                $result = mysqli_query($con, $sql);
                if (!$result) {
                    $errorMessage = "query error" . mysqli_error($con);
                    break;
                } else {
                    $_SESSION['valid'] = $email;
                    $_SESSION['username'] = $username;
                }
            }
        }
    } while (false);
}

if (isset($_POST['editimage'])) {
    $userimage = $_FILES['userimage']['name'];
    $userimage_tmp_name = $_FILES['userimage']['tmp_name'];
    $userimage_folder = "../uploaded/" . $userimage;

    if (empty($userimage)) {
        $errors['image'] = "image that you have entered is note exist!";
    } else {
        $sql = " UPDATE users SET userimage = '$userimage' WHERE ID_user = $id ";
        $editimage = mysqli_query($con, $sql);
        if ($editimage) {
            move_uploaded_file($userimage_tmp_name, $userimage_folder);
            $_SESSION['image'] = $userimage;
        }
    }
}

if (isset($_POST['changepassword'])) {
    $currentPassword = mysqli_real_escape_string($con, $_POST['currentPassword']);
    $newPassword = mysqli_real_escape_string($con, $_POST['newPassword']);
    $confirmPassword = mysqli_real_escape_string($con, $_POST['confirmPassword']);

    if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
        $errors['data'] = "insert all data!";
    } else {
        $sql = "SELECT userPassword FROM users WHERE ID_user = $id";
        $res = mysqli_query($con, $sql);
        $pass = mysqli_fetch_assoc($res);
        $fetch_pass = $pass['userPassword'];
        if (password_verify($currentPassword, $fetch_pass)) {
            if ($newPassword === $confirmPassword) {
                $encpass = password_hash($newPassword, PASSWORD_BCRYPT);
                $sql = " UPDATE users SET userPassword = '$encpass' WHERE ID_user = $id ";
                $editpassword = mysqli_query($con, $sql);
                if ($editpassword) {
                $done['password'] = "Password is successfully updated!";
                }
            } else {
                $errors['password'] = "Confirm password not matched!";
            }
        } else {
            $errors['password'] = "Incorrect password!";
        }
    }
}
