<!DOCTYPE html>
<html lang="en">

<?php 
$active_overview = '';
$active_agents = 'active';
$active_project = '';
$active_contact = '';
$active_categorie = '';
?>
<?php include('include/head.php') ?>
<?php include('include/connect.php') ?>
<body>
    <div class="wrapper">
        <?php include('include/aside.php') ?>
        <div class="main">
        <?php include('include/navbar.php') ?>
        <a class='btn btn-primary' style="width : 10rem;" href='adduser.php'>ADD USER</a>
            <table id="example" class="Agents table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                //    $servername = "localhost";
                //    $username = "root";
                //    $password = "";
                //    $database = "peoplepertask";
                   
                //    // Create connection
                //    $con = mysqli_connect($servername, $username, $password,$database);
                   
                //    // Check connection
                //    if (mysqli_connect_error()) {
                //      die("Connection failed: " . mysqli_connect_error());
                //    }


                   $sql = "SELECT * FROM users 
                   LEFT JOIN ville on users.City = ville.id
                   LEFT JOIN region on ville.region = region.id
                   ";
                   $result = mysqli_query($con,$sql);

                   if (!$result) {
                    die("invaled query: " . mysqli_error());
                  }

                  while ($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>$row[ID_user]</td>
                        <td>$row[user_name]</td>
                        <td>$row[email]</td>
                        <td>$row[userPassword]</td>
                        <td>$row[birthday]</td>
                        <td>$row[ville] $row[region] $row[PostalCode]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='/project/dashboard/edit.php?id=$row[ID_user]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/project/dashboard/delete.php?id=$row[ID_user]'>Delete</a>
                        </td>
                    </tr>
                    ";
                  }
                ?>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>
        <script src="js/agents.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>