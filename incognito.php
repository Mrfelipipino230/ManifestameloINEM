<?php
//inicia una ssesion y se conecta con la base de datos
session_start();
include_once "php/config.php";
include_once "datousuarioindex.php";
$unique_id = $_SESSION['unique_id'];

$sql = "SELECT * FROM bann WHERE unique_id = '$unique_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Tu cuenta ha sido baneada. No puedes acceder a esta página.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ManifestameloInem</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/stylesincognito.css" rel="stylesheet">
</head>

<body><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

        <a href="index.php" class="logo me-auto"><img src="assets/img/LOGO.png" width="200px" height="100px" ></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="index.php">Inicio</a></li>
                <li><a class="nav-link scrollto" href="comunidad.php">Comunidad</a></li>
                <li><a class="nav-link scrollto" href="userss.php">Chat</a></li>
                <li><a class="nav-link scrollto active" href="incognito.php">Incognito</a></li>
                <li><a class="nav-link scrollto" href="perfil.php"><img src="php/images/<?php echo $row['img']; ?>" alt="" width="60" height="60" class="rounded-circle"></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <div class="social-links">
            <a href="#" class="twitter"><i class=""></i></a>
            <a href="#" class="facebook"><i class=""></i></a>
            <a href="#" class="linkedin"><i class=""></i></a>
            <a href="#" class="instagram"><i class=""></i></a>
        </div>

    </div>
</header>
<h1 id="y">Anonimos</h1>
<div class="container mt-5">
    <div class="chat-container">
        <div class="chat-header">
        </div>
        <div class="chat-messages">
            <?php include_once "obtener_mensaje.php"; ?>
        </div>
        <div class="chat-input">
            <form action="insertador_mensaje.php" method="POST">
                <input type="text" name="name" placeholder="Tu nombre" required>
                <input type="text" name="message" placeholder="Escribe un mensaje..." required>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>
<!-- ======= Footer ======= -->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <img src="assets/img/INEM.png" width="300px" height="300px" >
                  
                  <p>Este proyecto se tratara de la comunidad de el Inem para que se puedan expresar libremente teniendo encuenta las politicas de privacidad y seguridad establecidas </p>
                </div>

                <div class="footer-newsletter">
                  <h4>¿Donde nos puedes ubicar?</h4>
                  <p>tememos nuetra sede en el colegio Inem Jose Felix De Restrepo el cual es el mejor colegio de el area metropolitana. <b>Si quieres hacer parte de las actualizacioens constantes de esta pagina pon tu correo aqui:</b></p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Enviar">
                  </form>
                </div>

              </div>

              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>Nuestros links</h4>
                  <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="comunidad.php">Comunidad</a></li>
                    <li><a href="amigos.html">Amigos</a></li>
                    <li><a href="icognito.html">Incognito</a></li>
                    <li><a href="#">Politicas de privacidad</a></li>
                    <li><a href="nosotros.html">Nosotros</a></li>
                  </ul>
                </div>

                <div class="footer-links">
                  <h4>¡Contactanos!</h4>
                  <p>
                    Calle Calle 38C Sur en Kennedy<br>
                    Medellin antioquia<br>
                    <strong>Telefono:</strong> +57 3052555266<br>
                    <strong>Correo:</strong> infoManif@inemjose.edu.co<br>
                  </p>
                </div>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="https://web.facebook.com/profile.php?id=61553320431823" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/manifestameloinem/" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Mandanos un mensaje</h4>

              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu Correo" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Manifestame tus sugerencias sog" required></textarea>
                </div>

                <div class="my-3">
                  <div class="loading">¡Cargando!</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Tu mensaje esta enviado. Thank you!</div>
                </div>

                <div class="text-center"><button type="submit" title="Send Message">Enviar mensaje</button></div>
              </form>

            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>ManifestameloInem</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
        Designed by <a href="nosotros.html">Grupo 2</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>