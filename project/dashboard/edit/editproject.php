<?php include('../include/connect.php');   ?>

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


$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (!isset($_GET["id"])) {
    header('location:users.php');
    exit;
  }
  $id = $_GET["id"];

  // read the row of this id
  $sql = "SELECT title,project_description,image,id_categorie,id_sub_category,ID_user FROM projects 
  WHERE projects.id = $id";
  $project = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($project);

  if (!$row) {
    header('location:projects.php');
    exit;
  }
  $title = $row['title'];
  $project_desc = $row['project_description'];
  $user_id = $row['ID_user'];
  $cat_id = $row['id_categorie'];
  $sub_id = $row['id_sub_category'];
  $project_img = $row['image'];
} else {
  if (!isset($_POST['save'])) {
    echo "error save";
  }
  $id = $_GET["id"];
  $title = $_POST['title'];
  $project_desc = $_POST['project_desc'];
  $cat_id = $_POST['cat_id'];
  $sub_id = $_POST['sub_id'];
  $user_id = $_POST['user_id'];


  do {
    if (empty($title) || empty($project_desc) || empty($cat_id) || empty($sub_id) || empty($user_id)) {
      header('location:../projects.php?opertion=false');
      exit;
    }
    if (isset($_FILES['project_image'])) {

      $project_img = $_FILES['project_img']['name'];
      $project_img_tmp_name = $_FILES['project_img']['tmp_name'];
      $project_img_folder = "../uploaded/" . $project_img;

      $sql = "UPDATE projects SET title = '$title',project_description = '$project_desc',image = '$project_img',id_categorie = $cat_id,id_sub_category = $sub_id,ID_user = $user_id WHERE id = $id";
      $editproject = mysqli_query($con, $sql);
      if ($editproject) {
        move_uploaded_file($project_img_tmp_name, $project_img_folder);
      }
      header('location:projects.php?opertion=true');
      exit;
    }
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
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

          <div class="mb-4">
            <label class="form-label">Title :</label>
            <input type="text" name="title" class="form-control" value="<?= $title ?>">
          </div>

          <div class="mb-4">
            <label class="form-label">Project description :</label>
            <input type="text" name="project_desc" class="form-control" value="<?= $project_desc ?>">
          </div>

          <!-- select input -->
          <div class=" mb-4">
            <label class="form-label">Category name</label>
            <select name="cat_id" class="form-control">
              <option value="" disabled>Choize votre category</option>
              <?php include('../include/category.php') ?>
            </select>
          </div>

          <div class=" mb-4">
            <label class="form-label">Sub-Category name</label>
            <select name="sub_id" class="form-control">
              <option value="" disabled>Choize votre category</option>
              <?php
              $sql = "SELECT id,subName FROM sub_categories";
              $id_c = mysqli_query($con, $sql);

              if (!$id_c) {
                die("invaled query: " . mysqli_error($con));
              }

              while ($row = mysqli_fetch_assoc($id_c)) {
                $selected = '';
                if ($row['id'] == $sub_id) {
                  $selected = 'selected';
                }
                echo "<option " . $selected . " value='$row[id]'>$row[subName]</option>";
              } ?>
            </select>
          </div>

          <div class=" mb-4">
            <label class="form-label">User acount</label>
            <select name="user_id" class="form-control" value="">
              <option value="" disabled>Choize votre user</option>
              <?php $sql = "SELECT ID_user,user_name FROM users";
              $id_u = mysqli_query($con, $sql);

              if (!$id_u) {
                die("invaled query: " . mysqli_error($con));
              }

              while ($row = mysqli_fetch_assoc($id_u)) {
                $selected = '';
                if ($row['ID_user'] == $user_id) {
                  $selected = 'selected';
                }
                echo "<option " . $selected . " value='$row[ID_user]'>id:$row[ID_user] name:$row[user_name]</option>";
              } ?>
            </select>
          </div>
          <div class="mb-4 w-100 d-flex justify-content-center">
            <img src="../uploaded/<?= $project_img ?>" alt="project image" style="max-width: 50%;">
          </div>
          <div class="mb-4">
            <input type="file" accept="image/png,image/jpg,image/jpeg" name="project_img" class="form-control">
          </div>


          <div class="d-flex w-100 justify-content-center">
            <button type="submit" name="save" class="btn btn-success btn-block mb-4 me-4">Add </button>
            <div class="btn btn-secondary btn-block mb-4 me-4" data-bs-dismiss="modal">Annuler</div>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="js/agents.js"></script>
</body>

</html>