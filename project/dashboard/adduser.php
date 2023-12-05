<!DOCTYPE html>
<html lang="en">

<?php 
include('include/ville.php');
$active_overview = '';
$active_users = 'active';
$active_freelances = '';
$active_testimonials = '';
$active_project = '';
$active_contact = '';
$active_categorie = '';
$place = '';
?>
<?php 
$name = '';
$email = '';
$password_ = '';
$birthday = '';
$ville = '';
$postalcode ='';

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD']=='POST' ) {
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
    // add user
    include('include/connect.php');
    $sql = "INSERT INTO users(user_name,userPassword,email,birthday,City,PostalCode)
            VALUES ('$name','$password_','$email','$birthday',$ville,'$postalcode');
            ";
    $user = mysqli_query($con,$sql);

    if (!$user) {
        $errorMessage = "query error" . mysqli_error($con);
        break;
    }
    
    // header("location : /test/project/dashboard/agents.php");
    header('location:users.php');
    exit;

} while (false);
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
                      <select name="city" class="form-control" value="<?php echo $name;?>">
                        <option value="" selected disabled>Choize votre ville</option>
                        <?php villes(0);?>
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
                    <a class="btn btn-danger btn-block mb-4 " href="agents.php">Annuler</a>
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