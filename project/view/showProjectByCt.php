<?php
include '../dashboard/include/connect.php';
if (isset($_POST['show'])) {

$sql = "SELECT * FROM projects where id_categorie = $_POST[show]";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="col-lg-6 mb-4">
    <div class="card">
        <img src="uploaded/<?= $row['image']?>" alt="" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?= $row['title'] ?></h5>
            <p class="card-text"><?= $row['project_description'] ?></p>
            <a href="project_detail.php?id=<?= $row['id'] ?>" class="btn btn-outline-success btn-sm">Read More</a>
        </div>
    </div>
</div>

<?php 
} }?>