<?php
require_once 'controller/sessionController.php';
require_once '../dashboard/include/connect.php';
require_once 'controller/projectcontroller.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head.php'  ?>

<link rel="stylesheet" href="css/procard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<body>

    <div class="container-xl px-4 mt-4">

        <?php session_write_close(); require_once 'include/nav.php';  ?>
        <div class="container">

            <?php
            if (count($done) > 0) {
            ?>
                <div class="alert alert-success">
                    <?php
                    foreach ($done as $show) {
                    ?>
                        <li><?php echo $show; ?></li>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>
            <?php
            if (count($errors) > 0) {
            ?>
                <div class="alert alert-danger">
                    <?php
                    foreach ($errors as $showerror) {
                    ?>
                        <li><?php echo $showerror; ?></li>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                    <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i class="bi bi-arrow-left-square me-2"></i></a> Create new Project</h2>
                </div>

                <div class="row">

                    <div class="col-lg-8">

                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Select a relevant category so that freelancers can find your project</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Catedory</label>
                                            <select onchange="showSubCategory()" id="category" name="category" class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country" data-select2-id="select2-data-1-gy14" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="select2-data-3-ibs9"></option>
                                                <?php include '../dashboard/include/category.php';?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Sub-Catedory</label>
                                            <select id="subCategory"  name="sub_category" class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country" data-select2-id="select2-data-1-gy14" tabindex="-1" aria-hidden="true">
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input name="title" type="text" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Project Detail</h3>

                                <textarea id="mytextarea" name="detail">Hello, World!</textarea>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">

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
                                        <input name="budget" class="form-control" type="number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <h3 class="h6">CURRENCY</h3>
                                        <select name="currency" class="form-select">
                                            <option value="USA">$ USA</option>
                                            <option value="EUR">€ EUR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Project Detail</h3>
                                <input type="date" name="deadline" class="form-control">
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Photo</h3>
                                <input class="form-control" name="image" type="file">
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Project Detail</h3>
                                <div id="tag_input">
                                <input type="text" name="tags[]" class="form-control mb-2">
                                </div>
                                <div class="btn btn-primary" id="moretag">ADD MORE TAGS</div>
                            </div>
                        </div>
                        <script>
                            var moretag = document.getElementById('moretag');
                            var tag_input = document.getElementById('tag_input');
                            moretag.addEventListener('click',function(){
                                tag_input.innerHTML += `<input type="text" name="tags[]" class="form-control  mb-2">`;
                            })
                        </script>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                    <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i class="bi bi-arrow-left-square me-2"></i></a> Create new customer</h2>
                    <div class="hstack gap-3">
                        <button class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span class="text">Cancel</span></button>
                        <button type="submit" name="postproject" class="btn btn-primary btn-sm btn-icon-text">POST PROJECT</button>
                    </div>
                </div>
            </form>
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
</body>

</html>