<!DOCTYPE html>
<html lang="en">
<?php include '../incloud/conn.php';  ?>
<?php include '../incloud/file.php';  ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>اخر الأخبار</title>
  <!-- Custom Link Css Edit Me  -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Custome Link Css Bootstrab -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Coustom Link Css FontAwoseom -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Coustom Link Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&family=Tajawal:wght@200;400&display=swap"
    rel="stylesheet">
    <link rel="icon" href="img/logo.png">

</head>

<body>
  <!-- Start Code NavTop -->
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <i class="fa-solid fa-house-signal"></i> لوحة تحكم الموقع
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars-staggered"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="img/user.png" class="img-fluid" width="40" alt="">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="setting.php">الملف الشخصي</a></li>
              <li><a class="dropdown-item" href="index.php">الإنتقال للموقع الرئيسي</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logout.php">تسجيل الخروج</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="إبحث من هنا" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">البحث</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Finsh Code NavTop -->

  <!-- Start Code body right And left -->
  <div class="rightLeft">
    <div class="row">
      <div class="col-lg-2 col-md-6">
        <div class="right">
        <div class="listright">
            <ul>
              <li><a href="index.php"><i class="fa-solid fa-door-open"></i> الواجهة الترحيبية</a></li>
              <li><a href="users.php"><i class="fa-solid fa-user"></i> المستخدمين</a></li>
              <li><a href="servises.php"><i class="fa-solid fa-circle-question"></i>قسم الخدمات</a></li>
              <li><a href="endnews.php"><i class="fa-solid fa-newspaper"></i>آخر الأخبار</a></li>
              <li><a href="message.php"><i class="fa-solid fa-comment-sms"></i>الرسائل الواردة</a></li>
              <li><a href="logout.php"><i class="fa-solid fa-edit"></i>تسجيل الخروج</a></li>
              <li><a href="setting.php"><i class="fa-solid fa-gear fa-spin"></i> إعدادات الموقع</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-10 col-md-6">
        <div class="left">
          <div class="mainTitle d-flex mb-5 align-items-center">
            <h2>آخر الأخبار</h2>
            <button class="btn btn-warning" onclick="showpoupup()"><i class="fa-solid fa-plus"></i>إضافة خبر</button>
          </div>

          <div class="taple">
            <?php showallnews($con) ?>
          </div>
          <div class="poupupAdd" id="poupUp">
            <form action="" method="post" enctype="multipart/form-data">
              <p class="fs-2 fw-bold me-2 close" onclick="showpoupup()">&times;</p>
              <h3>إضافة خبر جديد</h3>
              <div>
                <p class=""><span>*</span>صورة الخبر</p>
                <input type="file" name="photonews" id="" class="d-block">
              </div>
              <div>
                <p class=""><span>*</span>تاريخ النشر</p>
                <input type="date" name="datenews" id="" required>
              </div>
              <div>
                <p class=""><span>*</span> عنوان الخبر</p>
                <input type="text" name="titlenews" id="" placeholder="أدخل عنوان الخبر" required>
              </div>
              <div>
                <p class=""><span>*</span>نص الخبر</p>
                <textarea type="text" name="textnews" id="" placeholder="أدخل  نص الخبر" > </textarea>
              </div>
              <div>
                <button class="btn btn-warning" name="addnews" type="submit">نشر</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Finsh Code body right And left -->
  <!-- Custome Script Chart Js site Cdn -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- Custome Script Chart Js -->
  <script src="js/mainCharts.js"></script>
  <!-- Custom Script Bootstrab -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- Custom Script FontAwoseom -->
  <script src="js/all.min.js"></script>
  <!-- Custome Script Edit Me -->
  <script src="js/main.js "></script>
</body>

</html>