
<!DOCTYPE html>
<html lang="en">
<?php
include('./include/adminsession.php');
$active_overview = '';
$active_users = '';
$active_freelances = '';
$active_testimonials = 'active';
$active_project = '';
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
            <div class="Agents">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name of user</th>
                            <th>Commentaire</th>
                            <th>Date of create</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        include('include/connect.php');
                        $sql = "SELECT * FROM testimonials 
                    LEFT JOIN users on users.ID_user = testimonials.ID_user
                    ";
                        $tes = mysqli_query($con, $sql);

                        if (!$tes) {
                            die("invaled query: " . mysqli_error($con));
                        }

                        while ($row = mysqli_fetch_assoc($tes)) {
                        ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['user_name'] ?></td>
                                <td><?= $row['Commentaire'] ?></td>
                                <td><?= $row['date_c'] ?></td>
                                <td>
                                    <a class='btn btn-danger btn-sm' href='delete/deletetestimonial.php?id=<?= $row['id'] ?>'>Delete</a>
                                    <button class='btn btn-danger btn-sm' onclick="deleteRow('<?= $row['id'] ?>','testimonials')">Delete</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name of user</th>
                            <th>Commentaire</th>
                            <th>Date of create</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="js/agents.js"></script>
    <script src="./js/ajax.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>