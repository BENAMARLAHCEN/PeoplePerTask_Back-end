<?php
session_start();
require_once './Controller/projectdetailcntr.php'
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
              <img class="w-100" src="./uploaded/<?=$pro['proimage']?>" title alt>
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
              <a href="#">Design</a>
              <a href="#">Development</a>
              <a href="#">Travel</a>
              <a href="#">Web Design</a>
              <a href="#">Marketing</a>
              <a href="#">Research</a>
              <a href="#">Managment</a>
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
                </ul><!-- end ul -->
              </div>
            </div><!-- end card-body -->
          </div><!-- end card -->
        </div>
        <div class="col-lg-4 m-15px-tb blog-aside">
          <div class="mt-5 mt-lg-0">
            <div class="card border shadow-none">
              <div class="card-header bg-transparent border-bottom py-3 px-4">
                <h5 class="font-size-16 mb-0">Project Summary <span class="float-end"><?=$_GET['id']?></span></h5>
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
                      <td><button class="btn btn-primary"  <?php if($_SESSION['role'] == 'freelance'){
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
              <div class="latest-post-aside media">
                <div class="lpa-left media-body">
                  <div class="lpa-title">
                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                  </div>
                  <div class="lpa-meta">
                    <a class="name" href="#">
                      Rachel Roth
                    </a>
                    <a class="date" href="#">
                      26 FEB 2020
                    </a>
                  </div>
                </div>
                <div class="lpa-right">
                  <a href="#">
                    <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title alt>
                  </a>
                </div>
              </div>
              <div class="latest-post-aside media">
                <div class="lpa-left media-body">
                  <div class="lpa-title">
                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                  </div>
                  <div class="lpa-meta">
                    <a class="name" href="#">
                      Rachel Roth
                    </a>
                    <a class="date" href="#">
                      26 FEB 2020
                    </a>
                  </div>
                </div>
                <div class="lpa-right">
                  <a href="#">
                    <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title alt>
                  </a>
                </div>
              </div>
              <div class="latest-post-aside media">
                <div class="lpa-left media-body">
                  <div class="lpa-title">
                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                  </div>
                  <div class="lpa-meta">
                    <a class="name" href="#">
                      Rachel Roth
                    </a>
                    <a class="date" href="#">
                      26 FEB 2020
                    </a>
                  </div>
                </div>
                <div class="lpa-right">
                  <a href="#">
                    <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title alt>
                  </a>
                </div>
              </div>
            </div>
          </div>


          <div class="widget widget-tags">
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
          </div>

        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="./javascript/ajax.js"></script>
</body>

</html>