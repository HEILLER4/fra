<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4" action="/src/signup.php" method="POST">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="username" class="form-control" name="userN" />
                                                <label class="form-label" for="username">Username</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="email" id="email" class="form-control" name="email" />
                                                <label class="form-label" for="email">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="passId" class="form-control" name="pwd" />
                                                <label class="form-label" for="passId">Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="password" id="passId1" class="form-control" />
                                                <label class="form-label" for="passId1">Repeat your
                                                    password</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="terms" />
                                            <label class="form-check-label" for="terms">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-lg" onclick="input()">Register</button><br>
                                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-lg"><a href="login.php"
                                                    class="">Log-in</a></button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <section class="info_section ">
            <div class="info_container layout_padding-top">
                <div class="container">
                    <div class="info_top">
                        <div class="info_logo">
                            <img src="images/logo.png" alt="" />
                            <span>
                                Spering
                            </span>
                        </div>
                        <div class="social_box">
                            <a href="#">
                                <img src="images/fb.png" alt="">
                            </a>
                            <a href="#">
                                <img src="images/twitter.png" alt="">
                            </a>
                            <a href="#">
                                <img src="images/linkedin.png" alt="">
                            </a>
                            <a href="#">
                                <img src="images/instagram.png" alt="">
                            </a>
                            <a href="#">
                                <img src="images/youtube.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="info_main">
                        <div class="row">
                            <div class="col-md-3 col-lg-2">
                                <div class="info_link-box">
                                    <h5>
                                        Useful Link
                                    </h5>
                                    <ul>
                                        <li class=" active">
                                            <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="">
                                            <a class="" href="about.php">About </a>
                                        </li>
                                        <li class="">
                                            <a class="" href="work.php">Work </a>
                                        </li>
                                        <li class="">
                                            <a class="" href="category.php">Category </a>
                                        </li>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <h5>
                                    Offices
                                </h5>
                                <p>
                                    Readable content of a page when looking at its layoutreadable content of a page when
                                    looking at its
                                    layout
                                </p>
                            </div>

                            <div class="col-md-3 col-lg-2 offset-lg-1">
                                <h5>
                                    Information
                                </h5>
                                <p>
                                    Readable content of a page when looking at its layoutreadable content of a page when
                                    looking at its
                                    layout
                                </p>
                            </div>

                            <div class="col-md-3  offset-lg-1">
                                <div class="info_form ">
                                    <h5>
                                        Newsletter
                                    </h5>
                                    <form action="">
                                        <input type="email" placeholder="Email">
                                        <button>
                                            Subscribe
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-10 mx-auto">
                            <div class="info_contact layout_padding2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#" class="link-box">
                                            <div class="img-box">
                                                <img src="images/location.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>
                                                    Location
                                                </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="link-box">
                                            <div class="img-box">
                                                <img src="images/mail.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>
                                                    demo@gmail.com
                                                </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="#" class="link-box">
                                            <div class="img-box">
                                                <img src="images/call.png" alt="">
                                            </div>
                                            <div class="detail-box">
                                                <h6>
                                                    Call +01 1234567890
                                                </h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><br>

        <!-- end info section -->

        <!-- footer section -->
        <footer class="container-fluid footer_section ">
            <div class="container">
                <p>
                    &copy; <span id="displayDate"></span> All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a>
                </p>
            </div>
        </footer>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/custom.js"></script>
        <script>
            function input() {
                var email = document.getElementById("username").value;
                var username = document.getElementById("email").value;
                var terms = document.getElementById("terms");
                var passId = document.getElementById("passId").value;
                var passId1 = document.getElementById("passId1").value;
                if (username == "" || email == "" || !checkBox.checked || passId !== passId1 || passId == "") {
                    alert("Empty fields")
                    windows.location.href
                }
                else {
                    windows.location.href
                }
            }
        </script>
</body>

</html>