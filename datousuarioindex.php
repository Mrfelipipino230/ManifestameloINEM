<?php
include_once "php/config.php";
//si el usuario no tiene unique_id lo manda a iniciar sesion
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>


<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php
          //selecciona todos los datos de la base de datos users
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
          if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
          }
          ?>
  <script src="javascript/users.js"></script>

</body>

</html>