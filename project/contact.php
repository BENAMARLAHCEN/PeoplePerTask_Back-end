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

      <div>

        <div class="divider"></div>

        <div class="heading">
          <h2> Contactez-moi</h2>
        </div>

        <div class="row">
          <div class="">
            <form id="contact-form" method="post" action="./Controller/sendmail.php" role="form">
              <div class="row">
                <div class="col-md-6">
                  <label for="firstname">Prénom <span class="blue">*</span></label>
                  <input required type="text" name="firstname" class="form-control" placeholder="Enter your firstname" id="firstname" value="">
                  <p class="comments"> </p>
                </div>

                <div class="col-md-6">
                  <label for="lastname">Nom <span class="blue">*</span></label>
                  <input required type="text" name="lastname" class="form-control" placeholder="Your Lastname" id="name" value=" ">
                  <p class="comments"> </p>
                </div>

                <div class="col-md-6">
                  <label for="email">Email <span class="blue">*</span></label>
                  <input required type="email" name="email" class="form-control" placeholder="enter email" id="email" value=" ">
                  <p class="comments"> </p>
                </div>

                <div class="col-md-6">
                  <label for="phone">Téléphone</span></label>
                  <input type="tel" name="phone" class="form-control" placeholder="enter telephone" id="phone" value=" ">
                  <p class="comments"> </p>
                </div>

                <div class="col-md-12">
                  <label for="message">Message <span class="blue">*</span></label>
                  <textarea required name="message" id="message" class="form-control" placeholder="write message" rows="4"> </textarea>
                  <p class="comments"> </p>
                </div>

                <div class="col-md-12">
                  <p class="blue"><strong> * Ces informations sont requises !</strong> </p>
                </div>

                <div class="col-md-12">
                  <input type="submit" class="button1" value="envoyer">
                </div>
              </div>

            </form>
          </div>
        </div>

      </div>

      <style>
        .divider {
          width: 100px;
          height: 2px;
          background: #ffa500;
          margin: 0 auto;
        }

        .heading {
          text-align: center;
          margin-bottom: 60px;
        }

        .heading h2 {
          color: white;
          text-transform: uppercase;
          font-weight: bold;
        }

        #contact-form {
          font-size: 20px;
          background: white;
          padding: 2%;
          border-radius: 10px;
        }
        @media (max-width: 730px) {
          #contact-form{
            padding: 0;
          }
        }

        .blue {
          color: #0069d6;
        }

        .form-control {
          height: 50px;
          font-size: 18px;
        }

        .comments {
          color: #d82c2e;
          font-style: italic;
          font-size: 18px;
          height: 25px;
        }

        #contact-form input[type="submit"] {
          margin: 10px auto 0;
          display: block;
        }

        

        .button1 {
          border: 1px solid #ddd;
          background: #ffa500;
          color: #fff;
          width: 100%;
          font-weight: bold;
          text-transform: uppercase;
          padding: 13px;
          border-radius: 5px;
          transition: all 0.3s ease-in 0s;
        }

        .button1:hover {

          background: #333;
          border-color: #ffa500;
        }

        .thank-you {
          text-align: center;
          margin-top: 15px;
          font-weight: bold;
          font-size: 22px;
        }
      </style>
    </div>

  </section>

  <div class="container ">
    <iframe class="mrgntop " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1607.917771117547!2d-5.165139720113833!3d31.116749347426996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdbd671f05a8399d%3A0xab823468cebcd23a!2z2KPZhNmG2YrZgQ!5e0!3m2!1sar!2sma!4v1697297939143!5m2!1sar!2sma" title="myFrame" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <?php include 'include/footer.php' ?>

  <script src="javascript/validation.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>