<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Plan de la salle</title>
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
          <li><a class="active"  href="plansalle.php">Plan de la salle</a></li>
          <li><a href="../../index.php">Se connecter</a></li>
          <div class="sidebar">
            
      </ul>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

  <section id="breadcrumbs" class="breadcrumbs" style="background-color:white;">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center">
                    <h2 style="font-size: 36px; font-weight: bold; text-align: center; text-transform: uppercase; letter-spacing: 2px; color: rgb(10, 10, 10);">Plan de la salle</h2>
                </div>
            </div>
        </section>

<style>         
  body {font-family: Arial, sans-serif; background-color: #f0f0f0; text-align: center; color: white;} 
  .salle {position: relative; width: 800px; height: 1500px; background-color: #ffffff; margin: 20px auto; border: 2px solid #000; }         
  .table {position: absolute; width: 120px; height: 60px; border-radius: 10px; display: flex; justify-content: center;align-items: center;}         
  .porte {position: absolute; width: 50px; height: 60px; background-color: #000; border: 2px solid #fff; border-radius: 10px; display: flex; justify-content: center;align-items: center; font-size: 18px;}         
  .WC {position: absolute; width: 50px; height: 100px; background-color: #000; border: 2px solid #fff; border-radius: 10px; display: flex; justify-content: center;align-items: center; font-size: 18px;}         
  .Toillet {position: absolute; width: 30px; height: 100px; background-color: #ffffff; border: 2px solid #fff; border-radius: 10px; display: flex; justify-content: center;align-items: center; font-size: 18px;}                  
  .Tablemarque {position: absolute; width: 200px; height: 80px; background-color: #000000; border: 2px solid #fff; border-radius: 10px; display: flex; justify-content: center;align-items: center; font-size: 18px;}                  
  .table1 { top: 50PX; left: 400px; transform: rotate(90deg);}         
  .table2 { top: 50px; left: 525px; transform: rotate(90deg);}   
  .table3 { top: 50px; left: 650px; transform: rotate(90deg);}         
  .table4 { top: 250px; left: 400px; transform: rotate(90deg);}         
  .table5 { top: 250px; left: 525px; transform: rotate(90deg);}         
  .table6 { top: 250px; left: 650px; transform: rotate(90deg);}         
  .table7 { top: 450px; left: 400px; transform: rotate(90deg);}         
  .table8 { top: 450px; left: 525px; transform: rotate(90deg);}         
  .table9 { top: 450px; left: 650px; transform: rotate(90deg);}         
  .table10 { top: 750px; left: 50px;}                
  .table11 { top: 750px; left: 250px;}                
  .table12 { top: 750px; left: 450px;} 
  .table13 { top: 950px; left: 50px; transform: rotate(90deg);}         
  .table14 { top: 950px; left: 200px; transform: rotate(90deg);}         
  .table15 { top: 950px; left: 450px; transform: rotate(90deg);}                 
  .table16 { top: 950px; left: 600px; transform: rotate(90deg);}   
  .table17 { top: 1150px; left: 50px; transform: rotate(90deg);}
  .table18 { top: 1150px; left: 200px; transform: rotate(90deg);}  
  .table19 { top: 1150px; left: 450px; transform: rotate(90deg);} 
  .table20 { top: 1150px; left: 600px; transform: rotate(90deg);} 
  .table21 { top: 1350px; left: 50px; transform: rotate(90deg);}
  .table22 { top: 1350px; left: 200px; transform: rotate(90deg);}  
  .table23 { top: 1350px; left: 450px; transform: rotate(90deg);} 
  .table24 { top: 1350px; left: 600px; transform: rotate(90deg);}        
  .wchomme { top: 0px;left: 70px;  color: #000;}         
  .wcfemme { top: 0px;left: 128px;  color: #000;}                 
  .Tablemarque1 { top: 450px; left: -63px; transform: rotate(90deg);} 
  .table img {
    width: 100%;
    height: auto;
    object-fit: cover;
  }
  .table-name1{
    margin-top: 5px;
    font-size: 1em;
    transform: rotate(90deg);
  }
@media (max-width: 600px) {     
  .salle {
    width: 350px;
    height: 850px;     
  }
  .table{
    width: 10px;
    height: 50px;
  } 
  .wcfemme{
    width: 20%;
    height: 20%;
    padding-bottom: 166px;
    left: 43px;
  }    
  .wchomme{
    width: 20%;
    height: 20%;
    padding-bottom: 166px;
    left: 10px;
  }    
  .table1{
    left: 150px;
  }
  .table2{
    left: 220px;
  } 
  .table3{
    left: 290px;
  }
  .table4{
    left: 150px;
    top: 150px;
  }
  .table5{
    top: 150px;
    left: 220px;
  } 
  .table6{
    top: 150px;
    left: 290px;
  }
  .table7{
    left: 150px;
    top: 250px;
  }
  .table8{
    top: 250px;
    left: 220px;
  } 
  .table9{
    top: 250px;
    left: 290px;
  }
  .table10{
    top: 450px;
    left: 50px;
  }
  .table11{
    top: 450px;
    left: 150px;
  }
  .table12{
    top: 450px;
    left: 250px;
  }
  .table13{
    top: 550px;
    left: 50px;
  }
  .table14{
    top: 550px;
    left: 120px;
  }
  .table15{
    top: 550px;
    left: 220px;
  }
  .table16{
    top: 550px;
    left: 290px;
  }
  .table17{
    top: 650px;
    left: 50px;
  }
  .table18{
    top: 650px;
    left: 120px;
  }
  .table19{
    top: 650px;
    left: 220px;
  }
  .table20{
    top: 650px;
    left: 290px;
  }
  .table21{
    top: 750px;
    left: 50px;
  }
  .table22{
    top: 750px;
    left: 120px;
  }
  .table23{
    top: 750px;
    left: 220px;
  }
  .table24{
    top: 750px;
    left: 290px;
  }
  .Tablemarque{
    width: 160px;
    height: 40px;
    top: 300px;
  }
}    

   </style> 
   </head> 
   <body>        
      <div class="salle">
        <div>    
          <div class="table table1">
            <div><img src="assets/img/2D2.jpg" alt="Table 1">Table 1</div>
          </div>      
        </div> 
        <div>     
          <div class="table table2">
            <div><img src="assets/img/2D2.jpg" alt="Table 2">Table 2</div>
          </div>       
        </div> 
        <div>     
          <div class="table table3">
            <div><img src="assets/img/2D2.jpg" alt="Table 3">Table 3</div>
          </div>      
        </div>       
        <div>     
          <div class="table table4">
            <div><img src="assets/img/2D2.jpg" alt="Table 4">Table 4</div>
          </div>      
        </div>      
        <div>     
          <div class="table table5">
            <div><img src="assets/img/2D2.jpg" alt="Table 5">Table 5</div>
          </div>      
        </div>          
        <div>     
          <div class="table table6">
            <div><img src="assets/img/2D2.jpg" alt="Table 6">Table 6</div>
          </div>      
        </div>          
        <div>     
          <div class="table table7">
            <div><img src="assets/img/2D2.jpg" alt="Table 7">Table 7</div>
          </div>      
        </div>          
        <div>     
          <div class="table table8">
            <div><img src="assets/img/2D2.jpg" alt="Table 8">Table 8</div>
          </div>      
        </div>          
        <div>     
          <div class="table table9">
            <div><img src="assets/img/2D2.jpg" alt="Table 9">Table 9</div>
          </div>      
        </div>         
        <div>     
          <div class="table table10">
            <div><img src="assets/img/2D2.jpg" alt="Table 10">Table 10</div>
          </div>      
        </div>      
        <div>     
          <div class="table table11">
            <div><img src="assets/img/2D2.jpg" alt="Table 11">Table 11</div>
          </div>      
        </div>  
        <div>     
          <div class="table table12">
            <div><img src="assets/img/2D2.jpg" alt="Table 12">Table 12</div>
          </div>      
        </div>
        <div>     
          <div class="table table13">
            <div><img src="assets/img/2D2.jpg" alt="Table 13">Table 13</div>
          </div>      
        </div>
        <div>     
          <div class="table table14">
            <div><img src="assets/img/2D2.jpg" alt="Table 14">Table 14</div>
          </div>      
        </div>
        <div>     
          <div class="table table15">
            <div><img src="assets/img/2D2.jpg" alt="Table 15">Table 15</div>
          </div>      
        </div>
        <div>     
          <div class="table table16">
            <div><img src="assets/img/2D2.jpg" alt="Table 16">Table 16</div>
          </div>      
        </div>
        <div>     
          <div class="table table17">
            <div><img src="assets/img/2D2.jpg" alt="Table 17">Table 17</div>
          </div>      
        </div>
        <div>     
          <div class="table table18">
            <div><img src="assets/img/2D2.jpg" alt="Table 18">Table 18</div>
          </div>      
        </div>
        <div>     
          <div class="table table19">
            <div><img src="assets/img/2D2.jpg" alt="Table 19">Table 19</div>
          </div>      
        </div>
        <div>     
          <div class="table table20">
            <div><img src="assets/img/2D2.jpg" alt="Table 20">Table 20</div>
          </div>      
        </div>
        <div>     
          <div class="table table21">
            <div><img src="assets/img/2D2.jpg" alt="Table 21">Table 21</div>
          </div>      
        </div>
        <div>     
          <div class="table table22">
            <div><img src="assets/img/2D2.jpg" alt="Table 22">Table 22</div>
          </div>      
        </div>
        <div>     
          <div class="table table23">
            <div><img src="assets/img/2D2.jpg" alt="Table 23">Table 23</div>
          </div>      
        </div>
        <div>     
          <div class="table table24">
            <div><img src="assets/img/2D2.jpg" alt="Table 24">Table 24</div>
          </div>      
        </div>
        <div class="Tablemarque Tablemarque1">Table de marque</div> 
        <div class="table wchomme" ><img src="assets/img/IMG-20250501-WA0002.jpg" alt="Toillet Homme" style="width: 50%;"></div>
        <div class="table wcfemme " ><img src="assets/img/IMG-20250501-WA0003.jpg" alt="Toillet Femme" style="width: 50%;"></div>

      <!--  
        <div class="porte porte1">Porte</div>
        <div class="Toillet Toillet1">Toillet</div>            
        <div class="WC wchomme">Homme</div>            
        <div class="WC wcfemme">Femme</div>            
        <div class="Tablemarque Tablemarque1">Table Marque</div>   -->         
      </div> 
    </body> 
    </html> 

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