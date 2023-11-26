<?php
include '../dashboard/include/connect.php'
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- animation links -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- link for icons -->
  <script src="https://kit.fontawesome.com/6cd9388e68.js" crossorigin="anonymous"></script>
  <!-- animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

  <?php include 'include/navbar.php' ?>
  <!-- hero section -->
  <section class="hero">
    <div class="container ">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12 align-items-center">
          <div class="text-content">
            <div class="text-label">
              <h3 class="text-dark">discover your perfect</h3>
            </div>
            <div class="text-hero-bold">
              <h1 class="display-1 fw-bold mb-3">free<span class="text-half-orange-effect">lancer</span></h1>
            </div>
            <div class="text-hero-p ">
              <p class="pe-lg-10 mb-5">"Welcome to people per task, the premier destination for connecting talented
                freelancers with exciting projects and opportunities. Whether you're a skilled professional seeking your
                next gig or a business in need of top-tier expertise, we've got you covered. Our platform empowers you
                to work with the best and achieve your goals."</p>
            </div>
            <div class="hero-button">
              <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center py-3">
          <div class="position-relative hero-img-container ">
            <img src="./images/heroimg.svg" alt="hero svg" id="hero-img-animation" class="mx-auto scale-hero-img" style="width: 40vw;">
            <img src="./images/flowerxl.svg" alt="flower" id="flower-img-animation" class=" position-absolute end-0 bottom-0 " style="width: 8vw;">
            <img src="./images/flowerm.svg" alt="icon" id="flower-small-animation" class=" position-absolute bottom-0  " style="width: 4vw;">
            <img src="./images/flowerxl.svg" alt="flower" id="flowerxl-img-animation" class=" position-absolute  bottom-0 end-100 " style="width: 8vw;">
            <img src="./images/Vectorsetting.svg" id="setting-icon-animation" alt="setting" class=" position-absolute  top-0 end-100  " style="width: 4vw;">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- category section -->
  <section class="category my-4 py-4">
    <div class="container ">
      <div class="row">
        <div class="col-12">
          <div class="row text-center justify-content-center">
            <h2 class="display-5 fw-bold mb-3">Browse talent <span class="text-half-orange-effect">by category</span>
            </h2>
            <div class="text-hero-p col-10 ">
              <p class="pe-lg-10 mb-5">your gateway to a diverse community of skilled freelancers ready to bring your
                projects to life. We've organized our talent pool into various categories to help you find the perfect
                match for your unique needs.Our team members are experts in all facets of the design industry including:
                print design, illustration, branding, identity and more.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
          <div class="card category-card-style my-2">
            <div class="d-flex justify-content-center ">
              <img src="./images/categorycoding.svg" alt="category">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
          <div class="card category-card-style my-2">
            <div class="d-flex justify-content-center ">
              <img src="./images/categoryillustration.svg" alt="">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
          <div class="card category-card-style my-2">
            <div class="d-flex justify-content-center ">
              <img src="./images/categoryMicrophone.svg" alt="">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
          <div class="card category-card-style my-2">
            <div class="d-flex justify-content-center ">
              <img src="./images/categoryPhotographer.svg" alt="">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
          <div class="card category-card-style my-2">
            <div class="d-flex justify-content-center">
              <img src="./images/categorycoding.svg" alt="">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
          <div class="card category-card-style my-2">
            <div class="d-flex justify-content-center ">
              <img src="./images/categorycoding.svg" alt="">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
          <div class="card category-card-style my-2">
            <div class="d-flex justify-content-center">
              <img src="./images/categorycoding.svg" alt="">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
          <div class="card category-card-style my-2">
            <div class="d-flex justify-content-center ">
              <img src="./images/categorycoding.svg" alt="">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- famous freelancers -->
  <section class="section-famous-freelancers my-4 py-4">
    <div class="container position-relative">
      <img src="./images/Circle2.svg" id="circles-animation1" alt="flower" class=" position-absolute end-0 bottom-0 ">
      <img src="./images/Circle2.svg" id="circles-animation2" alt="flower" class=" position-absolute end-0 bottom-10 ">
      <img src="./images/Circle4.svg" id="circles-animation3" alt="flower" class=" position-absolute end-0 top-10 ">
      <img src="./images/Circle4.svg" id="circles-animation4" alt="flower" class=" position-absolute end-100 top-10 ">
      <div class="row z-index-modifier">
        <div class="col-12">
          <div class="row text-center justify-content-center">
            <h2 class="display-5 fw-bold mb-3 z-index-modifier">Expert free<span class="text-half-orange-effect z-index-modifier">lancers</span>
            </h2>
            <div class="text-hero-p col-10 z-index-modifier">
              <p class="pe-lg-10 mb-5">Search and contact freelancers directly with no obligation </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row z-index-modifier">
        <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center ">
          <div class="card" style="max-width: 23rem;">
            <img class="my-2 " src="images/fatiphoto.svg" alt="lahcen" style="height: 9rem; ">
            <div class="card-body ">
              <div class="card-head">
                <h5 class="card-title fw-semibold text-center">Fati</h5>
              </div>

              <p class="text-center ">full-Stack Developer</p>
              <div class="d-flex align-items-center justify-content-center">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_lightimpty.svg" alt="">
              </div>

              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="hero-button d-flex justify-content-center my-2">
                <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
              </div>
              <div class="card-footer my-2">
                <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                <div>
                  <div class="row project-num my-2 d-flex justify-content-between">
                    <div class="col-3  ">
                      <span class="row">Project</span>
                      <span class="row">5457</span>
                    </div>
                    <div class="col-6">
                      <span class="row">Member since</span>
                      <span class="row">01-11-2020</span>
                    </div>
                    <div class="col-3">
                      <span class="row fw-bold fs-4" style="color: green;">50$</span>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center ">
          <div class="card" style="max-width: 23rem;">
            <img class="my-2 " src="images/lahcenphoto.svg" alt="lahcen" style="height: 9rem; ">
            <div class="card-body ">
              <div class="card-head">
                <h5 class="card-title fw-semibold text-center">lahcen</h5>
              </div>

              <p class="text-center ">UX/UI Designer</p>
              <div class="d-flex align-items-center justify-content-center">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">

              </div>

              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="hero-button d-flex justify-content-center my-2">
                <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
              </div>
              <div class="card-footer my-2">
                <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                <div>
                  <div class="row project-num my-2 d-flex justify-content-between">
                    <div class="col-3  ">
                      <span class="row">Project</span>
                      <span class="row">5457</span>
                    </div>
                    <div class="col-6">
                      <span class="row">Member since</span>
                      <span class="row">01-11-2020</span>
                    </div>
                    <div class="col-3">
                      <span class="row fw-bold fs-4" style="color: green;">700$</span>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center ">
          <div class="card" style="max-width: 23rem;">
            <img class="my-2 position-relative" src="images/gara.svg" alt="gara" style="height: 9rem; ">
            <div class="card-body ">
              <div class="card-head">
                <h5 class="card-title fw-semibold text-center">khalid gara</h5>
              </div>

              <p class="text-center ">Video Editing</p>
              <div class="d-flex align-items-center justify-content-center">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_lightimpty.svg" alt="">
              </div>

              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="hero-button d-flex justify-content-center my-2">
                <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
              </div>
              <div class="card-footer my-2">
                <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                <div>
                  <div class="row project-num my-2 d-flex justify-content-between">
                    <div class="col-3  ">
                      <span class="row">Project</span>
                      <span class="row">5457</span>
                    </div>
                    <div class="col-6">
                      <span class="row">Member since</span>
                      <span class="row">11-11-2023</span>
                    </div>
                    <div class="col-3">
                      <span class="row fw-bold fs-4" style="color: green;">87$</span>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display" style="display: none !important;">
          <div class="card" style="max-width: 23rem;">
            <img class="my-2 position-relative" src="images/nan.svg" alt="lahcen" style="height: 9rem; ">
            <div class="card-body ">
              <div class="card-head">
                <h5 class="card-title fw-semibold text-center">nana late</h5>
              </div>

              <p class="text-center ">Song Writer</p>
              <div class="d-flex align-items-center justify-content-center">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_lightimpty.svg" alt="">
              </div>

              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="hero-button d-flex justify-content-center my-2">
                <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
              </div>
              <div class="card-footer my-2">
                <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                <div>
                  <div class="row project-num my-2 d-flex justify-content-between">
                    <div class="col-3  ">
                      <span class="row">Project</span>
                      <span class="row">5457</span>
                    </div>
                    <div class="col-6">
                      <span class="row">Member since</span>
                      <span class="row">01-11-2020</span>
                    </div>
                    <div class="col-3">
                      <span class="row fw-bold fs-4" style="color: green;">5$</span>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display" style="display: none !important;">
          <div class="card" style="max-width: 23rem;">
            <img class="my-2 position-relative" src="images/dad.svg" alt="lahcen" style="height: 9rem; ">
            <div class="card-body ">
              <div class="card-head">
                <h5 class="card-title fw-semibold text-center">Sand john</h5>
              </div>

              <p class="text-center ">Beat Maker</p>
              <div class="d-flex align-items-center justify-content-center">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">

              </div>

              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="hero-button d-flex justify-content-center my-2">
                <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
              </div>
              <div class="card-footer my-2">
                <span class="text-body-secondary my-2">HipHop-Dj-beat-grandM</span>
                <div>
                  <div class="row project-num my-2 d-flex justify-content-between">
                    <div class="col-3  ">
                      <span class="row">Project</span>
                      <span class="row">57</span>
                    </div>
                    <div class="col-6">
                      <span class="row">Member since</span>
                      <span class="row">01-02-2016</span>
                    </div>
                    <div class="col-3">
                      <span class="row fw-bold fs-4" style="color: green;">800$</span>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display" style="display: none !important;">
          <div class="card" style="max-width: 23rem;">
            <img class="my-2 position-relative" src="images/nanana.svg" alt="lahcen" style="height: 9rem; ">
            <div class="card-body ">
              <div class="card-head">
                <h5 class="card-title fw-semibold text-center">kaylie sffa</h5>
              </div>

              <p class="text-center ">Advertising</p>
              <div class="d-flex align-items-center justify-content-center">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_lightimpty.svg" alt="">
              </div>

              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="hero-button d-flex justify-content-center my-2">
                <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
              </div>
              <div class="card-footer my-2">
                <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                <div>
                  <div class="row project-num my-2 d-flex justify-content-between">
                    <div class="col-3  ">
                      <span class="row">Project</span>
                      <span class="row">5457</span>
                    </div>
                    <div class="col-6">
                      <span class="row">Member since</span>
                      <span class="row">01-11-2020</span>
                    </div>
                    <div class="col-3">
                      <span class="row fw-bold fs-4" style="color: green;">72$</span>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display" style="display: none !important;">
          <div class="card" style="max-width: 23rem;">
            <img class="my-2 position-relative" src="images/othmanphoto.svg" alt="lahcen" style="height: 9rem; ">
            <div class="card-body ">
              <div class="card-head">
                <h5 class="card-title fw-semibold text-center">othman</h5>
              </div>

              <p class="text-center ">Song Writer</p>
              <div class="d-flex align-items-center justify-content-center">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_lightimpty.svg" alt="">
              </div>

              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="hero-button d-flex justify-content-center my-2">
                <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
              </div>
              <div class="card-footer my-2">
                <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                <div>
                  <div class="row project-num my-2 d-flex justify-content-between">
                    <div class="col-3  ">
                      <span class="row">Project</span>
                      <span class="row">5457</span>
                    </div>
                    <div class="col-6">
                      <span class="row">Member since</span>
                      <span class="row">01-11-2020</span>
                    </div>
                    <div class="col-3">
                      <span class="row fw-bold fs-4" style="color: green;">5$</span>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display" style="display: none !important;">
          <div class="card" style="max-width: 23rem;">
            <img class="my-2 position-relative" src="images/kala.svg" alt="lahcen" style="height: 9rem; ">
            <div class="card-body ">
              <div class="card-head">
                <h5 class="card-title fw-semibold text-center">Grand-M</h5>
              </div>

              <p class="text-center ">Beat Maker</p>
              <div class="d-flex align-items-center justify-content-center">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">

              </div>

              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="hero-button d-flex justify-content-center my-2">
                <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
              </div>
              <div class="card-footer my-2">
                <span class="text-body-secondary my-2">HipHop-Dj-beat-grandM</span>
                <div>
                  <div class="row project-num my-2 d-flex justify-content-between">
                    <div class="col-3  ">
                      <span class="row">Project</span>
                      <span class="row">57</span>
                    </div>
                    <div class="col-6">
                      <span class="row">Member since</span>
                      <span class="row">01-02-2016</span>
                    </div>
                    <div class="col-3">
                      <span class="row fw-bold fs-4" style="color: green;">800$</span>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class=" col-lg-4 col-md-6 col-12 my-4 d-flex flex-column align-items-center freelancer-card-display" style="display: none !important;">
          <div class="card" style="max-width: 23rem;">
            <img class="my-2 position-relative" src="images/ouissal.svg" alt="lahcen" style="height: 9rem; ">
            <div class="card-body ">
              <div class="card-head">
                <h5 class="card-title fw-semibold text-center">Ouissal</h5>
              </div>

              <p class="text-center ">Advertising</p>
              <div class="d-flex align-items-center justify-content-center">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_light.svg" alt="star for reviews">
                <img src="images/Star_lightimpty.svg" alt="">
              </div>

              <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <div class="hero-button d-flex justify-content-center my-2">
                <a class="btn btn-primary primary-btn-orange" href="#">Get started</a>
              </div>
              <div class="card-footer my-2">
                <span class="text-body-secondary my-2">UX-UI-Designer-adobe-figma</span>
                <div>
                  <div class="row project-num my-2 d-flex justify-content-between">
                    <div class="col-3  ">
                      <span class="row">Project</span>
                      <span class="row">5457</span>
                    </div>
                    <div class="col-6">
                      <span class="row">Member since</span>
                      <span class="row">01-11-2020</span>
                    </div>
                    <div class="col-3">
                      <span class="row fw-bold fs-4" style="color: green;">72$</span>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <button id="loadmore" class="btn btn-primary primary-btn-orange">Load More</button>
        </div>
      </div>
    </div>

  </section>
  <!-- Testimonials section -->
  <section id="testimonials-key" class="Testimonials my-4 py-4">
    <div class="container position-relative">
      <div style="z-index: -1;">
        <img src="images/orangeCircle.svg" alt="flower" id="testimontial-animation1" class="position-absolute ">
        <img src="images/Circle4.svg" alt="flower" id="testimontial-animation2" class=" position-absolute">
      </div>
      <div class="row ">
        <div class="col-12 z-index-modifier">
          <div class="row text-center justify-content-center">
            <h2 class="display-5 fw-bold mb-3 ">Test<span class="text-half-orange-effect">imonials</span>
            </h2>
            <div class="text-hero-p col-10 ">
              <p class="pe-lg-10 mb-5 ">your gateway to a diverse community of skilled freelancers ready to bring your
                projects to life. We've organized our talent pool into various categories to help you find the perfect
                match for your unique needs.Our team members are experts in all facets of the design industry including:
                print design, illustration, branding, identity and more.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <?php
            $sql = "select user_name,job,Commentaire from testimonials left join users on testimonials.ID_user = users.ID_user limit 3";
            $testimonial = mysqli_query($con, $sql);
            if (!$testimonial) {
              die("query error");
            }
            while ($row = mysqli_fetch_assoc($testimonial)) {
              echo "<div class='carousel-item'>
              <div class='col-lg-6 col-md-6 col-12 mx-auto '>
                <div class='card category-card-style  my-4'>
                  <div class='card-body m-4 '>
                    <div class='d-flex  justify-content-between card-flex'>
                      <div class='d-flex align-items-center m-3'>
                        <img src='images/fatiha.svg' alt='' class='rounded-circle avatar-xl mb-3 mb-lg-0 '>
                      </div>
                      <div class=''>
                        <h4 class='mb-0'>$row[user_name]</h4>
                        <p class='mb-0 fs-6'>$row[job]</p>
                        <i class='fa-solid fa-quote-left fa-xl' style='color: #ff7300;'></i>
                        <p>$row[Commentaire]</p>
                        <i class='fa-solid fa-quote-left fa-rotate-180 fa-xl' style='color: #ff7300;'></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
            }
            ?>
            <div class="carousel-item active ">
              <div class="col-lg-6 col-md-6 col-12 mx-auto ">
                <div class="card category-card-style  my-4">
                  <div class="card-body m-4 ">
                    <div class="d-flex card-flex justify-content-between">
                      <div class="d-flex align-items-center m-3">
                        <img src="images/dizzy.svg" alt="" class="rounded-circle avatar-xl mb-3 mb-lg-0 ">
                      </div>
                      <div class="">
                        <h4 class="mb-0">Dizzy Dros</h4>
                        <p class="mb-0 fs-6">Artist</p>
                        <i class="fa-solid fa-quote-left fa-xl" style="color: #ff7300;"></i>
                        <p>I recently used their services, and I'm incredibly satisfied. The team was responsive, professional, and the final product exceeded my expectations. I highly recommend them!
                        </p>
                        <i class="fa-solid fa-quote-left fa-rotate-180 fa-xl" style="color: #ff7300;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-6 col-md-6 col-12 mx-auto ">
                <div class="card category-card-style  my-4">
                  <div class="card-body m-4 ">
                    <div class="d-flex  justify-content-between card-flex">
                      <div class="d-flex align-items-center m-3">
                        <img src="images/fatiha.svg" alt="" class="rounded-circle avatar-xl mb-3 mb-lg-0 ">
                      </div>
                      <div class="">
                        <h4 class="mb-0">Fatiha Lacrim</h4>
                        <p class="mb-0 fs-6">Ceo Haribo</p>
                        <i class="fa-solid fa-quote-left fa-xl" style="color: #ff7300;"></i>
                        <p>I've been a loyal customer for years. The quality of their services is outstanding, and they always go the extra mile to meet our needs. Truly remarkable!
                        </p>
                        <i class="fa-solid fa-quote-left fa-rotate-180 fa-xl" style="color: #ff7300;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-6 col-md-6 col-12 mx-auto ">
                <div class="card category-card-style  my-4">
                  <div class="card-body m-4 ">
                    <div class="card-flex d-flex justify-content-between card-flex">
                      <div class="d-flex align-items-center m-3">
                        <img src="images/carouselimg.svg" alt="" class="rounded-circle avatar-xl mb-3 mb-lg-0 ">
                      </div>
                      <div class="">
                        <h4 class="mb-0">Goch Tavn</h4>
                        <p class="mb-0 fs-6">Founder 4011</p>
                        <i class="fa-solid fa-quote-left fa-xl" style="color: #ff7300;"></i>
                        <p>I had a fantastic experience with this company. Their products are top-notch, and their customer service is excellent. I highly recommend them!
                        </p>
                        <i class="fa-solid fa-quote-left fa-rotate-180 fa-xl" style="color: #ff7300;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev " href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <i class="fa-solid fa-angles-right fa-2xl" style="color: #ff6600;"></i>
          </a>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <i class="fa-solid fa-angles-left fa-2xl" style="color: #ff6600;"></i>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
  </section>
  <!-- trusted company -->
  <section class="trusted-company">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row text-center justify-content-center">
            <h2 class="display-5 fw-bold mb-3">Browse talent <span class="text-half-orange-effect">by category</span>
            </h2>
            <div class="text-hero-p col-10 ">
              <p class="pe-lg-10 mb-5">your gateway to a diverse community of skilled freelancers ready to bring your
                projects to life. We've organized our talent pool into various categories to help you find the perfect
                match for your unique needs.Our team members are experts in all facets of the design industry including:
                print design, illustration, branding, identity and more.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 text-center align-middle">
            <a href="https://www.rolls-roycemotorcars.com/en_GB/home.html" target="_blank">
              <img src="images/lg4.svg" alt="company logo" style="width: 10vw;">
            </a>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 d-flex justify-content-between">
            <a href="https://www.bmw.com/en/index.html" target="_blank">
              <img src="images/lg1.svg" alt="company logo" style="width: 10vw;">
            </a>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 d-flex justify-content-between">
            <a href="https://www.starbucks.com/" target="_blank">
              <img src="images/lg2.svg" alt="company logo" style="width: 10vw;">
            </a>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 d-flex justify-content-between">
            <a href="https://www.binance.com/en" target="_blank">
              <img src="images/binance.svg" alt="binance" style="width: 10vw;">
            </a>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 d-flex justify-content-between">
            <a href="https://titan.email/" target="_blank">
              <img src="images/lg3.svg" alt="company logo" style="width: 10vw;">
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
          <div class="mb-4 d-flex justify-content-between">
            <a href="https://en.dragon-ball-official.com/" target="_blank">
              <img src="images/namek.svg" alt="company logo" style="width: 10vw;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'include/footer.php'?>
  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- javascript links -->
  <script src="javascript/main.js"></script>
</body>

</html>