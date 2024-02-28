<!DOCTYPE html>
<html>

<head>

  <title>Login Page</title>
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="/html/footer.html">
</head>

<!--Main Navigation-->
<header>
  <style>
    #intro {
      background-image: url("http://i.stack.imgur.com/kx8MT.gif");
      height: 120vh;
    }

    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #intro {
        margin-top: -58.59px;
      }
    }

    .navbar .nav-link {
      color: #fff !important;
    }
  </style>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand nav-link " target="_blank" href="https://mdbootstrap.com/docs/standard/">
        <strong class="h4 bold">AL Azb Real Estate and Builders</strong>
      </a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#intro">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">About us</a>
          </li>
          <!-- <li class="nav-item">
              <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank">Download MDB UI KIT</a>
            </li>
          </ul> -->

          <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
          </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div id="intro" class="bg-image shadow-2-strong ">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
      <div class="container d-flex align-items-center justify-content-center text-center h-100">
        <div class="text-white p-4">
          <!-- <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1> -->
          <!-- <h5 class="mb-4">Best & free guide of responsive web design</h5> -->



        </div>
      </div>
    </div>
    <div class="bg-image mh-100" style="background-image: url('/image/dashboard_background');
      height: 100vh">
      <!-- <nav class="navbar navbar-light bg-light"> -->
      <div class="container mb-lg-5">

      </div>
      </nav>
      <img src="" alt="">
      <div class="container vh-100">
        <div class="row justify-content-center h-130">
          <div class="card w-50 my-auto shadow">
            <div class="card-header text-center bg-primary text-white">
              <h2>CRM - Login</h2>
            </div>
            <div class="card-body ">

              <form action="" method="post">

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control" name="email" required />
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password" class="form-control" name="password" required />
                </div>
                <input type="submit" class="btn btn-primary w-100 mt-4" value="Login" name="">
              </form>

              <?php
              if (isset($_POST["email"]) && isset($_POST["password"])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                //database connection
                //host,username,password,databasename
                $con = new mysqli("localhost", "root", "", "alazbreal");
                if ($con->connect_error) {
                  die("failed to connect : " . $con->connect_error);
                } else {
                  $stmt = $con->prepare("select * from registration where email = ?");
                  $stmt->bind_param("s", $email);
                  $stmt->execute();
                  $stmt_result = $stmt->get_result();
                  if ($stmt_result->num_rows > 0) {
                    $data = $stmt_result->fetch_assoc();
                    if ($data['password'] === $password) {
                      //check the role of the user and redirect accordingly
                      if ($data['role'] === "admin") {
                        header("Location: admin/adminhome.php");
                      } else
          if ($data['role'] === "user") {
                        header("Location: userdashboard.php");
                      } else if ($data['role'] === "data") {
                        header("Location: ../dataentrydb/dataaentryhome.php");
                      }
                    } else {
                      echo
                      "<div class=\"text-center text-danger\">
                                                    <h2>Invalid Username or Password</h2>
                                                    </div>";
                    }
                  } else {
                    echo
                    "<div class=\"text-center text-danger\">
                                                    <h2>Invalid Username or Password</h2>
                                                    </div>";
                  }
                }
              }
              /////////////////////

              ?>

            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</header>

<body>

  <!-- footter  -->
  <footer class="text-center text-white" style="background-color: #f1f1f1;">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->

        <!-- Google -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
        <!-- Github -->
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="#">Al Azb Real Estate and Builders</a>
    </div>
    <!-- Copyright -->
  </footer>

</body>

</html>