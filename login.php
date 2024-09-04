<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manifestameloinem</title>
    <link rel="stylesheet" href="assets/css/styleslogin.css">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"></head>

<!-- body -->
<body>
  <div class="wrapper">
    <section class="form login">
      <header>¡Inicia sesión para poder manifestar!</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Dirección de Correo Electrónico</label>
          <input type="text" name="email" placeholder="Ingresa tu Correo Registrado" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu Contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Empezar a manifestar">
        </div>
      </form>
      <div class="link">¿Aún no te has registrado? <a href="registro.php">Regístrate acá</a></div>
      <div class="link">¿Eres un administrador? <a href="administracion/loginadmin.php">ingresa aquí</a></div>
    </section>
  </div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>

</html>