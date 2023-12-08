<?php
require_once 'controller/sessionController.php';
require_once '../dashboard/include/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head.php'  ?>

<link rel="stylesheet" href="css/procard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<body>

    <div class="container-xl px-4 mt-4">

        <?php require_once 'include/nav.php'  ?>
        <a href="./project_form.php" class="btn btn-primary btn-sm btn-icon-text">POST NEW PROJECT</a>

        <div class="row mt-5">
            <?php
            $sql = "SELECT * FROM projects WHERE ID_user = $id";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="../uploaded/<?=$row['image']?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?=$row['title']?></h5>
                        <p class="card-text"><?=$row['project_description']?></p>
                        <a href="../project_detail.php?id=<?=$row['id']?>" class="btn btn-outline-success btn-sm">Read More</a>
                        <a href="project_edit.php?id=<?=$row['id']?>" class="btn btn-outline-success btn-sm">Edit</a>
                        <button onclick="deleteRow(<?=$row['id']?>,'projects')"  class="btn btn-outline-danger btn-sm">Delete</button>
                        <a href="./notifications.php"  class="btn btn-outline-success btn-sm">Assigner</a href="./notifications.php">
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dashboard/js/ajax.js"></script>

    </script>
</body>

</html>