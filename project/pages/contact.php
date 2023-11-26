<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>contact</title>

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
  <section class="mb-4">

    <div class="container ">
      <h2 class="display-3 fw-bold mb-3 text-center">Conta<span class="text-half-orange-effect">ct us</span></h2>

      <h4 class="text-center w-responsive mx-auto mb-5"> Our team members are experts in all facets of the design industry
        including: print design, illustration, branding, identity and more.</h4>

      <div class="row ">


        <div class="col-md-7 ">
          <h3 class="mrgntop">Leave us your info</h3>
          <form class="mrgntop" id="contact-form">

            <div class="row mrgntop">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <label for="name" class="">Your name</label>
                  <input type="text" id="name_in" name="name" class="form-control " placeholder="name">
                  <span id="name_error" class="text text-danger"></span>
                </div>
              </div>
            </div>



            <div class="row mrgntop">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <label for="email" class="">Your email</label>
                  <input type="text" id="email_in" name="email" class="form-control" placeholder="email">
                  <span id="email_error" class="text text-danger"></span>
                </div>
              </div>
            </div>




            <div class="row mrgntop">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <label for="subject" class="">Subject</label>
                  <input type="text" id="subject_in" name="subject" class="form-control" placeholder="subject">
                </div>
              </div>
            </div>

            <div class="row mrgntop">


              <div class="col-md-12">

                <div class="md-form">
                  <label for="message">Your message</label>
                  <textarea type="text" id="message_in" name="message" rows="2" class="form-control md-textarea" placeholder="message"></textarea>
                  <span id="message_error" class="text text-danger"></span>
                </div>

              </div>
            </div>
            <button type="submit" class="mrgntop btn btn-primary primary-btn-orange">Send Message</button>
          </form>


          <div class="status"></div>
        </div>




        <div class="col-md-5 text-center contact-background">
          <h3 class="mrgntop">Contact information</h3>
          <ul class="mrgntop list-unstyled mb-0 ">
            <li><i class="fas fa-map-marker-alt fa-2x text-half-orange-effect"></i>
              <p>San Francisco
              <div>CA 94126,USA</div>
              <div></div>
              </p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x text-half-orange-effect"></i>
              <p>+ 01 234 567 89</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x  text-half-orange-effect"></i>
              <p>contact@mdbootstrap.com</p>
            </li>
          </ul>




        </div>


      </div>
    </div>

  </section>

  <div class="container ">
    <iframe class="mrgntop " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1607.917771117547!2d-5.165139720113833!3d31.116749347426996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdbd671f05a8399d%3A0xab823468cebcd23a!2z2KPZhNmG2YrZgQ!5e0!3m2!1sar!2sma!4v1697297939143!5m2!1sar!2sma" title="myFrame" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <?php include 'include/footer.php'?>

  <script src="javascript/validation.js"></script>
</body>

</html>