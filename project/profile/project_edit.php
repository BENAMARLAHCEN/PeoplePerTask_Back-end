<?php
require_once 'controller/sessionController.php';
require_once '../dashboard/include/connect.php';
// require_once 'controller/projectedit.php';

$sql = "SELECT * FROM projects WHERE id=$_GET[id]";
$result = mysqli_query($con, $sql);
$olddata = mysqli_fetch_assoc($result);
if ($_POST['editBudget']) {
    $budget_type = $_POST['budget_type'];
    $budget = $_POST['budget'];
    $currency = $_POST['currency'];

    $sql2 = "UPDATE projects SET budget_type = '$budget_type', budget = '$budget', currency = '$currency' where id = $_GET[id]";
    mysqli_query($con, $sql2);
}

if ($_POST['editData']) {
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $detail = $_POST['detail'];
    $deadline = $_POST['deadline'];

    $sql2 = "UPDATE projects SET category = '$category' , sub_category = '$sub_category' , title = '$title' , description = '$description' , detail = '$detail' , deadline = '$deadline' where id = $_GET[id]";
    mysqli_query($con, $sql2);
}



?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head.php'  ?>

<link rel="stylesheet" href="css/procard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<body>

    <div class="container-xl px-4 mt-4">

        <?php session_write_close();
        require_once 'include/nav.php';  ?>
        <div class="container">


            <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i class="bi bi-arrow-left-square me-2"></i></a> Edit Project</h2>
            </div>
            <div class="row">

                <div class="col-lg-8">
                    <form action="" method="post">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Select a relevant category so that freelancers can find your project</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Catedory</label>
                                            <select onchange="showSubCategory()" id="category" name="category" class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country" data-select2-id="select2-data-1-gy14" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="select2-data-3-ibs9"></option>
                                                <?php include '../dashboard/include/category.php'; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Sub-Catedory</label>
                                            <select id="subCategory" name="sub_category" class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country" data-select2-id="select2-data-1-gy14" tabindex="-1" aria-hidden="true">
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input name="title" type="text" class="form-control" value="<?= $olddata['title'] ?>">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?= $olddata['project_description'] ?></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Project Detail</h3>

                                <textarea id="mytextarea" name="detail"><?= $olddata['detail'] ?></textarea>

                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Project Deadline</h3>
                                <input type="date" name="deadline" class="form-control" value="<?= $olddata['deadline'] ?>">
                            </div>
                        </div>
                        <div class="card mb-4">

                            <input type="submit" name="editData" class="form-control">

                        </div>
                    </form>
                </div>



                <div class="col-lg-4">

                    <form action="" method="post">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Budget Type</h3>
                                <select name="budget_type" class="form-select">
                                    <option value="price">Fixed Price</option>
                                    <option value="hour">Per Hour</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <h3 class="h6">Budget</h3>
                                        <input name="budget" class="form-control" type="number" value="<?= $olddata['budget'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <h3 class="h6">CURRENCY</h3>
                                        <select name="currency" class="form-select">
                                            <option value="$">$ USD</option>
                                            <option value="€">€ EUR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="editBudget" class="form-control">
                    </form>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Photo</h3>
                                <input class="form-control" name="image" type="file">
                            </div>
                            <input type="submit" name="editPhoto" class="form-control">
                        </div>
                    </form>
                    <form action="" method="post">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Project tags</h3>
                                <div id="tag_input">
                                    <input type="text" name="tags[]" class="form-control mb-2">
                                </div>
                                <div class="btn btn-primary" id="moretag">ADD MORE TAGS</div>
                            </div>
                            <input type="submit" name="addmoretag" class="form-control">
                        </div>
                    </form>

                </div>
            </div>
            <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                <h2 class="h5 mb-3 mb-lg-0">Create new customer</h2>
                <div class="hstack gap-3">
                    <button class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span class="text">Cancel</span></button>
                </div>
            </div>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/uap6tfyqy3524i3iy3fg13e083sxl1v17417bwu2gks9ovcu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <script src="../javascript/ajax.js"></script>
    <script>
        var moretag = document.getElementById('moretag');
        var tag_input = document.getElementById('tag_input');
        moretag.addEventListener('click', function() {
            tag_input.innerHTML += `<input type="text" name="tags[]" class="form-control  mb-2">`;
        })
    </script>
</body>

</html>