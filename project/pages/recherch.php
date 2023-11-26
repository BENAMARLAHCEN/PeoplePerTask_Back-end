<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>People per task</title>

    <!-- style links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- animation links -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- link for icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!-- Navbar -->
    <?php include 'include/navbar.php' ?>



    <!-- <div class="sidebar">
    <h3 class="sidebar-title">Filter By</h3>
    <div class="sidebar-filters">
      <button class="sidebar-filter-btn">Budget</button>
      <button class="sidebar-filter-btn">Type</button>
    </div>
  </div> -->



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
            <div class="row justify-content-end">
                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/edu-img-1.jpg" alt="writing" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                Content Writing
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/edu-img-2.jpg" alt="design" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                UI / UX Design
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/jDy8xXKScmvoQzkQE1TF_cover.png" alt="writing" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                LOGOS
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/Col8iUaHRWmTIMruFjUu_website_design.jpg" alt="design" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                UI / UX Design
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/Col8iUaHRWmTIMruFjUu_website_design.jpg" alt="writing" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                Content Writing
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/pro.jpeg" alt="design" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                FULL Stack Developer
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/py.png" alt="writing" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                Python Developer
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/java.jpeg" alt="design" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                Java Developer
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/js.jpeg" alt="writing" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                JavaScript Developer
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/data.jpeg" alt="design" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                Data Aanalysis
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/edu-img-1.jpg" alt="writing" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                Websites, IT & Software
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/mb.jpeg" alt="design" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                Mobile Phones & Computing
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/M3cNKNGrSX2tEJnvE1yg_Mock-up11.png" alt="writing" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                Writing & Content
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/tr.jpeg" alt="design" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                Translation & Languages
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/edu-img-1.jpg" alt="writing" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                Content Writing
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-12">
                    <div class="card mb-4 card-hover border">
                        <a href="#!">
                            <img src="images/mr.jpeg" alt="design" class="img-fluid w-100 rounded-top-3">
                        </a>
                        <div class="card-body">
                            <h4 class="mb-3">
                                Sales & Marketing
                            </h4>
                            <!-- Rest of the card content -->
                        </div>
                    </div>
                </div>
            </div>








        </div>
    </div>
    </div>
    <?php include 'include/footer.php'?>
    <script src="dark.js"></script>
    <script src="javascript/recherch.js"></script>


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</body>

</html>