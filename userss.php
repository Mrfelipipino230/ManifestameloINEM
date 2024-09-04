<?php
session_start();

include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat MNF</title>
    <link rel="stylesheet" type="text/css"">
    <link rel="stylesheet" href="assets/css/styleschats.css"/>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<?php
//hace una consulta a la tabla users para sacar todos los datos
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
}
?>
<div class="container d-flex align-items-center">

    <header>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto " href="index.php">Inicio</a></li>
                <li><a class="nav-link scrollto" href="comunidad.php">Comunidad</a></li>
                <li><a class="nav-link scrollto active" href="userss.php">Chat</a></li>
                <li><a class="nav-link scrollto" href="incognito.php">Incognito</a></li>
                <li><a class="nav-link scrollto" href="perfil.php"><?php  echo $row['lname'];?></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
</div><!-- .navbar -->
<body>
<section class="body-chat">
    <div class="seccion-titulo">
        <h3>
            <i class="fas fa-comments"></i>
            Chat Manifestameloinem
        </h3>
    </div>
    <div class="seccion-usuarios">
        <div class="seccion-buscar">
            <div class="search">
                <span class="text">Selecciona un usuario para iniciar el chat:</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">

            </div>
        </div>

    </div>
</section>
<!--====  End of html  ====-->
<script src="javascript/chat.js"></script>
<script src="javascript/users.js"></script>
</body>

</html>