<!DOCTYPE html>
<html lang="en">
<?php 
$active_overview = '';
$active_users = '';
$active_freelances = '';
$active_project = 'active';
$active_contact = '';
$active_categorie = '';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="wrapper">
        <?php include('include/aside.php') ?>
        <div class="main">
        <?php include('include/navbar.php') ?>
        <a class='btn btn-primary' style="width : 10rem;" href='adduser.php'>ADD FREELANCE</a>
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
               


                   $sql = "SELECT * FROM projects 
                   LEFT JOIN sub_categories on sub_categories.id = projects.id_sub_category
                   LEFT JOIN categories on categories.id = sub_categories.id_category
                   ";
                   $user = mysqli_query($con,$sql);

                   if (!$user) {
                    die("invaled query: " . mysqli_error());
                  }

                  while ($row = mysqli_fetch_assoc($user)){
                    echo "
                    <tr>
                        <td>$row[id_sub_category]</td>
                        <td>$row[title]</td>
                        <td>$row[project_description]</td>
                        <td>$row[CategoryName]</td>
                        <td>$row[subName]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
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
</body>

</html>