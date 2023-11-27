<?php   include('../include/connect.php');   ?>

<!DOCTYPE html>
<html lang="en">

<?php
$active_overview = '';
$active_users = '';
$active_freelances = 'active';
$active_testimonials = '';
$active_project = '';
$active_contact = '';
$active_categorie = '';
$place = '../';
?>
<?php 
if (isset($_GET["id"]) && isset($_GET["category"])) {

    $id_c=$_GET["id"];
    $category=$_GET["category"];
    
}
else{
    header('location:../categories.php');
    exit;
}
if (isset($_POST['delete'])) {
    $sub_cat = $_POST['sub_cat'];
  
  
  
    do {
      if (empty($sub_cat)) {
        $errorMessage = "error";
        break;
      }
      // delete sub category
      $sql = "DELETE FROM sub_categories WHERE id = $sub_cat";
      $deletesub = mysqli_query($con, $sql);
  
      if (!$deletesub) {
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


          <div class="mb-4 fs-4 fw-5">Category : <?=$category?></div>
          <div class=" mb-4">
            <label class="form-label">sub-categories</label>
            <select name="sub_cat" class="form-control" value="<?php echo $sub_cat;?>">
              <option value="" selected disabled>Choize votre user</option>
              <?php include('../include/sub_category.php') ?>
            </select>
          </div>

          <div class="d-flex w-100 justify-content-center">
            <button type="submit" name="delete" class="btn btn-success btn-block mb-4 me-4 ">Add</button>
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