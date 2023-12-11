 <?php   include('../include/connect.php');   ?>

<!DOCTYPE html>
<html lang="en">

<?php

$place = '../';
?>
<?php
$sub_catName = '';
$cat_id = '';

$errorMessage = "";

if (isset($_POST['addfrelancer'])) {
  $sub_catName = $_POST['sub_catName'];
  $cat_id = $_POST['cat_id'];



  do {
    if (empty($sub_catName)) {
      $errorMessage = "error";
      break;
    }
    // add user
   

    
    $sql = "INSERT INTO sub_categories(subName,id_category)
                VALUES ('$sub_catName',$cat_id);
                ";
    $categorie = mysqli_query($con, $sql);

    if (!$categorie) {
      $errorMessage = "query error" . mysqli_error($con);
      break;
    }

    header('location:../categories.php');
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
            <label class="form-label">Sub-Category Name</label>
            <input type="text" name="sub_catName" class="form-control" value="<?php echo $sub_catName; ?>">
          </div>
          <div class=" mb-4">
            <label class="form-label">Category Name</label>
            <select name="cat_id" class="form-control" value="<?php echo $cat_id; ?>">
              <option value="" selected disabled>Choize votre category</option>
              <?php include('../include/category.php') ?>
            </select>
          </div>

          <div class="d-flex w-100 justify-content-center">
            <button type="submit" name="addfrelancer" class="btn btn-success btn-block mb-4 me-4 ">Add</button>
            <a class="btn btn-danger btn-block mb-4 " href="<?=$place?>categories.php">Annuler</a>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="js/agents.js"></script>
</body>

</html>