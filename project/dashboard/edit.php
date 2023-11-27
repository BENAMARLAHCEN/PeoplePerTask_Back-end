<!DOCTYPE html>
<html lang="en">

<?php 
$active_overview = '';
$active_users = 'active';
$active_freelances = '';
$active_project = '';
$active_contact = '';
$active_categorie = '';
$place = '';
?>
<?php 
include('include/connect.php');
$id = '';
$name = '';
$email = '';
$password_ = '';
$birthday = '';
$ville = '';
$postalcode ='';

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD']=='GET') {
    if (!isset($_GET["id"])) {
        header('location:users.php');
        exit;
    }
    $id=$_GET["id"];

    // read the row of this id
    $sql = "SELECT * FROM users WHERE ID_user = $id";
    $user = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($user);
    
    if (!$row) {
        header('location:users.php');
        exit;
    }

    $name = $row["user_name"];
    $email = $row["email"];
    $password_ = $row["userPassword"];
    $birthday = $row["birthday"];
    $ville = $row["City"];
    $postalcode =$row["PostalCode"];  
}
else {
    $id=$_GET["id"];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password_ = $_POST['password'];
    $birthday = $_POST['birthday'];
    $ville = $_POST['city'];
    $postalcode =$_POST['postalcode'];


    do {
        if (empty($name) || empty($email) || empty($password_) || empty($birthday)|| empty($ville) || empty($postalcode)) {
            $errorMessage = "error";
            break;
        }
        $sql = " UPDATE users SET user_name = '$name', email = '$email', userPassword='$password_', birthday = '$birthday', City = $ville,PostalCode = '$postalcode' WHERE ID_user=$id ";
        $user = mysqli_query($con,$sql);

        if (!$user) {
            $errorMessage = "query error" . mysqli_error($con);
            break;
        }

        
        header('location:users.php');
        exit;
    
    } while (true);
}
?>
<?php include('include/head.php') ?>
<body>
    <div class="wrapper">
        <?php include('include/aside.php') ?>
        <div class="main">
            <?php include('include/navbar.php') ?>
            <?php 
            if (!empty($errorMessage)) {
                echo "
                <div class='btn btn-danger'>$errorMessage</div>
                ";
            }
            ?>
            
            <div class="modal-content bg-white" >
                <form id="forms" method="post">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    
                      
                        <div class="mb-4">
                            <label class="form-label" >Name</label>
                          <input type="text" name="name" class="form-control" value="<?php echo $name;?>" >
                        </div>
                  
                    
                  
                    <!-- Text input -->
                    <div class="mb-4">
                        <label class="form-label" >Email</label>
                      <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
                    </div>
                  
                    <!-- Text input -->
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" value="<?php echo $password_;?>">
                    </div>
                  
                    <!-- Number input -->
                    <div class=" mb-4">
                      <label class="form-label">birthday</label>
                      <input type="date" name="birthday" class="form-control" value="<?php echo $birthday;?>">
                    </div>
                    
                    <!-- Number input -->
                    <div class=" mb-4">
                      <label class="form-label">Ville</label>
                      <select name="city" class="form-control">
                        <option value=""  disabled>Choize votre ville</option>
                        
                        <?php
                        include('include/ville.php')
                        ?>
                      </select>                      
                    </div>
                    <!-- Message input -->
                    <div class=" mb-4">
                      <label class="form-label">PostalCode</label>
                      <input type="text" name="postalcode" class="form-control " value="<?php echo $postalcode;?>">
                    </div>
                  
                    <!-- Submit button -->
                    <div class="d-flex w-100 justify-content-center">
                    <button type="submit" class="btn btn-success btn-block mb-4 me-4 save">Save Edit</button>
                    <a class="btn btn-danger btn-block mb-4 " href="users.php">Annuler</a>
                    </div>
                  </form>
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>
        <script src="js/agents.js"></script>
</body>

</html>