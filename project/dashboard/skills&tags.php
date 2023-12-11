<!DOCTYPE html>
<html lang="en">
<?php
include('include/connect.php');

// Include admin session and set active states for different sections
include './include/adminsession.php';
$active_overview = '';
$active_users = '';
$active_freelances = '';
$active_testimonials = '';
$active_project = '';
$active_categorie = '';
$place = '';

// Include head section

include('include/head.php');
?>

<body>
    <div class="wrapper">
        <?php include('include/aside.php') ?>
        <div class="main">
            <?php include('include/navbar.php') ?>
            <div class="row">
                <!-- Column 1 for managing Skills -->
                <div class="col-lg-6">
                    <!-- Section for adding Skills -->
                    <div class=" ps-3 ">
                        <div class="d-flex">
                            <button class='btn btn-primary' style="width : 10rem;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADD SKILLS</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">New Tag</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form id="skills_form">
                                        <div id="error_skill">

                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="mb-1">Skills Name</label>
                                                <input class="form-control" type="text" name="skills" placeholder="Enter your skill name">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="addskills" class="btn btn-primary">ADD</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Table to display existing Skills -->
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Skills Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- PHP code to fetch and display Skills from the database -->
                                <?php

                                $sql = "SELECT * FROM skills ";
                                $user = mysqli_query($con, $sql);

                                if (!$user) {
                                    die("invaled query: " . mysqli_error($con));
                                }

                                while ($row = mysqli_fetch_assoc($user)) {
                                ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['name'] ?></td>
                                        <td>
                                            <!-- Edit and Delete buttons for each Skill -->
                                            <button class='btn btn-outline-success btn-sm' onclick="getRow(<?= $row['id'] ?>)">Edit</button>
                                            <button class='btn btn-outline-danger btn-sm' onclick="deleteRow('<?= $row['id'] ?>','skills')">Delete</button>
                                        </td>
                                    </tr>

                                <?php  }
                                ?>


                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- Column 2 for managing Tags -->
                <div class="col-lg-6">
                    <!-- Section for adding Tags -->

                    <div class="pe-3">
                        <div class="d-flex">
                            <button class='btn btn-primary' style="width : 10rem;" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">ADD SKILLS</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">New Tag</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form id="tags_form">
                                        <div id="error_tags">

                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="mb-1">Tags Name</label>
                                                <input class="form-control" type="text" name="tags" placeholder="Enter your skill name">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="addtags" class="btn btn-primary">ADD</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tags Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include('include/connect.php');
                                $sql = "SELECT * FROM tags ";
                                $user = mysqli_query($con, $sql);

                                if (!$user) {
                                    die("invaled query: " . mysqli_error($con));
                                }

                                while ($row = mysqli_fetch_assoc($user)) {
                                ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['tagName'] ?></td>
                                        <td>
                                            <!-- <a class='btn btn-primary btn-sm' href='edit/editcategory.php?id='>Edit</a> -->
                                            <button class='btn btn-outline-success btn-sm' onclick="getTagRow(<?= $row['id'] ?>)">Edit</button>
                                            <button class='btn btn-outline-danger btn-sm' onclick="deleteRow('<?= $row['id'] ?>','tags')">Delete</button>
                                        </td>
                                    </tr>

                                <?php  }
                                ?>


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
     <!-- JavaScript for handling form submissions using AJAX -->
     <script>
        // ... (AJAX code for handling form submissions) ...
        document.addEventListener('DOMContentLoaded', function() {

            document.getElementById('skills_form').addEventListener('submit', function(event) {
                event.preventDefault();
                var formData = new FormData(this);
                console.log("jibdcnowbviuqdn ck iqdnm vqdsnc ;nSD JCN KSNBXOLCK SDJBWBXLKC KHISWVDX");
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'http://localhost/test/project/dashboard/create/addskils&tags.php', true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        document.getElementById('error_skill').innerHTML = xhr.responseText;
                    }
                };
                xhr.send(formData);
            });

            document.getElementById('tags_form').addEventListener('submit', function(event) {
                event.preventDefault();
                var formData = new FormData(this);
                console.log("jibdcnowbviuqdn ck iqdnm vqdsnc ;nSD JCN KSNBXOLCK SDJBWBXLKC KHISWVDX");
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'http://localhost/test/project/dashboard/create/addskils&tags.php', true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        document.getElementById('error_tags').innerHTML = xhr.responseText;
                    }
                };
                xhr.send(formData);
            });
        });
    </script>
    <!-- Bootstrap and other scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="js/agents.js"></script>
    <script src="./js/ajax.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>