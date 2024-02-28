<?php
// Start the session
session_start();
?>
<link rel="stylesheet" href="../CRM/css/animationtext.css">
<!doctype html>
<html lang="en">

<head>
    <title>Login to Al-Azb CRM

    </title>
<style>
    .title{
        background-image: url("../images/alazbbackground.png");
    }
</style>
<link rel="stylesheet" href="../CRM/css/loginstyl.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

    </header>
    <main>
        <div class="banner" style="background-image: url(https://i.imgur.com/c8952Iz.jpg)">
        <h1 class="alazbtext"><span>AL</span> AZB<span> Real Estate</span></h1>
            <div class="container w-200 vh-100">
                <div class="row justify-content-center w-100 h-100">
                    <div class="card my-auto shadow">
                        <div class="card-header text-center bg-primary text-white">
                            <div class="card-body ">
                                <div class="wrapper ">
                                    <div class="service-block-two col-lg-19 col-md-19 col-sm-12">
                                        <div class="inner-box">
                                            <div class="shape-one"></div>

                                            <div class="icon-box"> <span class="icon flaticon-coding-1"></span> </div>
                                            <h5><a href="#" class="text-decoration-none">Login to Your Dashboard</a></h5>
                                            <div class="text">Please enter your Email and Password.</div>
                                        </div>


                                        <form action="" method="post">
                                            <div class="shape-two"></div>
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

                                    </div>
                                </div>
                            </div>
                            <?php
                            if (isset($_POST["email"]) && isset($_POST["password"])) {
                                $email = $_POST['email'];
                                $password = $_POST['password'];

                                //database connection
                                //host,username,password,databasename
                                $con = new mysqli("localhost", "root", "", "test");
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
                                            $_SESSION["username"] = $data['username'];
                                            $_SESSION["role"] = $data['role'];
                                            $_SESSION["department"] = $data['department'];
                                            //check the role of the user and redirect accordingly
                                            if ($data['role'] === "admin") {
                                                header("Location: admin/adminhome.php");
                                            } else if ($data['role'] === "user") {
                                                header("Location: userdashboard.php");
                                            } else if ($data['role'] === "dataentry") {
                                                header("Location: dataentrydb/dataentryhome.php");
                                            } else if ($data['role'] === "telecom") {
                                                header("Location: telecom/telehome.php");
                                            } else if ($data['role'] === "sales") {
                                                header("Location: salesdept/saleshome.php");
                                            }
                                            else if ($data['role'] === "adminstration") {
                                                header("Location: administration/adminstrationhome.php");
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
                                                        <h2>No user found</h2>
                                                        </div>";
                                    }
                                }
                                /////////////////////
                            }
                            ?>

                        </div>
                        <div class="card-footer text-end">
                            <small>Copyright Al Azb</small>
                        </div>
                    </div>
                </div>

            </div>




            
    </main>
    <?php
    include "../CRM/dataentrydb/defooter.php";
    ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>

<style>
    .body{
        background-attachment: fixed;
    }
    .wrapper {
        height: 100%;
        /* width: 200%; */
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: transparent;
        background-attachment: fixed;
        background-blend-mode: soft-light;
    }

    .card {
        height: 25pc;
        width: 35pc;

    }

    .card-header {
        height: 25pc;
        width: 35pc;
    }

    .service-block-two {
        /* position: relative;
        z-index: 1;
        margin-bottom: 30px */
    }

    .service-block-two .inner-box {
        position: relative;
        overflow: hidden;
        /* padding: 45px 45px; */
        border-radius: 6px;
        background-color: #f5f5f5
    }

    .service-block-two .inner-box:before {
        position: absolute;
        content: '';
        left: 0px;
        bottom: 0px;
        width: 100%;
        height: 50%;
        opacity: 0;
        background-color: #141d38;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        transition: all 600ms ease
    }

    .service-block-two .inner-box .shape-one {
        content: '';
        width: 250px;
        height: 250px;
        background: #0060ff;
        border-radius: 50%;
        position: absolute;
        top: -120px;
        opacity: 0.4;
        right: -120px;
        transform: scale(0);
        -webkit-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        transition: all 600ms ease
    }

    .service-block-two .inner-box .shape-two {
        content: '';
        width: 373px;
        height: 373px;
        background: #0060ff;
        border-radius: 50%;
        position: absolute;
        top: -180px;
        right: -180px;
        z-index: 1;
        opacity: 0;
        transform: scale(0);
        -webkit-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        transition: all 600ms ease
    }

    .service-block-two .inner-box .icon-box {
        position: relative;
        font-size: 65px;
        line-height: 1em;
        color: #0060ff;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease
    }

    .service-block-two .inner-box .icon-box {
        position: relative;
        z-index: 2
    }

    .service-block-two .inner-box .icon-box {
        position: relative;
        font-size: 65px;
        line-height: 1em;
        color: #0060ff;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease
    }

    .service-block-two .inner-box h5 {
        position: relative;
        z-index: 2;
        color: #222222;
        font-weight: 600;
        line-height: 1.3em;

        /* margin: 20px 0px 15px */
    }

    .service-block-two .inner-box .text {
        position: relative;
        color: #222222;
        z-index: 2;
        font-size: 16px;
        line-height: 1.8em;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease
    }

    .service-block-two .inner-box:hover::before {
        height: 100%;

        opacity: 1
    }

    .service-block-two .inner-box:hover .shape-one {
        transform: scale(1);
        webkit-transition-delay: 300ms;
        -ms-transition-delay: 300ms;
        transition-delay: 300ms
    }

    .service-block-two .inner-box:hover .shape-two {
        opacity: 0.4;
        transform: scale(1);
        webkit-transition-delay: 600ms;
        -ms-transition-delay: 600ms;
        transition-delay: 600ms
    }

    .service-block-two .inner-box:hover .icon-box,
    .service-block-two .inner-box:hover h5 a,
    .service-block-two .inner-box:hover .text {
        color: #ffffff
    }

    .service-block-two .inner-box:hover .icon-box,
    .service-block-two .inner-box:hover h5 a,
    .service-block-two .inner-box:hover .text {
        color: #ffffff
    }

    .service-block-two .inner-box:hover .icon-box,
    .service-block-two .inner-box:hover h5 a,
    .service-block-two .inner-box:hover .text {
        color: #ffffff
    }
</style>