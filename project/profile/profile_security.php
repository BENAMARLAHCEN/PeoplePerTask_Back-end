<?php
require_once 'controller/sessionController.php';
require_once '../dashboard/include/connect.php';
require_once 'controller/profileController.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head.php'  ?>



<body>
    <div class="container-xl px-4 mt-4">

        <?php require_once 'include/nav.php'  ?>

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">Change Password</div>
                    <div class="card-body">
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
                        <form method="post">

                            <div class="mb-3">
                                <label class="small mb-1">Current Password</label>
                                <input class="form-control" name="currentPassword" type="password" placeholder="Enter current password">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">New Password</label>
                                <input class="form-control" name="newPassword" type="password" placeholder="Enter new password">
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1">Confirm Password</label>
                                <input class="form-control" name="confirmPassword" type="password" placeholder="Confirm new password">
                            </div>
                            <button class="btn btn-primary" name="changepassword" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">Delete Account</div>
                    <div class="card-body">
                        <p>Deleting your account is a permanent action and cannot be undone. If you are sure you want to delete your account, select the button below.</p>
                        <button class="btn btn-danger-soft text-danger" onclick="deleteRow(<?=$id?>);" type="button">I understand, delete my account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/ajax.js"></script>
</body>

</html>