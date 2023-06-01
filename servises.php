<!DOCTYPE html>
<html lang="en">
<?php include'incloud/conn.php'; ?>
<?php include'incloud/file.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدماتنا</title>
    <!-- Custom Link Css Bootstrab & FontAwoseme -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo&family=IBM+Plex+Sans+Arabic:wght@100;300&family=Tajawal:wght@200;400&display=swap"
        rel="stylesheet">
    <!-- Custom Icon Website -->
    <link rel="icon" href="img/logo.png">

    <!-- Custome Script scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <header>
        <!-- Start Code Nav -->
        <nav class="navbar navbar-expand-lg  text-center">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <!-- <img src="img/logo.png" class="img-fluid" alt=""> -->
                    <img src="img/logo.png"width="70px"  alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item p-2">
                            <a class="nav-link fw-bold active" aria-current="page" href="index.php">الرئيسية</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link fw-bold" href="about.php">من نحن</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link fw-bold" href="servises.php">خدماتنا</a>
                        </li>
                        <!-- <li class="nav-item p-2">
                            <a class="nav-link fw-bold" href="#">معرض الصور</a>
                        </li> -->
                        <li class="nav-item p-2">
                            <a class="nav-link fw-bold" href="blog.php">المدونة</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link fw-bold" href="contactUs.php">إتصل بنا</a>
                        </li>
                    </ul>
                    <!-- <div class="socialMedi d-flex gap-2 text-center">
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    </div> -->
                </div>
            </div>
        </nav>
        <!-- Finsh Code Nav -->
    </header>
    <div class="titlePage text-center">
        <div class="photoTitle">
            <img src="img/hook.png" alt="" class="img-fluid mb-3">
        </div>
        <div class="parTitle pb-5">
            <p>خدماتنا</p>
        </div>
    </div>

    <div class="sectionFour pt-5 serveses">
        <div class="container">
            <div class="row g-4">
            <?php showservises($con) ?>
            </div>
        </div>
    </div>

    <!-- <div class="overlay">
        <div class="overlayy"></div>
    </div> -->

        <!-- Start Code Whatssap icon -->
        <div class="whatssapp">
            <div class="titleWhatssap">
                <p>تواصل مباشر مع الواتس اب </p>
            </div>
            <div class="iconUp">
                <div class="icon">
                    <a href="" class="whatss"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <!-- Finsh Code Whatssap icon -->
    <!-- Start Code Footer -->
    <div class="footer pt-1 pb-1 bg-dark text-white text-center">
        <div class="container">
            <div class="All d-flex align-items-center justify-content-between ">
                <div class="Hoquk">
                <p> جميع الحقوق محفوظة لموقع كاربيست ©  2023</p>

                </div>
                <!-- <div class="logo">
                    <img src="img/logo.png" class="img-fluid" alt="">
                </div> -->
                <div class="socialMedi d-flex gap-3">
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Finsh Code Footer -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>