<?php
session_start();
require_once './Controller/projectdetailcntr.php';
session_write_close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">


  <title>project detail page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/detail.css">

</head>

<body>
  <?php include './include/navbar.php' ?>
  <div class="blog-single gray-bg">
    <div class="container">
      <div class="row align-items-start">
        <div class="col-lg-8 m-15px-tb">
          <article class="article">
            <div class="article-img">
              <img class="w-100" src="./uploaded/<?= $pro['proimage'] ?>" title alt>
            </div>
            <div class="article-title">
              <h2><?= $pro['title'] ?></h2>
              <div class="media d-flex">
                <div class="avatar">
                  <img src="./uploaded/<?= $pro['userimage'] ?>" title alt>
                </div>
                <div class="media-body">
                  <label><?= $pro['user_name'] ?></label>
                  <span><?= $pro['pcd'] ?></span>
                </div>
              </div>
            </div>
            <div class="article-content">
              <?= $pro['detail'] ?>
            </div>
            <div class="nav tag-cloud">
              <?php
              $sqli = "SELECT tagName,tags.id as id FROM project_tags p left join tags on tags.id = p.tag_id where project_id = $_GET[id]";
              $result = mysqli_query($con, $sqli);
              while ($row1 = mysqli_fetch_assoc($result)) {
              ?>
                <a href="./recherch.php?tag=<?= $row1['id'] ?>"><?= $row1['tagName'] ?></a>
              <?php } ?>
            </div>
          </article>
          <div class="contact-form article-comment">
            <h4>Leave a Reply</h4>
            <form id="contact-form" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="Name" id="name" placeholder="Name *" class="form-control" type="text">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="Email" id="email" placeholder="Email *" class="form-control" type="email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="message" id="message" placeholder="Your message *" rows="4" class="form-control"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="send">
                    <button class="px-btn theme"><span>Submit</span> <i class="arrow"></i></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              <div>
                <h4 class="card-title mb-4">Freelance Proposal</h4>
                <ul class="list-unstyled work-activity mb-0">
                  <?php
                  if ($pro['status'] == 'Y') {
                    $sql3 = "SELECT * FROM users WHERE ID_user = $pro[freeid]";
                    $result3 = mysqli_query($con,$sql3);
                    $row4 = mysqli_fetch_assoc($result3);
                    echo "<li class='work-item' data-date='Work by'>
                    <h6 class='lh-base mb-0'>$row4[user_name]</h6>
                    <p class='font-size-13 mb-2'>$row4[job]</p>
                    <p class='mb-0'>It will be as simple as occidental in fact, it will be
                      Occidental person, it will seem like simplified.</p>
                  </li>";
                  }else{
                    $sql4 = "SELECT * FROM proposal 
                    LEFT JOIN users ON users.ID_user = proposal.freelance_id 
                    WHERE project_id = $_GET[id]";
                    $result4 = mysqli_query($con,$sql4);
                    if (mysqli_num_rows($result4) == 0) {
                      echo '<div class="alert alert-warning">
                      <strong class="default"><i class="fa fa-envelope-o"></i></strong> No one sent proposal to this project.
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    </div>' ;
                    }else{
                      while($proposal = mysqli_fetch_assoc($result4)){
                  ?>

                  <li class="work-item" data-date="2020-21">
                    <h6 class="lh-base mb-0"><?= $proposal['user_name'] ?></h6>
                    <p class="font-size-13 mb-2"><?= $proposal['job'] ?></p>
                    <p>To achieve this, it would be necessary to have uniform grammar, and more
                      common words.</p>
                  </li>
                  <?php
                  }}}
                  ?>
                  
                </ul><!-- end ul -->
              </div>
            </div><!-- end card-body -->
          </div><!-- end card -->
        </div>
        <div class="col-lg-4 m-15px-tb blog-aside">
          <div class="mt-5 mt-lg-0">
            <div class="card border shadow-none">
              <div class="card-header bg-transparent border-bottom py-3 px-4">
                <h5 class="font-size-16 mb-0">Project Summary <span class="float-end"><?= $_GET['id'] ?></span></h5>
              </div>
              <div class="card-body p-4 pt-2">

                <div class="table-responsive">
                  <div id="demo"></div>
                  <table class="table mb-0">
                    <tbody>
                      <tr>
                        <td>Budget type :</td>
                        <td class="text-end"><?= $pro['budget_type'] ?></td>
                      </tr>
                      <tr>
                        <td>Budget : </td>
                        <td class="text-end"><?= $pro['budget'] ?> <?= $pro['currency'] ?></td>
                      </tr>
                      <tr>
                        <td>ENDS IN :</td>
                        <td class="text-end"><?= $pro['deadline'] ?></td>
                      </tr>
                      <tr class="bg-light">
                        <th>PROPOSED :</th>
                        <td class="text-end">
                          <span class="fw-bold">
                            <?= $pro['status'] ?>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                    <tr>
                      <td><button class="btn btn-primary" <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'freelance') {
                                                            echo "onclick='sendProposal($_GET[id],$_SESSION[id])'";
                                                          } ?>>SEND PROPOSAL</button></td>
                    </tr>
                  </table>
                </div>
                <!-- end table-responsive -->
              </div>
            </div>
          </div>
          <div class="widget widget-author">
            <div class="widget-title">
              <h3>Client</h3>
            </div>
            <div class="widget-body">
              <div class="media d-flex align-items-center">
                <div class="avatar">
                  <img src="./uploaded/<?= $pro['userimage'] ?>" title alt>
                </div>
                <div class="media-body">
                  <h6>Hello, I'm<br><?= $pro['user_name'] ?></h6>
                </div>
              </div>
              <p><?= $pro['biography'] ?></p>
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
                        <td><?= $pro["firstName"] ?> <?= $pro["lastName"] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Location</th>
                        <td><?= $pro["ville"] ?>, <?= $pro["regions"] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Language</th>
                        <td><?= $pro["language"] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Phone</th>
                        <td><?= $pro["phone"] ?></td>
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


          <div class="widget widget-post">
            <div class="widget-title">
              <h3>Trending Now</h3>
            </div>
            <div class="widget-body">
            </div>
          </div>


          <div class="widget widget-latest-post">
            <div class="widget-title">
              <h3>Latest Post</h3>
            </div>
            <div class="widget-body">
              <?php
              $sql2 = "SELECT * FROM projects WHERE ID_user = $pro[userID] and projects.id <> $_GET[id]";
              $result2 = mysqli_query($con, $sql2);
              while ($row3 = mysqli_fetch_assoc($result2)) {
              ?>
                <div class="latest-post-aside media">
                  <div class="lpa-left media-body">
                    <div class="lpa-title">
                      <h5><a href="./project_detail.php?id=<?= $row3['id'] ?>"><?= $row3['title'] ?></a></h5>
                    </div>
                    <div class="lpa-meta">
                      <a class="name" href="#">
                        <?= $pro['user_name'] ?>
                      </a>
                      <a class="date" href="#">
                        <?= $row3['creationDate'] ?>
                      </a>
                    </div>
                  </div>
                </div>
              <?php }
              ?>
            </div>
          </div>


          <!-- <div class="widget widget-tags">
            <div class="widget-title">
              <h3>Latest Tags</h3>
            </div>
            <div class="widget-body">
              <div class="nav tag-cloud">
                <a href="#">Design</a>
                <a href="#">Development</a>
                <a href="#">Travel</a>
                <a href="#">Web Design</a>
                <a href="#">Marketing</a>
                <a href="#">Research</a>
                <a href="#">Managment</a>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="./javascript/ajax.js"></script>
</body>

</html>