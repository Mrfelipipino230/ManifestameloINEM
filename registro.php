<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manifestameloinem</title>
    <link rel="stylesheet" href="assets/css/syleregistro.css">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>¡registro!</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombre </label>
            <input type="text" name="fname" placeholder="Nombre completo" required>
          </div>
          <div class="field input">
            <label>Tu nickname</label>
            <input type="text" name="lname" placeholder="Mr.gonorrea" required>
          </div>
          <div class="field input">
                <label>Grado</label>
                <input type="text" name="grado" placeholder="8 A 11" required>
          </div>
        </div>
        <div class="field input">
          <label>Correo intitucional</label>
          <input type="text" name="email" placeholder="tucorreo@correo.com" value="@inemjose.edu.co" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
          <div class="field input">
              <label>Genero</label>
              <select name="genero" class="field input">
                  <option value="Hombre">Hombre</option>
                  <option value="Mujer">Mujer</option>
              </select>
          </div>
        <div class="field image">
          <label>Tu Avatar</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Registrarse">
        </div>
      </form>
      <div class="link">Ya te has registrado? <a href="login.php">Ingresa desde acá</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>

</html>