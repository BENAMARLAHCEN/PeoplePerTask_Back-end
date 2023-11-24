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
?>
<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head> -->
<?php
include('include/head.php');
?>

<body>
    <div class="wrapper">
        <?php include('include/aside.php') ?>
        <div class="main">
        <?php include('include/navbar.php') ?>
        <div class="d-flex">
        <a class='btn btn-primary' style="width : 10rem;" href='adduser.php'>ADD CATEDORY</a>
        <a class='btn btn-primary' style="width : 14rem;" href='adduser.php'>ADD SUB-CATEDORY</a>
        </div>
            <div class="Agents">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Number of project</th>
                        <th>Number of sub_category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    include('include/connect.php');
                   $sql = "SELECT categories.id as id_cat,CategoryName,COUNT(projects.id) as projectN,COUNT(sub_categories.id) as categoryN FROM categories
                   LEFT JOIN sub_categories on categories.id = sub_categories.id_category
                   LEFT JOIN projects on categories.id = projects.id_categorie
                   GROUP BY categories.id
                   ";
                   $user = mysqli_query($con,$sql);

                   if (!$user) {
                    die("invaled query: " . mysqli_error());
                  }

                  while ($row = mysqli_fetch_assoc($user)){
                    echo "
                    <tr>
                        <td>$row[id_cat]</td>
                        <td>$row[CategoryName]</td>
                        <td>$row[projectN]</td>
                        <td>$row[categoryN]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='editcat.php?id=$row[id_cat]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='deletecat.php?id=$row[id_cat]'>Delete</a>
                        </td>
                    </tr>
                    ";
                  }
                ?>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Number of project</th>
                        <th>Number of sub_category</th>
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