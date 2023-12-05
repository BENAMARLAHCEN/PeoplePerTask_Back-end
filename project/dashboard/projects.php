<?php
// Start output buffering
ob_start();
include('./include/adminsession.php');

include 'include/head.php';


?>
<?php include 'include/connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<?php
$active_overview = '';
$active_users = '';
$active_freelances = '';
$active_testimonials = '';
$active_project = 'active';
$active_contact = '';
$active_categorie = '';
$place = '';
?>
<?php
include('include/head.php');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
<script src="js/agents.js"></script>
<script src="./js/ajax.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<body>
    <div class="wrapper">
        <?php include('include/aside.php') ?>
        <div class="main">
            <?php include('include/navbar.php') ?>
            <?php
            if (isset($_GET['opertion']) && $_GET['opertion'] == 'true') {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }
            if (isset($_GET['opertion']) && $_GET['opertion'] == 'false') {
                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            }
            ?>

            <button type="button" style="width : 10rem;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                ADD PROJECT
            </button>
            <div class="Agents">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>project_description</th>
                            <th>categorie</th>
                            <th>sub_category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $sql = "SELECT projects.id as id_pro,title,project_description,CategoryName,subName FROM projects 
                   LEFT JOIN sub_categories on sub_categories.id = projects.id_sub_category
                   LEFT JOIN categories on categories.id = sub_categories.id_category
                   ";
                        $user = mysqli_query($con, $sql);

                        if (!$user) {
                            die("invaled query: " . mysqli_error($con));
                        }

                        while ($row = mysqli_fetch_assoc($user)) {
                            ?>
                    <tr>
                        <td><?=$row['id_pro']?></td>
                        <td><?=$row['title']?></td>
                        <td><?=$row['project_description']?></td>
                        <td><?=$row['CategoryName']?></td>
                        <td><?=$row['subName']?></td>
                        <td>
                            <button class='btn btn-primary btn-sm' onclick="updateFreelancer(<?=$row['id_pro']?>)" >Edit</button>
                            <a class='btn btn-primary btn-sm'  href='edit/editproject.php?id=<?=$row['id_pro']?>'>Edit</a>
                            <button class='btn btn-danger btn-sm' onclick="deleteRow('<?= $row['id_pro'] ?>','projects')">Delete</button>
                        </td>
                    </tr>
                    <?php
                        }
                        ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>FreelanceName</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Skills</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>

    <!-- edit modal -->
    <style>
        .modal-dialog {
            max-width: 90% !important;
        }
    </style>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" stele="min-width: 2222rem;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add new task</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php
                if (isset($_POST['addproject'])) {
                    $title = $_POST['title'];
                    $project_desc = $_POST['project_desc'];
                    $user_id = $_POST['user_id'];
                    $cat_id = $_POST['cat_id'];
                    $sub_id = $_POST['sub_id'];
                    $project_img = $_FILES['project_img']['name'];
                    $project_img_tmp_name = $_FILES['project_img']['tmp_name'];
                    $project_img_folder = "uploaded/" . $project_img;

                    do {
                        if (empty($title) || empty($project_desc) || empty($cat_id) || empty($sub_id) || empty($user_id)) {
                            header('location:projects.php?opertion=false');
                            exit;
                        }
                        // add user

                        $sql = "INSERT INTO projects(title,project_description,image,id_categorie,id_sub_category,ID_user) VALUES ('$title','$project_desc','$project_img',$cat_id,$sub_id,$user_id);";
                        $addproject = mysqli_query($con, $sql);
                        if ($addproject) {
                            move_uploaded_file($project_img_tmp_name, $project_img_folder);
                        }


                        header('location:projects.php?opertion=true');
                        exit;
                    } while (false);
                }
                ?>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

                    <div class="mb-4">
                        <label class="form-label">Title :</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Project description :</label>
                        <input type="text" name="project_desc" class="form-control">
                    </div>

                    <!-- select input -->
                    <div class=" mb-4">
                        <label class="form-label">Category name</label>
                        <select name="cat_id" class="form-control">
                            <option value="" selected disabled>Choize votre category</option>
                            <?php include('include/category.php') ?>
                        </select>
                    </div>

                    <div class=" mb-4">
                        <label class="form-label">Sub-Category name</label>
                        <select name="sub_id" class="form-control">
                            <option value="" selected disabled>Choize votre category</option>
                            <?php
                            $sql = "SELECT id,subName FROM sub_categories";
                            $id_c = mysqli_query($con, $sql);

                            if (!$id_c) {
                                die("invaled query: " . mysqli_error($con));
                            }

                            while ($row = mysqli_fetch_assoc($id_c)) {
                                echo "<option value='$row[id]'>$row[subName]</option>";
                            } ?>
                        </select>
                    </div>

                    <div class=" mb-4">
                        <label class="form-label">User acount</label>
                        <select name="user_id" class="form-control" value="">
                            <option value="" selected disabled>Choize votre user</option>
                            <?php $sql = "SELECT ID_user,user_name FROM users";
                            $id_u = mysqli_query($con, $sql);

                            if (!$id_u) {
                                die("invaled query: " . mysqli_error($con));
                            }

                            while ($row = mysqli_fetch_assoc($id_u)) {
                                echo "<option value='$row[ID_user]'>id:$row[ID_user] name:$row[user_name]</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="mb-4">
                        <input type="file" accept="image/png,image/jpg,image/jpeg" name="project_img" class="form-control">
                    </div>


                    <div class="d-flex w-100 justify-content-center">
                        <button type="submit" name="addproject" class="btn btn-success btn-block mb-4 me-4">Add </button>
                        <div class="btn btn-secondary btn-block mb-4 me-4" data-bs-dismiss="modal">Annuler</div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function updateFreelancer(id) {
            var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
            myModal.show();
            $.ajax({
                url: '../../backend/freelancer_script.php',
                method: 'POST',
                data: {
                    sendId: id
                },
                dataType: 'html',
                success: function(response) {
                    console.log(response);
                    response = JSON.parse(response);
                    document.getElementById("project_desc").value = response["ID"];
                    document.getElementById("nameFormUpdate").value = response["Name_freelance"];
                    document.getElementById("skillFormUpdate").value = response["Skill"];
                    document.getElementById("birthdayFormUpdate").value = response["birthday"];
                    document.getElementById("emailFormUpdate").value = response["email"];
                    myModal.show();
                },
                error: function(xhr, status, error) {
                    console.error(status);
                }
            });

        }

        function deleteFreelancer(id) {
            console.log(id)
            var confirmation = confirm("are you sure you want to delete this freelancer");
            if (confirmation) {
                document.getElementById("deleteForm").submit();
            }
        }
    </script>
    <?php
    if (isset($_POST['sendId'])) {
        getProject();
    }
    function getProject()
    {
        $id = $_POST['sendId'];
        $query = "SELECT projects.id as id_pro,title,project_description,CategoryName,subName FROM projects 
        LEFT JOIN sub_categories on sub_categories.id = projects.id_sub_category
        LEFT JOIN categories on categories.id = sub_categories.id_category
        where projects.id = $id
        ;";

        global $con;
        $res = mysqli_query($con, $query);
        while ($project = mysqli_fetch_assoc($res)) {
            echo json_encode($project);
        }
    }
    function newDataFreelancer()
    {
        if (isset($_POST['newFreelancer'])) {
            $id_feerlancer = $_POST['id_freelancer'];
            $name_feerlancer = $_POST['name_freelancer'];
            $skill = $_POST['skill'];
            $birthday_user = $_POST['birthday_user'];
            $email_user = $_POST['email_user'];
            $addquery = "UPDATE Freelances AS f
            INNER JOIN users u ON u.ID = f.ID_user
            SET f.Name_freelance = '$name_feerlancer', f.Skill='$skill', u.birthday='$birthday_user',u.email='$email_user'
            WHERE f.ID=$id_feerlancer;";
            global $con;
            $result = mysqli_query($con, $addquery);
            header("Location: /PeoplePerTask/project/dashboard/freelancers.php");
        }
    }
    ?>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" stele="min-width: 2222rem;">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add new task</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php
                if (isset($_POST['addproject'])) {
                    $title = $_POST['title'];
                    $project_desc = $_POST['project_desc'];
                    $user_id = $_POST['user_id'];
                    $cat_id = $_POST['cat_id'];
                    $sub_id = $_POST['sub_id'];
                    $project_img = $_FILES['project_img']['name'];
                    $project_img_tmp_name = $_FILES['project_img']['tmp_name'];
                    $project_img_folder = "uploaded/" . $project_img;

                    do {
                        if (empty($title) || empty($project_desc) || empty($cat_id) || empty($sub_id) || empty($user_id)) {
                            header('location:projects.php?opertion=false');
                            exit;
                        }
                        // add user

                        $sql = "INSERT INTO projects(title,project_description,image,id_categorie,id_sub_category,ID_user) VALUES ('$title','$project_desc','$project_img',$cat_id,$sub_id,$user_id);";
                        $addproject = mysqli_query($con, $sql);
                        if ($addproject) {
                            move_uploaded_file($project_img_tmp_name, $project_img_folder);
                        }


                        header('location:projects.php?opertion=true');
                        exit;
                    } while (false);
                }
                ?>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

                    <div class="mb-4">
                        <label class="form-label">Title :</label>
                        <input type="text" name="title" id="nameFormUpdate" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Project description :</label>
                        <input type="text" name="project_desc" id="project_desc" class="form-control">
                    </div>

                    <!-- select input -->
                    <div class=" mb-4">
                        <label class="form-label">Category name</label>
                        <select name="cat_id" class="form-control">
                            <option value="" disabled>Choize votre category</option>
                            <?php include('include/category.php') ?>
                        </select>
                    </div>

                    <div class=" mb-4">
                        <label class="form-label">Sub-Category name</label>
                        <select name="sub_id" class="form-control">
                            <option value="" disabled>Choize votre category</option>
                            <?php
                            $sql = "SELECT id,subName FROM sub_categories";
                            $id_c = mysqli_query($con, $sql);

                            if (!$id_c) {
                                die("invaled query: " . mysqli_error($con));
                            }

                            while ($row = mysqli_fetch_assoc($id_c)) {
                                echo "<option value='$row[id]'>$row[subName]</option>";
                            } ?>
                        </select>
                    </div>

                    <div class=" mb-4">
                        <label class="form-label">User acount</label>
                        <select name="user_id" class="form-control" value="">
                            <option value="" disabled>Choize votre user</option>
                            <?php $sql = "SELECT ID_user,user_name FROM users";
                            $id_u = mysqli_query($con, $sql);

                            if (!$id_u) {
                                die("invaled query: " . mysqli_error($con));
                            }

                            while ($row = mysqli_fetch_assoc($id_u)) {
                                echo "<option value='$row[ID_user]'>id:$row[ID_user] name:$row[user_name]</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="mb-4">
                        <input type="file" accept="image/png,image/jpg,image/jpeg" name="project_img" class="form-control">
                    </div>


                    <div class="d-flex w-100 justify-content-center">
                        <button type="submit" name="addproject" class="btn btn-success btn-block mb-4 me-4">Add </button>
                        <div class="btn btn-secondary btn-block mb-4 me-4" data-bs-dismiss="modal">Annuler</div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

<?php
// Flush or clean the output buffer and send it to the browser
ob_end_flush();
?>