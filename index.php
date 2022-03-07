<?php
error_reporting(0);
include_once('./backend/function.php');
$lab = $_GET['lab'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tinngrit Singkaew | BSCCS102</title>

  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">

  <!-- favicon -->
  <link rel="shortcut icon" href="./assets/favicon/favicon.png" type="image/x-icon">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <!-- Animate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- External css -->
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <?php ($lab != "" ? include_once('./components/navbar.php') : ""); ?>

  <?php if (!isset($lab)) { ?>
    <div class="container" id="super">
      <div class="d-flex vh-100 align-items-center justify-content-center">
        <div class="">
          <div class="d-flex align-items-end animate__fadeInDown animate__animated ">
            <img src="https://webs.rmutl.ac.th/assets/upload/files/2018/11/20181114113020_50956.png" class="img-fluid" width="64" alt="">
            <h5 class=""> มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา (น่าน)</h5>
          </div>
          <h1 class="text-uppercase animate__fadeInDown animate__animated ">Scientific Information for Computer Science</h1>
          <p class="text-muted animate__fadeInDown animate__animated animate__delay-1s animate__faster mb-0">
            ข้อมูลเชิงวิทยาศาสตร์สำหรับวิทยาการคอมพิวเตอร์ (BSCCS102)
          </p>
          <p class="text-muted animate__fadeInDown animate__animated animate__delay-1s animate__faster">
            โดย นายทินกฤต สิงห์แก้ว (64342205007-7) - วิทยาการคอมพิวเตอร์ ปี1 (เทียบโอน)
          </p>

          <a href="./?lab=1" class="btn btn-outline-danger animate__fadeInDown animate__animated animate__delay-2s animate__faster">เข้าชมเว็บไซต์</a>
        </div>
      </div>
    </div>
  <?php } ?>
  <!-- <div id="content" class="container mt-3"></div> -->
  <div class="container mt-5">
    <?php
    if (isset($lab)) {
      include_once("./pages/lab$lab.php");
    }
    ?>
  </div>

  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <!-- External js -->
  <script src="./assets/js/main.js"></script>
</body>

</html>