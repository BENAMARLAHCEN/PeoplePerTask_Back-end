<?php   include('../include/connect.php');   ?>

<!DOCTYPE html>
<html lang="en">

<?php
$active_overview = '';
$active_users = '';
$active_ = 'active';
$active_testimonials = '';
$active_project = '';
$active_contact = '';
$active_categorie = '';
$place = '../';
?>
<?php
$freename = '';
$skills = '';
$user_id = '';

$errorMessage = "";

if (isset($_POST['addfrelancer'])) {
  $freename = $_POST['freename'];
  $skills = $_POST['skills'];
  $user_id = $_POST['user_id'];
  echo $freename . $skills . $user_id;

  do {
    if (empty($freename) || empty($skills) || empty($user_id)) {
      $errorMessage = "error";
      break;
    }
    // add user
   

    
    $sql = "INSERT INTO freelance(FreelanceName,skills,ID_user)
                VALUES ('$freename','$skills',$user_id);
                ";
    $freelance = mysqli_query($con, $sql);

    if (!$freelance) {
      $errorMessage = "query error" . mysqli_error($con);
      break;
    }

    header('location:../freelance.php');
    exit;
  } while (false);
}
?>

<?php include('../include/head.php') ?>

<body>
  <div class="wrapper">
    <?php include '../include/aside.php' ?>
    <div class="main">
      <?php include('../include/navbar.php') ?>
      <?php
      if (!empty($errorMessage)) {
        echo "
                <div class='btn btn-danger'>$errorMessage</div>
                ";
      }
      ?>

      <div class="modal-content bg-white">
        <form id="forms" method="post">


          <div class="mb-4">
            <label class="form-label">Freelance Name</label>
            <input type="text" name="freename" class="form-control" value="<?php echo $freename; ?>">
          </div>

          <!-- Text input -->
          <div class="mb-4">
            <label class="form-label">Skills</label>
            <input type="text" name="skills" class="form-control" value="<?php echo $skills; ?>">
          </div>

          <!-- Number input -->
          <div class=" mb-4">
            <label class="form-label">user accont</label>
            <select name="user_id" class="form-control" value="<?php echo $user_id; ?>">
              <option value="" selected disabled>Choize votre user</option>
              <?php include('../include/user.php') ?>
            </select>
          </div>


          <div class="d-flex w-100 justify-content-center">
            <button type="submit" name="addfrelancer" class="btn btn-success btn-block mb-4 me-4 ">Add</button>
            <a class="btn btn-danger btn-block mb-4 " href="<?=$place?>agents.php">Annuler</a>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="js/agents.js"></script>
</body>

</html>