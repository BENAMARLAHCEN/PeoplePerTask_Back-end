<?php
include '../include/connect.php';
// PHP code to handle form submissions for adding Skills or Tags


if (isset($_POST['skills'])) {
    // Handling Skills addition form submission
    // ... (Validation and insertion of Skills) ...
    $skill = $_POST['skills'];
    if (empty($skill)) {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>No data!</strong> Add skills name in the input.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    } elseif (!is_valide('name', $skill, -1)) {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>skills name not match!</strong> 
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    } else {

        $sql = "SELECT * FROM skills WHERE name = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, 's', $skill);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 0) {
            mysqli_stmt_close($stmt);
            $sql = "INSERT INTO skills(name) values (?)";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, 's', $skill);

            if (mysqli_stmt_execute($stmt)) {
                echo "<div class='alert alert-dismissible fade show' role='alert'>
        <strong>skills have been added Successfully !</strong> 
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
            }
        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>this skill is already exist!</strong> 
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
    }
}

if (isset($_POST['tags'])) {

    // Handling tags addition form submission
    // ... (Validation and insertion of tags) ...

    $tag = $_POST['tags'];
    if (empty($tag)) {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>No data!</strong> Add tags name in the input.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    } elseif (!is_valide('name', $tag, -1)) {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>tags name not match!</strong> 
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    } else {

        $sql = "SELECT * FROM tags WHERE tagName = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, 's', $tag);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 0) {
            mysqli_stmt_close($stmt);
            $sql = "INSERT INTO tags(tagName) values (?)";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, 's', $tag);

            if (mysqli_stmt_execute($stmt)) {
                echo "<div class='alert alert-dismissible fade show' role='alert'>
        <strong>tags have been added Successfully !</strong> 
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
            }
        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>this tag is already exist!</strong> 
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
    }
}


// Validation function for different input types
function is_valide($key, $value, $id = -1)
{
    global $conn;
    switch ($key) {
        case 'name':
            if (!preg_match("/^[a-zA-Z]*$/", $value)) {
                return false;
            }
            return true;
        case 'username':
            if (!preg_match("/^[a-zA-Z0-9 ]*$/", $value)) {
                return false;
            }
            if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE `username` = '$value' and `id` <> $id;")) == 1) {
                return "exists";
            }
            return true;
        case 'email':
            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                return false;
            }
            if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE `email` = '$value' and `id` <> $id;")) == 1) {
                return "exists";
            }
            return true;

        case 'skills':
            if (!preg_match("/^[a-zA-Z \/.&#]*$/", $value)) {
                return false;
            }
            return true;
        case '':

            return true;
        case '':

            return true;
        case '':

            return true;
    }
}
