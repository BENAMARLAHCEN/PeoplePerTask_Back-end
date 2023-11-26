<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>signup</title>

  <!-- style links -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <!-- animation links -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <!-- link for icons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <!-- Navbar -->
  <?php include 'include/navbar.php' ?>

  <section class="vh-100 bg-image" style="
        background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');
      ">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">
                  Create an account
                </h2>

                <form id="regester-form">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                    <input type="text" id="name_inp" class="form-control form-control-lg" />
                    <span id="name_reg_err" class="text text-danger"></span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                    <input type="text" id="mail_inp" class="form-control form-control-lg" />
                    <span id="email_reg_err" class="text text-danger"></span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" id="password_inp" class="form-control form-control-lg" />
                    <span id="password_reg_err" class="text text-danger"></span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    <input type="password" id="password_rep_inp" class="form-control form-control-lg" />
                    <span id="password_rep_err" class="text text-danger"></span>
                  </div>

                  <button type="submit" class="mrgntop btn btn-primary primary-btn-orange">
                    Register
                  </button>

                  <p class="text-center text-muted mt-5 mb-0">
                    Have already an account?
                    <a href="#!" class="fw-bold text-body"><u>Login here</u></a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'include/footer.php'?>
  <script src="javascript/valid.js"></script>
</body>

</html>