<?php
include './dashboard/include/connect.php';
if (isset($_GET['id'])) {
    echo "<script>
    document.addEventListener('DOMContentLoaded',function (){
        showProjectByCatg($_GET[id]);
    })
</script>";
} else {
    echo "<script>
    document.addEventListener('DOMContentLoaded',function (){
        showProject();
    })
</script>";
}
// $project = mysqli_query($con, $sql);
$sqli = "SELECT * FROM projects order by creationDate limit 4;";
$new = mysqli_query($con, $sqli);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>People per task</title>

    <!-- style links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <?php include 'include/navbar.php' ?>

    <div class="py-6">

        <div class="container">

            <div class=" p-3 card search-form">
                <div class="card-body p-0">
                    <form id="search-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="row no-gutters">
                                    <div class="col-lg-3 col-md-3 col-sm-12 px-2">
                                        <select onchange="filterbyCategory()" class="form-control" id="category">
                                            <?php 
                                            include './dashboard/include/category.php';
                                            ?>
                                        </select>
                                    </div>
                                    <div id="searchinput" class="col-lg-8 col-md-6 col-sm-12 p-0">
                                        <input oninput="searchbytags()" type="text" placeholder="Search..." class="form-control" id="search" name="search">
                                    </div>
                                    <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                        <button type="submit" class="btn btn-base">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-9 mb-3">
                    <div class="row text-left mb-5">
                        <div class="col-lg-6 mb-3 mb-sm-0">
                            <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" style="width: 100%;">
                                <select onchange="filterbySubCategory()" id="subCategory" class="form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" data-toggle="select" tabindex="-98">
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-right">
                            <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" style="width: 100%;">
                                <select onchange="changeFilter()" id="filterType" class="form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" data-toggle="select" tabindex="-98">
                                    <option value="1"> Filter by </option>
                                    <option value="1"> Tags </option>
                                    <option value="2"> Title </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row allProject-section">

                    </div>
                </div>

                <div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
                    <div style="visibility: hidden; display: none; width: 285px; height: 801px; margin: 0px; float: none; position: static; inset: 85px auto auto;">
                    </div>
                    <div data-settings="{&quot;parent&quot;:&quot;#content&quot;,&quot;mind&quot;:&quot;#header&quot;,&quot;top&quot;:10,&quot;breakpoint&quot;:992}" data-toggle="sticky" class="sticky" style="top: 85px;">
                        <div class="sticky-inner">
                            <a class="btn btn-lg btn-block btn-success rounded-0 py-4 mb-3 bg-op-6 roboto-bold" href="./contact.php">Ask
                                Question</a>
                            <div class="bg-white mb-3">
                                <h4 class="px-3 py-4 op-5 m-0">
                                    Active Project
                                </h4>
                                <hr class="m-0">
                                <?php
                                while ($row = mysqli_fetch_assoc($new)) {
                                ?>
                                    <div class="pos-relative px-3 py-3">
                                        <h6 class="text-primary text-sm">
                                            <a href="./project_detail.php?id=<?=$row['id']?>" class="text-primary"><?= $row['title'] ?></a>
                                        </h6>
                                    </div>
                                    <hr class="m-0">
                                <?php }
                                ?>

                            </div>
                            <!-- <div class="bg-white text-sm">
                                <h4 class="px-3 py-4 op-5 m-0 roboto-bold">
                                    Stats
                                </h4>
                                <hr class="my-0">
                                <div class="row text-center d-flex flex-row op-7 mx-0">
                                    <div class="col-sm-6 flex-ew text-center py-3 border-bottom border-right"> <a class="d-block lead font-weight-bold" href="#">58</a> Topics </div>
                                    <div class="col-sm-6 col flex-ew text-center py-3 border-bottom mx-0"> <a class="d-block lead font-weight-bold" href="#">1.856</a> Posts </div>
                                </div>
                                <div class="row d-flex flex-row op-7">
                                    <div class="col-sm-6 flex-ew text-center py-3 border-right mx-0"> <a class="d-block lead font-weight-bold" href="#">300</a> Members </div>
                                    <div class="col-sm-6 flex-ew text-center py-3 mx-0"> <a class="d-block lead font-weight-bold" href="#">DanielD</a> Newest Member </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>
    <?php include 'include/footer.php' ?>
    <script src="dark.js"></script>
    <script src="javascript/recherch.js"></script>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="./javascript/ajax.js"></script>
</body>

</html>