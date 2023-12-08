<?php
include './dashboard/include/connect.php';
if (isset($_GET['id'])) {
    $sql = "SELECT * FROM projects where id_categorie = $_GET[id]";
} else {
    $sql = "SELECT * FROM projects";
}
$project = mysqli_query($con, $sql);
$sqli = "SELECT * FROM projects order by creationDate limit 4;";
$new = mysqli_query($con, $sqli);
?>
<!doctype html>
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

            <div class="container text-center"> <!-- Container for centering -->
                <div class="row">
                    <div class="col-12 col-md-4 mx-auto"> <!-- Center the column horizontally -->
                        <form class="d-flex mb-5">
                            <input type="search" class="form-control rounded" id="serchitem" placeholder="Search" aria-label="Search" aria-describedby="search-addon" onkeyup="search()" />
                            <span class="input-group-text border-0" id="search-addon">
                                <button type="button" class="btn btn-outline" id="btnn">search</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-9 mb-3">
                    <div class="row text-left mb-5">
                        <div class="col-lg-6 mb-3 mb-sm-0">
                            <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" style="width: 100%;">
                                <select class="form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" data-toggle="select" tabindex="-98">
                                    <option> Categories </option>
                                    <option> Learn </option>
                                    <option> Share </option>
                                    <option> Build </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-right">
                            <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" style="width: 100%;">
                                <select class="form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" data-toggle="select" tabindex="-98">
                                    <option> Filter by </option>
                                    <option> Votes </option>
                                    <option> Replys </option>
                                    <option> Views </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        while ($row = mysqli_fetch_assoc($project)) {
                        ?>
                            <div class="col-md-6">
                                
                                <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
                                    <img src="./uploaded/<?= $row['image'] ?>" alt="">
                                    <div class="row align-items-center">
                                        <div class="col-md-8 mb-3 mb-sm-0">
                                            <h5>
                                                <a href="#" class="text-primary"><?= $row['title'] ?></a>
                                            </h5>
                                            <p class="text-sm"><?= $row['project_description'] ?></p>
                                            <div class="text-sm op-5"> <a class="text-black mr-2" href="#">#C++</a> <a class="text-black mr-2" href="#">#AppStrap Theme</a> <a class="text-black mr-2" href="#">#Wordpress</a> </div>
                                        </div>
                                        <div class="col-md-4 op-7">
                                            <div class="row text-center op-7">
                                                <a class="col px-1 pt-3" href="project.php?id=<?= $row['id'] ?>"> <span class="d-block text-sm">budget</span> <span class="d-block text-sm"><?= $row['budget'] ?>$</span> </a>
                                                <a class="col px-1" href="project_detail.php?id=<?= $row['id'] ?>"> <i class="ion-ios-eye-outline icon-1x"></i> <span class="d-block text-sm">Read more</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>

                <div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
                    <div style="visibility: hidden; display: none; width: 285px; height: 801px; margin: 0px; float: none; position: static; inset: 85px auto auto;">
                    </div>
                    <div data-settings="{&quot;parent&quot;:&quot;#content&quot;,&quot;mind&quot;:&quot;#header&quot;,&quot;top&quot;:10,&quot;breakpoint&quot;:992}" data-toggle="sticky" class="sticky" style="top: 85px;">
                        <div class="sticky-inner">
                            <a class="btn btn-lg btn-block btn-success rounded-0 py-4 mb-3 bg-op-6 roboto-bold" href="#">Ask
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
                                            <a href="#" class="text-primary"><?= $row['title'] ?></a>
                                        </h6>
                                        <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">39 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">AppStrapMaster</a></p>
                                    </div>
                                    <hr class="m-0">
                                <?php }
                                ?>

                            </div>
                            <div class="bg-white text-sm">
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
                            </div>
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
</body>

</html>