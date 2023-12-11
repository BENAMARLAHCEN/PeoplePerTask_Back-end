<?php
include '../dashboard/include/connect.php';
if (isset($_POST['show'])) {

    $sql = "SELECT * FROM projects";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <img src="uploaded/<?= $row['image'] ?>" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['title'] ?></h5>
                    <p class="card-text"><?= $row['project_description'] ?></p>
                    <a href="project_detail.php?id=<?= $row['id'] ?>" class="btn btn-outline-success btn-sm">Read More</a>
                </div>
            </div>
        </div>

    <?php }
}
if (isset($_POST['showId'])) {
    $sql = "SELECT * FROM projects where id_categorie = $_POST[showId]";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <img src="uploaded/<?= $row['image'] ?>" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['title'] ?></h5>
                    <p class="card-text"><?= $row['project_description'] ?></p>
                    <a href="project_detail.php?id=<?= $row['id'] ?>" class="btn btn-outline-success btn-sm">Read More</a>
                </div>
            </div>
        </div>

<?php }
}
if (isset($_POST['searchTag'])) {
    $sql = "SELECT image,project_description,title,p.id as id FROM projects p 
    left join project_tags pt on p.id = pt.project_id 
    left join tags t on t.id = pt.tag_id
    where t.tagName like ('%$_POST[searchTag]%')";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <img src="uploaded/<?= $row['image'] ?>" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['title'] ?></h5>
                    <p class="card-text"><?= $row['project_description'] ?></p>
                    <a href="project_detail.php?id=<?= $row['id'] ?>" class="btn btn-outline-success btn-sm">Read More</a>
                </div>
            </div>
        </div>

<?php }
}
if (isset($_POST['searchsub'])) {
    $sql = "SELECT * FROM projects where id_sub_category = $_POST[searchsub]";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <img src="uploaded/<?= $row['image'] ?>" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['title'] ?></h5>
                    <p class="card-text"><?= $row['project_description'] ?></p>
                    <a href="project_detail.php?id=<?= $row['id'] ?>" class="btn btn-outline-success btn-sm">Read More</a>
                </div>
            </div>
        </div>

<?php }
}
if (isset($_POST['searchtitle'])) {
    $sql = "SELECT * FROM projects where title like ('%$_POST[searchtitle]%')";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-lg-6 mb-4">
            <div class="card">
                <img src="uploaded/<?= $row['image'] ?>" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['title'] ?></h5>
                    <p class="card-text"><?= $row['project_description'] ?></p>
                    <a href="project_detail.php?id=<?= $row['id'] ?>" class="btn btn-outline-success btn-sm">Read More</a>
                </div>
            </div>
        </div>

<?php }
}
?>