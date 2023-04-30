<?php include 'include/config.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM `portfolio` WHERE `portfolio`.`id` = $id";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($result);

  $category = $data['category'];
  $category_sql ="SELECT * FROM `category` WHERE `category`.`id`='$category'";
  $category_result = mysqli_query($con, $category_sql);
  $category_data = mysqli_fetch_assoc($category_result);
}
?>
  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            

            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?php echo $data['image']?>" alt="">
                </div>

                <!--<div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                </div>-->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

          <div class="col-lg-4 portfolio-info">
            <h3><?php echo $data['title']?></h3>
            <ul>
            <?php
            if($category_data['name']){
            ?>  
            <li><strong>Category</strong>: <?php echo $category_data['name']?></li>
            <?php
            }
            ?>

            <?php
            if($data['language']){
            ?>  
            <li><strong>Language</strong>: <?php echo $data['language']?></li>
            <?php
            }
            ?>

            <?php
            if($data['framework']){
            ?>  
            <li><strong>Framework / Library</strong>: <?php echo $data['framework']?></li>
            <?php
            }
            ?>

            <?php
            if($data['dbms']){
            ?>  
            <li><strong>Database</strong>: <?php echo $data['dbms']?></li>
            <?php
            }
            ?>

            <?php
            if($data['url']){
            ?>  
            <li><strong>Live URL</strong>: <a href="<?php echo $data['url']?>" target="_blank"><?php echo $data['url']?></a></li>
            <?php
            }
            ?>

            <?php
            if($data['githubUrl']){
            ?>  
            <li><strong>Github URL</strong>: <a href="<?php echo $data['githubUrl']?>" target="_blank"><?php echo $data['githubUrl']?></a></li>
            <?php
            }
            ?>
            
            <?php
            if($data['text']){
            ?>  
            <li><strong>Comment</strong>: <?php echo $data['text']?></li>
            <?php
            }
            ?>

            </ul>

            <p>
            <?php echo $data['text']?>
            </p>
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

  <div class="credits">
  <?php 
    
    $details = "SELECT * FROM `details` WHERE `details`.`id` = 1";
    $details_result =mysqli_query($con, $details);
    $details_data = mysqli_fetch_assoc($details_result);
    
    ?>
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="<?php echo $details_data['url']?>" target="_blank">Seolhee Kim</a> using BootstrapMade Template
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>