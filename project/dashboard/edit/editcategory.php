<?php include('../include/connect.php');   ?>

<!DOCTYPE html>
<html lang="en">

<?php
$active_overview = '';
$active_users = '';
$active_freelances = '';
$active_testimonials = '';
$active_project = '';
$active_contact = '';
$active_categorie = 'active';
$place = '../';
?>
<?php
$catName = '';
$catName = '';

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header('location:users.php');
        exit;
    }
    $id = $_GET["id"];

    // read the row of this id
    $sql = "SELECT * FROM categories WHERE id = $id";
    $category = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($category);

    if (!$row) {
        header('location:categories.php');
        exit;
    }
    $catName = $row["CategoryName"];
} else {
    if (!isset($_POST['save'])) {
        echo "error save";
    }
    $id = $_GET["id"];
    $catName = $_POST['catName'];

    do {
        if (empty($catName)) {
            $errorMessage = "error";
            break;
        }
        $sql = " UPDATE categories SET CategoryName = '$catName' WHERE id=$id ";
        $category = mysqli_query($con, $sql);

        if (!$category) {
            die("query error" . mysqli_error($con));
            break;
        }


        header('location:../categories.php');
        exit;
    } while (true);
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
                        <label class="form-label">Category Name</label>
                        <input type="text" name="catName" class="form-control" value="<?php echo $catName; ?>">
                    </div>

                    <div class="d-flex w-100 justify-content-center">
                        <button type="submit" name="save" class="btn btn-success btn-block mb-4 me-4 ">Add</button>
                        <a class="btn btn-danger btn-block mb-4 " href="<?= $place ?>categories.php">Annuler</a>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>
        <script src="js/agents.js"></script>
</body>

</html>