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

<body>
    <div class="wrapper">
        <?php include('include/aside.php') ?>
        <div class="main">
        <?php include('include/navbar.php') ?>
        <a class='btn btn-primary' style="width : 10rem;" href='create/creatproject.php'>ADD PROJECT</a>
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
                    include('include/connect.php');
                   $sql = "SELECT projects.id as id_pro,title,project_description,CategoryName,subName FROM projects 
                   LEFT JOIN sub_categories on sub_categories.id = projects.id_sub_category
                   LEFT JOIN categories on categories.id = sub_categories.id_category
                   ";
                   $user = mysqli_query($con,$sql);

                   if (!$user) {
                    die("invaled query: " . mysqli_error($con));
                  }

                  while ($row = mysqli_fetch_assoc($user)){
                    echo "
                    <tr>
                        <td>$row[id_pro]</td>
                        <td>$row[title]</td>
                        <td>$row[project_description]</td>
                        <td>$row[CategoryName]</td>
                        <td>$row[subName]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='edit/editproject.php?id=$row[id_pro]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete/deleteproject.php?id=$row[id_pro]'>Delete</a>
                        </td>
                    </tr>
                    ";
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="js/agents.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>