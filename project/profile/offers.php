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
        <div class="container">
            <form>
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
                                            <select class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country" data-select2-id="select2-data-1-gy14" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="select2-data-3-ibs9"></option>
                                                <option value="AF">Afghanistan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Sub-Catedory</label>
                                            <select class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country" data-select2-id="select2-data-1-gy14" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="select2-data-3-ibs9"></option>
                                                <option value="AF">Afghanistan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="email" class="form-control">
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
                                <form method="post">
                                    <textarea id="mytextarea">Hello, World!</textarea>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">

                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Status</h3>
                                <select class="form-select">
                                    <option value="draft" selected>Draft</option>
                                    <option value="active">Active</option>
                                    <option value="active">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Avatar</h3>
                                <input class="form-control" type="file">
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Notes</h3>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Notification Settings</h3>
                                <ul class="list-group list-group-flush mx-n2">
                                    <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <h6 class="mb-0">News and updates</h6>
                                            <small>News about product and feature updates.</small>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch">
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <h6 class="mb-0">Tips and tutorials</h6>
                                            <small>Tips on getting more out of the platform.</small>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" checked>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <h6 class="mb-0">User Research</h6>
                                            <small>Get involved in our beta testing program.</small>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                    <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i class="bi bi-arrow-left-square me-2"></i></a> Create new customer</h2>
                    <div class="hstack gap-3">
                        <button class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span class="text">Cancel</span></button>
                        <button type="submit" class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Save</span></button>
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
    </script>
</body>

</html>