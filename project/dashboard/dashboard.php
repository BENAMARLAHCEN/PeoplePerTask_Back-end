<?php
	include('./include/adminsession.php');
?>
<?php
function get_stats($column, $table)  {
    global $con;
    $sql= "SELECT COUNT(*) AS $column FROM $table";
    $result = mysqli_query($con, $sql);
    echo mysqli_fetch_assoc($result)[$column];
}
?>
<!DOCTYPE html>
<html lang="en">
<?php

$place = '';
?>
<?php
if (isset($_POST['addtask'])) {
    $task_desc = $_POST['task_desc'];
    $task_status = $_POST['task_status'];
    do {
        if (empty($task_desc) || empty($task_status)) {
            echo "error";
            break;
        }
        // add task

        $sql = "INSERT INTO task(description,status) VALUES ('$task_desc','$task_status');";
        $addtask = mysqli_query($con, $sql);

        if (!$addtask) {
            echo "query error" . mysqli_error($con);
            break;
        }

        header('location:dashboard.php');
        exit;
    } while (false);
} 
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="wrapper">
        <?php include('include/aside.php') ?>
        <div class="main">
            <?php include('include/navbar.php') ?>
            <section class="overview">
                <div class="row p-4">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body  p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">Projects</p>
                                        <div class="mt-4">
                                            <h3><strong><?php get_stats('project','projects'); ?></strong></h3>

                                        </div>
                                    </div>
                                    <div class="cursor">
                                        <img src="img/project-icon-1.svg" alt="icon">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">Cliens</p>
                                        <div class="mt-4">
                                            <h3><strong><?php get_stats('user','users'); ?></strong></h3>

                                        </div>
                                    </div>
                                    <div class="">
                                        <img src="img/project-icon-2.svg" alt="icon">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">Freelance</p>
                                        <div class="mt-4">
                                            <h3><strong></strong></h3>

                                        </div>
                                    </div>
                                    <div class="">
                                        <img src="img/project-icon-3.svg" alt="icon">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div>
                                        <p class="mb-0">testimonials</p>
                                        <div class="mt-4">
                                            <h3><strong><?php get_stats('testimonial','testimonials'); ?></strong></h3>

                                        </div>
                                    </div>
                                    <div class="">
                                        <img src="img/project-icon-4.svg" alt="icon">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="px-4">
                <div class="card mb-3">
                    <div class="row g-0 px-2">
                        <div class="col-xl-8 col-md-12 col-sm-12 col-12 p-4 ">
                            <div>
                                <h4>Today’s trends</h4>
                                <p>as of 27 oct 2023, 22:48 PM</p>
                            </div>
                            <div class="w-100" id="chart">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-sm-12 col-12">

                            <div class="list-group h-100 text-center">
                                <div class="list-group-item row h-20">
                                    <p>Cras justo odio</p>
                                    <p>449</p>
                                </div>
                                <div class="list-group-item row h-20">
                                    <p>Dapibus ac facilisis in</p>
                                    <p>449</p>
                                </div>
                                <div class="list-group-item row h-20">
                                    <p>Vestibulum at eros</p>
                                    <p>449</p>
                                </div>
                                <div class="list-group-item row h-20">
                                    <p>Dapibus ac facilisis in</p>
                                    <p>449</p>
                                </div>
                                <div class="list-group-item row h-20">
                                    <p>Vestibulum at eros</p>
                                    <p>449</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 row">
                <div class="col-xl-6 col-md-12 col-sm-12 col-12 ">
                    <div class="card">
                        <div class="row p-4">
                            <div class="col">
                                <p class="title">Unresolved tickets</p>
                                <p><span>Group:</span> Support</p>
                            </div>
                            <a class="col d-flex justify-content-end fw-medium" href="#">View details</a>

                        </div>
                        <div class="list-group">
                            <div class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Cras justo odio</p>
                                <p>4444</p>
                            </div>
                            <div class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Dapibus ac facilisis in</p>
                                <p>4444</p>
                            </div>
                            <div class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Vestibulum at eros</p>
                                <p>4444</p>
                            </div>
                            <div class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Vestibulum at eros</p>
                                <p>4444</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-12 col-12 ">
                    <div class="card">
                        <div class="row p-4">
                            <div class="col">
                                <p class="title">Tasks</p>
                                <p>Today</p>
                            </div>
                            <a class="col d-flex justify-content-end fw-medium" href="#">View all</a>

                        </div>
                        <div class="Admin_task list-group">
                            <div class="list-group-item px-3 text d-flex justify-content-between align-items-center p-4">
                                <p>Create new task</p>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/inactive.svg" alt="icon"></button>
                            </div>
                            <?php
                            $sql = "select * from task order by id desc limit 3";
                            $task = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_assoc($task)) {
                                echo "<div class='list-group-item px-3 text d-flex justify-content-between align-items-center p-4'>
                                        <p>$row[description]</p>
                                        <img src='$row[status]' alt='icon'>
                                      </div>
                            ";
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- edit modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add new task</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="post">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="mb-4">
                        <label class="form-label">Task description</label>
                        <input type="text" name="task_desc" class="form-control">

                    </div>

                    <!-- select input -->
                    <div class="mb-4">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="task_status" id="status">
                            <option value="img/default.svg">Default</option>
                            <option value="img/successnew.svg">New</option>
                            <option value="img/warning.svg">Urgent</option>
                        </select>
                    </div>


                    <div class="d-flex w-100 justify-content-center">
                        <button type="submit" name="addtask" class="btn btn-success btn-block mb-4 me-4">Save</button>
                        <div class="btn btn-secondary btn-block mb-4 me-4" data-bs-dismiss="modal">Close</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
    <script src="script.js"></script>
</body>

</html>