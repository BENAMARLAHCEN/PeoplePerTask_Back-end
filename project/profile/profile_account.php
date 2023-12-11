<?php require_once 'controller/sessionController.php';
require_once '../dashboard/include/connect.php';
require_once '../dashboard/include/region.php';
require_once 'controller/profileController.php';


$sql = "SELECT users.*,region.id as regionid FROM users 
left join ville on ville.id = users.City 
left join region on region.id = ville.region
WHERE ID_user = $id";
$result = mysqli_query($con, $sql);
$user = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<?php require_once 'include/head.php'  ?>


<body>
    <div class="container-xl px-4 mt-4">
        <?php require_once 'include/nav.php'  ?>

        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">

                        <img class="img-account-profile rounded-circle mb-2" id="image_use" src="../uploaded/<?= $_SESSION['image'] ?>" alt>

                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                            <input id="img_input" onchange="change()" class="d-none" type="file" name="userimage">
                            <div class="btn btn-primary" id="save" style="display: none;">
                                <input class="btn btn-primary" type="submit" name="editimage" value="Save image">
                            </div>
                        </form>
                        

                    </div>
                </div>
            </div>
            <div class="col-xl-8">

                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                            <?php
                            if (count($errors) == 1) {
                            ?>
                                <div class="alert alert-danger text-center">
                                    <?php
                                    foreach ($errors as $showerror) {
                                        echo $showerror;
                                    }
                                    ?>
                                </div>
                            <?php
                            } elseif (count($errors) > 1) {
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

                            <div class="mb-3">
                                <label class="small mb-1">Username (how your name will appear to other users on the site)</label>
                                <input class="form-control" name="username" type="text" placeholder="Enter your username" value="<?= $user['user_name'] ?>">
                            </div>

                            <div class="row gx-3 mb-3">

                                <div class="col-md-6">
                                    <label class="small mb-1">First name</label>
                                    <input class="form-control" name="firstName" type="text" placeholder="Enter your first name" value="<?= $user['firstName'] ?>">
                                </div>

                                <div class="col-md-6">
                                    <label class="small mb-1">Last name</label>
                                    <input class="form-control" name="lastName" type="text" placeholder="Enter your last name" value="<?= $user['lastName'] ?>">
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">

                                <div class="col-md-6">
                                    <label class="small mb-1">Job</label>
                                    <input class="form-control" name="job" type="text" placeholder="Enter your job " value="<?= $user['job'] ?>">
                                </div>

                                <div class="col-md-6">
                                    <label class="small mb-1">Postal Code</label>
                                    <input class="form-control" name="PostalCode" type="number" placeholder="Enter your postal code" value="<?= $user['PostalCode'] ?>">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1">Region</label>
                                <select onchange="showville(<?=$user['City']?>)" id="region" class="form-control" >
                                    <option <?php if ($user['regionid'] == null) {
                                                echo 'selected';
                                            } ?> disabled>Enter your location</option>
                                    <?php region($user['regionid']); ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1">City</label>
                                <select id="ville" class="form-control" name="City">
                                    
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1">Email address</label>
                                <input class="form-control" type="email" name="email" placeholder="Enter your email address" value="<?= $user['email'] ?>">
                            </div>
                            <div class="row gx-3 mb-3">

                                <div class="col-md-6">
                                    <label class="small mb-1">Phone number</label>
                                    <input class="form-control" name="phone" type="tel" placeholder="Enter your phone number" value="<?= $user['phone'] ?>">
                                </div>

                                <div class="col-md-6">
                                    <label class="small mb-1">Birthday</label>
                                    <input class="form-control" name="birthday" type="date" placeholder="Enter your birthday" value="<?= $user['birthday'] ?>">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1">About Me</label>
                                <textarea class="form-control" name="biography" rows="5" placeholder="My Bio" value="<?= $user['biography'] ?>"></textarea>
                            </div>

                            <input class="btn btn-primary" type="submit" name="saveChange" value="Save changes">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/profile.js"></script>
    <script src="../javascript/ajax.js"></script>

    </script>
</body>

</html>