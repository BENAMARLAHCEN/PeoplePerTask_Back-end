<?php
session_start();
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-postion">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="images/M.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pack.php">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            category
          </a>
          <ul class="dropdown-menu">
            <?php
            include 'dashboard/include/connect.php';
            $sql = "SELECT * FROM categories";
            $cat = mysqli_query($con, $sql);
            if (!$cat) {
              die("error query" . mysqli_error($con));
            }
            while ($row = mysqli_fetch_assoc($cat)) {
              echo "
                <li><a class='dropdown-item' href='recherch.php?id=$row[id]'>$row[CategoryName]</a></li>
                ";
            }
            ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#testimonials-key">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <!--  -->
      <form class="d-flex input-group w-auto">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
          <img src="images/searchicon.svg" alt="">
        </span>
      </form>
      <?php


      if (isset($_SESSION['valid'])) {
        if ($_SESSION['role'] == "user") { ?>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="#" class="nav-icon pe-md-0 position-relative" data-bs-toggle="dropdown">
                <img src="./uploaded/<?=$_SESSION['image']?>" alt="icon" style="max-width: 3rem;    border-radius: 50%;">
              </a>
              <div class="dropdown-menu dropdown-menu-end position-absolute">
                <a class="dropdown-item" href="profile/profile_account.php">Profile</a>
                <a class="dropdown-item" href="dashboard/include/logout.php">Log out</a>
              </div>
            </li>
          </ul>
        <?php } elseif ($_SESSION['role'] == "freelance") { ?>
          <a class="btn btn-primary me-2 sign-style-color" href="dashboard/dashboard.php" role="button">Work dash</a>
          <a class="btn btn-primary me-2 sign-style-color" href="dashboard/include/logout.php" role="button">Log Out</a>
        <?php } elseif ($_SESSION['role'] == "admin") { ?>
          <a class="btn btn-primary me-2 sign-style-color" href="dashboard/dashboard.php" role="button">Open dash</a>
          <a class="btn btn-primary me-2 sign-style-color" href="dashboard/include/logout.php" role="button">Log Out</a>
        <?php }
      } else {
        ?>
        <a class="btn btn-primary me-2 sign-style-color" href="join.php" role="button">Join</a>
      <?php }
      ?>
    </div>
  </div>
</nav>