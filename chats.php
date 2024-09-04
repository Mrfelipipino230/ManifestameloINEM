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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat MNF</title>
    <link rel="stylesheet" href="assets/css/styleschats.css">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


</head>

<body>
<div class="wrapper">
    <section class="chat-area">
        <?php
        //el mysqli_real_scape_string evita inyecciones sql y hace una consulta a la tabla users
        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
        } else {
            header("location: users.php");
        }
        ?>          <div class="container d-flex align-items-center">

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <header>
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto active" href="index.php">Inicio</a></li>
                        <li><a class="nav-link scrollto" href="comunidad.php">Comunidad</a></li>
                        <li><a class="nav-link scrollto" href="userss.php">Chat</a></li>
                        <li><a class="nav-link scrollto" href="incognito.php">ncógnito</a></li>
                        <li><a class="nav-link scrollto" href="perfil.php">Cuenta</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
        </div><!-- .navbar -->
        </header>
        <div class="chat-box-2">
        </div>
        <section class="body-chat">
            <section class="body-chat">
                <div class="seccion-titulo">
                    <h3>
                        <i class="fas fa-comments"></i>
                        Chat ManifestameloInem
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
                <div class="seccion-chat">
                    <div class="usuario-seleccionado">
                        <div class="cuerpo">
                            <span><h3><?php echo $row['lname'] ?></h3></span>
                            <p><?php echo $row['status']; ?></p>
                        </div>

                    </div>
                    <div class="panel-chat">
                        <div class="mensaje">
                            <div class="chat-box">

                            </div>
                        </div>
                        <!-- No quitar :) -->
                        <div class="mensaje left">
                            <div class="cuerpo">
                                <div class="texto">
                                    ---------------------------------------------------------------------------------------------------------------
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="typing-area">
                        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                        <input type="text" name="message" class="input-field" placeholder="Escribe tu mensaje aquí..." autocomplete="off">
                        <button></button>
                    </form>
                </div>
            </section>
            <!--====  End of html  ====-->
            <script src="javascript/chat.js"></script>
            <script src="javascript/users.js"></script>
        </section>
</div>

<script src="javascript/chat.js"></script>

</body>

</html>