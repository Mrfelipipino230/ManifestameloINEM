<?php
include "../php/config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manifestameloinem</title>
    <link rel="stylesheet" href="../assets/css/styleslogin.css">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"></head>

<body>
<div class="wrapper">
    <section class="form login">
        <header>¡Inicia sesión en admin!</header>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="field input">
                <label>Usuario</label>
                <input type="text" name="usuario" placeholder="Ingresa tu nombre de Usuario" required>
            </div>
            <div class="field input">
                <label>Contraseña</label>
                <input type="password" name="contraseña" placeholder="Ingresa tu Contraseña" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field input">
                <label>Clave_carnet</label>
                <input type="password" name="clave_carnet" placeholder="Ingresa tu Clave de carnet" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="ingresar">
            </div>
        </form>
        <div class="link">Para poder acceder, habla con uno de los creadores de la página.</div>
        <div class="link"><a href="../index.php">Inicio</a></div>
    </section>
</div>
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];
    $clave_carnet = $_POST['clave_carnet'];

    $query = "SELECT * FROM users_admin WHERE usuario = ? AND contraseña = ? AND clave_carnet = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $usuario, $password, $clave_carnet);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        header("Location: baneador.php");
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
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
