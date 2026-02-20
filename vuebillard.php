<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>vue des billards</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@exemple.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo" style="width: 50px; height: 60px;">
        <img src="assets/img/logo.png" alt="logo" width="80" height="100">
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="tableautournoi.php">Tableau du tournoi</a></li>
          <li><a href="plansalle.php">Plan de la salle</a></li>
          <!--li><a class="active" href="vuebillard.php">Vue des billards</a></li-->
          <li><a href="../../index.php">Se connecter</a></li>


            <div class="sidebar">

              
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-center align-items-center">
          <h2>Vue des billards avec plan de jeu</h2>
         
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

  
  </main><!-- End #main -->

  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Vue des billards avec plan de jeu</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Plan 1</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores corporis incidunt quasi commodi minima, odit soluta, pariatur quas adipisci tenetur optio, illum ratione ullam qui. Dolor ullam atque officiis dolorum.</p>
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Plan 1"><i class="bx bx-plus"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Plan 2</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque expedita tempore nisi. Reiciendis voluptate vel veritatis quidem cum sapiente amet quo pariatur aperiam eveniet, harum qui distinctio? Delectus, aspernatur eligendi.</p>
            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Plan 2"><i class="bx bx-plus"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Plan 3</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse natus assumenda iste id dolorum ratione reiciendis ipsum quasi odio atque quibusdam labore commodi minima dolores a consequatur aut, nesciunt eligendi.</p>
            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Plan 3"><i class="bx bx-plus"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Plan 4</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia est aperiam velit! Quas deserunt maiores consectetur voluptatibus. Quibusdam enim facilis, minus tempora totam et beatae harum, cumque ullam libero mollitia!</p>
            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Plan 4"><i class="bx bx-plus"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Plan 5</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi fuga eos aut optio illo quisquam delectus nulla corrupti maxime aliquam atque excepturi repudiandae, dolor ducimus perferendis? Ratione numquam eveniet adipisci.</p>
            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Plan 5"><i class="bx bx-plus"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Plan 6</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero odit impedit delectus cumque porro eligendi possimus voluptate sit quidem beatae eos tempore exercitationem assumenda minus, et excepturi soluta officia maiores.</p>
            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Plan 6"><i class="bx bx-plus"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Plan 7</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel ab corrupti aliquam labore quasi ipsum ea eum aspernatur error adipisci, voluptatibus quo quibusdam aliquid et deleniti laborum odit. Officiis.</p>
            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Plan 7"><i class="bx bx-plus"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Plan 8</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quaerat, culpa explicabo aliquam fuga, modi deserunt quis sit asperiores incidunt soluta ipsum ex quibusdam expedita maiores repellendus at quo minima.</p>
            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Plan 8"><i class="bx bx-plus"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Plan 9</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab error, optio natus ut iste doloremque cumque quos ipsa temporibus unde sed nobis possimus doloribus deserunt provident placeat a excepturi quaerat.</p>
            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Plan 9"><i class="bx bx-plus"></i></a>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Billard</span></strong>. All Rights Reserved
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
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