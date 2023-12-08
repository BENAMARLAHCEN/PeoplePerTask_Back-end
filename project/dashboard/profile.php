<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (isset($_SESSION['valid']) &&( $_SESSION['role'] === 'freelance' || $_SESSION['role'] === 'admin')) {
    $id = $_SESSION['id'];
} else {
    header("location:../index.php");
}
include 'include/connect.php';
require_once '../profile/controller/profileController.php';
require_once 'include/ville.php';

if(isset($_POST['addskill'])){
    $id_freelancer=$id;
    $id_skill = $_POST['new_skills'];
    $addskill = "INSERT INTO freelance_skills(freelance_id, skills_id)
    VALUES ('$id_freelancer','$id_skill');";
    $res=mysqli_query($con,$addskill);
    header('location: profile.php');
}
  

$sql = "SELECT * FROM users  WHERE ID_user = $id";
$result = mysqli_query($con, $sql);
$freelance = mysqli_fetch_assoc($result);

$sqli = "SELECT freelance_skills.id as skills_id , name from freelance_skills left join skills on skills.id = freelance_skills.skills_id where freelance_skills.freelance_id = $freelance[ID_user]";
$result2 = mysqli_query($con, $sqli);
$sql2 = "SELECT * from skills where id not in (SELECT skills.id from freelance_skills left join skills on skills.id = freelance_skills.skills_id where freelance_skills.freelance_id = $freelance[ID_user])";
$result3 = mysqli_query($con,$sql2);

$active_overview = '';
$active_users = '';
$active_freelances = '';
$active_testimonials = '';
$active_project = '';
$active_contact = '';
$active_categorie = '';
$place = '';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $place ?>dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<?php include('include/connect.php') ?>

<body>
    <div class="wrapper">
        <?php include('include/aside.php') ?>
        <div class="main">
            <?php include('include/navbar.php') ?>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
            <div class="container">
                <div class="row flex-lg-nowrap">
                    <div class="col">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="e-profile">
                                            <div class="row">
                                                <div class="col-12 col-sm-auto mb-3">
                                                    <div class="mx-auto" style="width: 140px;">
                                                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                                                            <img src="../uploaded/<?= $freelance['userimage'] ?>" alt="" style="width: 100%;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">John Smith</h4>
                                                        <p class="mb-0">@johnny.s</p>
                                                        <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                                                        <div class="mt-2">
                                                            <button class="btn btn-primary" type="button">
                                                                <i class="fa fa-fw fa-camera"></i>
                                                                <span>Change Photo</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="text-center text-sm-right">
                                                        <span class="badge badge-secondary">administrator</span>
                                                        <div class="text-muted"><small>Joined 09 Dec 2017</small></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                                            </ul>
                                            <div class="tab-content pt-3">
                                                <div class="tab-pane active">
                                                    <form class="form" method="post">
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
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Username (how your name will appear to other users on the site)</label>
                                                                            <input class="form-control" type="text" name="username" placeholder="johnny.s" value="<?= $freelance['user_name'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>First name</label>
                                                                            <input class="form-control" type="text" name="firstName" placeholder="John" value="<?= $freelance['firstName'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Last name</label>
                                                                            <input class="form-control" type="text" name="lastName" placeholder="John.s" value="<?= $freelance['lastName'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input class="form-control" type="email" name="email" placeholder="user@example.com" value="<?= $freelance['email'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Job</label>
                                                                            <input class="form-control" type="text" name="job" placeholder="Enter your job " value="<?= $freelance['job'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Postal Code</label>
                                                                            <input class="form-control" type="number" name="PostalCode" placeholder="Enter your postal code" value="<?= $freelance['PostalCode'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label class="small mb-1">Location</label>
                                                                            <select class="form-control" name="City">
                                                                                <option <?php if ($freelance['City'] == null) {
                                                                                            echo 'selected';
                                                                                        } ?> disabled>Enter your location</option>
                                                                                <?php villes($freelance['City']); ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Phone number</label>
                                                                            <input class="form-control" name="phone" type="tel" placeholder="Enter your phone number" value="<?= $freelance['phone'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Birthday</label>
                                                                            <input class="form-control" name="birthday" type="date" placeholder="Enter your birthday" value="<?= $freelance['birthday'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col mb-3">
                                                                        <div class="form-group">
                                                                            <label>About Me</label>
                                                                            <textarea class="form-control" name="biography" rows="5" placeholder="My Bio"><?= $freelance['biography'] ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <button class="btn btn-primary" name="saveChange" type="submit">Save Changes</button>

                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3 p-3">
                                    <form method="post">

                                        <div class="mb-3">
                                            <div class="mb-2"><b>Change Password</b></div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Current Password</label>
                                                        <input class="form-control" name="currentPassword" type="password" placeholder="••••••">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input class="form-control" name="newPassword" type="password" placeholder="••••••">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                                        <input class="form-control" name="confirmPassword" type="password" placeholder="••••••">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" name="changepassword" type="submit">Save</button>

                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 mb-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="px-xl-3">
                                            <button class="btn btn-block btn-secondary">
                                                <i class="fa fa-sign-out"></i>
                                                <span>Logout</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pt-2">
                                            <h4 class="card-title mb-4">My Skill</h4>
                                            <div>
                                                <?php while ($skils = mysqli_fetch_assoc($result2)) {
                                                ?>
                                                    <span class="p-2"><?= $skils["name"] ?><button class="btn btn-danger p-0" onclick="deleteRow(<?=$skils['skills_id']?>,'freelance_skills')"><i class="fa-solid fa-minus p-2 "></i></button></span>
                                                <?php
                                                } ?>
                                            </div>
                                            <form action="" method="post">
                                            <select  class="form-control"  name="new_skills">
                                                <?php while ($skill = mysqli_fetch_assoc($result3)) {
                                                    echo "<option value='$skill[id]'>$skill[name]</option>";
                                                }
                                                   
                                                ?>
                                            </select>
                                            <input  class="form-control" type="submit" name="addskill" value="Add skills">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js//ajax.js"></script>
    <script src="dashboard.js"></script>
</body>

</html>