<?php
require_once './Controller/profilecontroller.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">

</head>

<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.2.96/css/materialdesignicons.min.css" integrity="sha512-LX0YV/MWBEn2dwXCYgQHrpa9HJkwB+S+bnBpifSOTO1No27TqNMKYoAn6ff2FBh03THAzAiiCwQ+aPX+/Qt/Ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php include './include/navbar.php' ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="text-center border-end">
                                    <img src="./uploaded/<?= $user['userimage'] ?>" class="img-fluid avatar-xxl rounded-circle" alt>
                                    <h4 class="text-primary font-size-20 mt-3 mb-2"><?= $user["user_name"] ?></h4>
                                    <h5 class="text-muted font-size-13 mb-0"><?= $user["job"] ?></h5>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="ms-3">
                                    <div>
                                        <h4 class="card-title mb-2">Biography</h4>
                                        <p class="mb-0 text-muted"><?= $user["biography"] ?></p>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-md-12">
                                            <div>
                                                <p class="text-muted mb-2 fw-medium"><i class="mdi mdi-email-outline me-2"></i><a href="#" class="__cf_email__" data-cfemail="377d5659445f40525b5b4477474558555e541954585a"><?= $user["email"] ?></a>
                                                </p>
                                                <p class="text-muted fw-medium mb-0"><i class="mdi mdi-phone-in-talk-outline me-2"></i><?= $user["phone"] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs nav-tabs-custom border-bottom-0 mt-3 nav-justfied" role="tablist">
                                        <li class="nav-item" role="presentation">
                                        <a class="nav-link px-4" href="?un=<?=$_GET['un']?>" >
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Projects</span>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link px-4" href="?un=<?=$_GET['un']?>&offer=" >
                                                <span class="d-block d-sm-none"><i class="mdi mdi-menu-open"></i></span>
                                                <span class="d-none d-sm-block">Offer</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="tab-content p-4">
                        <div class="tab-pane active show" id="projects-tab" role="tabpanel">
                            <div class="d-flex align-items-center">
                                <div class="flex-1">
                                    <h4 class="card-title mb-4">Projects</h4>
                                </div>
                            </div>
                            <div class="row" id="all-projects">
                                <?php
                                
                                if (mysqli_num_rows($result3) > 0) {
                                    while ($project = mysqli_fetch_assoc($result3)) {
                                ?>
                                        <div class="col-md-6" id="project-items-1">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex mb-3">
                                                        <div class="flex-grow-1 align-items-start">
                                                            <div>
                                                                <h6 class="mb-0 text-muted">
                                                                    <i class="mdi mdi-circle-medium text-danger fs-3 align-middle"></i>
                                                                    <span class="team-date"><?=$project['creationDate']?></span>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="mb-4">
                                                        <h5 class="mb-1 font-size-17 team-title"><?=$project['CategoryName']?></h5>
                                                        <p class="text-muted mb-0 team-description"><?=$project['title']?></p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="avatar-group float-start flex-grow-1 task-assigne">
                                                            
                                                        </div>
                                                        <div class="align-self-end">
                                                            <span class="badge badge-soft-danger p-2 team-status">Pending</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }else {
                                ?>
                                <div class="col-md-12">
                                Unfortunately, this freelancer has not been actively contributing to the project as expected.
                                </div>

                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="pb-2">
                            <h4 class="card-title mb-3">About</h4>
                            <p><?= $user["biography"] ?></p>
                            <ul class="ps-3 mb-0">
                                <li>it will seem like simplified.</li>
                                <li>To achieve this, it would be necessary to have uniform pronunciation</li>
                            </ul>

                        </div>
                        <hr>
                        <div class="pt-2">
                            <h4 class="card-title mb-4">My Skill</h4>
                            <div class="d-flex gap-2 flex-wrap">
                                <?php while ($skils) {

                                ?>
                                    <span class="badge badge-soft-secondary p-2"><?= $skils["name"] ?></span>
                                <?php

                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="card-title mb-4">Personal Details</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Name</th>
                                            <td><?= $user["firstName"] ?> <?= $user["lastName"] ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Location</th>
                                            <td><?= $user["ville"] ?>, <?= $user["region"] ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Language</th>
                                            <td><?= $user["language"] ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Member since</th>
                                            <td><?= $user["creationDate"] ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Website</th>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a5b58590b087a4a485558535914595557">[web site&#160;protected]</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card">
                    <div class="card-body">
                        <div>
                            <h4 class="card-title mb-4">Work Experince</h4>
                            <ul class="list-unstyled work-activity mb-0">
                                <li class="work-item" data-date="2020-21">
                                    <h6 class="lh-base mb-0">ABCD Company</h6>
                                    <p class="font-size-13 mb-2">Web Designer</p>
                                    <p>To achieve this, it would be necessary to have uniform grammar, and more
                                        common words.</p>
                                </li>
                                <li class="work-item" data-date="2019-20">
                                    <h6 class="lh-base mb-0">XYZ Company</h6>
                                    <p class="font-size-13 mb-2">Graphic Designer</p>
                                    <p class="mb-0">It will be as simple as occidental in fact, it will be
                                        Occidental person, it will seem like simplified.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>