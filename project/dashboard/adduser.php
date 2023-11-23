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
<body>
    <div class="wrapper">
        <?php include('include/aside.php') ?>
        <div class="main">
            <?php include('include/navbar.php') ?>
            
            <div class="modal-content bg-white" >
                <form id="forms">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                      <div class="col">
                        <div class="">
                          <label class="form-label" >First name</label>
                          <input type="text" name="firstname" class="form-control first_name" >
                        </div>
                      </div>
                      <div class="col">
                        <div class="">
                            <label class="form-label" >Last name</label>
                          <input type="text" name="lastname" class="form-control last_name" >
                        </div>
                      </div>
                    </div>
                  
                    <!-- Text input -->
                    <div class="mb-4">
                        <label class="form-label" >Email</label>
                      <input type="text" name="email" class="form-control email" >
                    </div>
                  
                    <!-- Text input -->
                    <div class="mb-4">
                        <label class="form-label">Title</label>
                      <input type="text" name="" class="form-control title_user" >
                    </div>
                  
                    <!-- Number input -->
                    <div class=" mb-4">
                      <label class="form-label">Status</label>
                      <input type="text" class="form-control status" >
                    </div>
                  
                    <!-- Message input -->
                    <div class=" mb-4">
                      <label class="form-label">Position</label>
                      <textarea class="form-control position"  rows="4"></textarea>
                    </div>
                  
                    <!-- Submit button -->
                    <div class="d-flex w-100 justify-content-center">
                    <p class="error text-danger"></p>
                    <button type="submit" class="btn btn-success btn-block mb-4 me-4 save">Save Edit</button>
                    <button class="btn btn-danger btn-block mb-4 annuler">Annuler</button>
                    </div>
                  </form>
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>
        <script src="js/agents.js"></script>
</body>

</html>