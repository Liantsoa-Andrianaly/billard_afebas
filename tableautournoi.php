<?php
$host = "localhost";
$username = "root";
$password = ""; // Laissez vide si vous n'avez pas de mot de passe
$dbname = "billiard_game";

// Crée une connexion
$conn = new mysqli($host, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
  die("La connexion a échoué: " . $conn->connect_error);
} 
echo "Connexion réussie";



// Récupérer les joueurs
$sql = "SELECT player_prenom FROM players";
$result = $conn->query($sql);

$joueurs = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $joueurs[] = $row['player_prenom'];
    }
}

$equipe1 = array_slice($joueurs, 0, 12); 
$equipe2 = array_slice($joueurs, 12, 12); 


// Fermer la connexion
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tableau du tournoi</title>

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
    <link href="assets/css/tableau.css" rel="stylesheet">

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
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
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
                    <li><a class="active" href="tableautournoi.php">Tableau du tournoi</a></li>
                    <li><a href="plansalle.php">Plan de la salle</a></li>
                    <li><a href="../../index.php">Se connecter</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs" style="background-color:white;">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center">
                    <h2 style="font-size: 36px; font-weight: bold; text-align: center; text-transform: uppercase; letter-spacing: 2px; color: rgb(10, 10, 10);">Tableau du tournoi</h2>
                </div>
            </div>
        </section>

        <div class="bracket-container" style="background-color:white;">
            <div class="bracket">

                <div class="round">
                    <?php foreach (array_slice($equipe1, 0, 6) as $joueur) : ?>
                        <div class="match"><?php echo htmlspecialchars($joueur); ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="round">
                    <?php foreach (array_slice($equipe1, 6, 3) as $joueur) : ?>
                        <div class="match"><?php echo htmlspecialchars($joueur); ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="round">
                    <?php foreach (array_slice($equipe1, 9, 2) as $joueur) : ?>
                        <div class="match"><?php echo htmlspecialchars($joueur); ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="round">
                    <div class="match"><?php echo htmlspecialchars($equipe1[11] ?? ""); ?></div>
                </div>
            </div>

            <div class="vs">VS</div>

            <div class="bracket1">

                <div class="round">
                    <?php foreach (array_slice($equipe2, 0, 6) as $joueur) : ?>
                        <div class="match"><?php echo htmlspecialchars($joueur); ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="round">
                    <?php foreach (array_slice($equipe2, 6, 3) as $joueur) : ?>
                        <div class="match"><?php echo htmlspecialchars($joueur); ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="round">
                    <?php foreach (array_slice($equipe2, 9, 2) as $joueur) : ?>
                        <div class="match"><?php echo htmlspecialchars($joueur); ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="round">
                    <div class="match"><?php echo htmlspecialchars($equipe2[11] ?? ""); ?></div>
                </div>
            </div>
        </div>

    </main>

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
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
