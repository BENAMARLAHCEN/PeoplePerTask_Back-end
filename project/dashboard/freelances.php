<!DOCTYPE html>
<html lang="en">

<?php 
$active_overview = '';
$active_users = '';
$active_freelances = 'active';
$active_testimonials = '';
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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD FREELANCE
</button>
            <div class="Agents">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FreelanceName</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Skills</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php
               


                   $sql = "SELECT * FROM freelance 
                   LEFT JOIN users on users.ID_user = freelance.ID_user
                   ";
                   $user = mysqli_query($con,$sql);

                   if (!$user) {
                    die("invaled query: " . mysqli_error());
                  }

                  while ($row = mysqli_fetch_assoc($user)){
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[FreelanceName]</td>
                        <td>$row[email]</td>
                        <td>$row[userPassword]</td>
                        <td>$row[skills]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='edit.php?id=$row[ID_user]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id=$row[ID_user]'>Delete</a>
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

   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add freelance</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
      </div>
      </div>
    </div>
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