<?php
session_start();
include_once "../php/config.php";
include_once "../datousuarioindex.php";
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
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/styleIndex.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Rapid hola zoz zoorra
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-scrolled">
    <div class="container d-flex align-items-center">

        <a href="../index.php" class="logo me-auto"><img src="../assets/img/LOGO.png" width="200px" height="100px" ></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="../index.php">Inicio</a></li>
                <li><a class="nav-link scrollto active" href="../comunidad.php">Comunidad</a></li>
                <li><a class="nav-link scrollto" href="../userss.php">Chat</a></li>
                <li><a class="nav-link scrollto" href="../incognito.php">incógnito</a></li>
                <li><a class="nav-link scrollto" href="../perfil.php"><img src="../php/images/<?php echo $row['img']; ?>" alt="" width="60" height="60" class="rounded-circle"></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header --><br><br><br><br><br><br><br><br><br><br>
<form action="" method="post" enctype="multipart/form-data" class="post-form">
    <h2 class="title">Crea un Post</h2>
    <input type="text" class="title-input" name="titulo" placeholder=" Titulo*"><br><br>
    <label for="mensaje">Mensaje:</label><br>
    <textarea id="mensaje" name="mensaje" rows="6" cols="67" required></textarea><br><br>
    <div class="image-upload">
        <label for="imagen">Subir Imagen</label>
        <input type="file" id="imagen" name="imagen">
    </div>
    <div class="image-upload">
        <label for="video">Subir un video</label>
        <input type="file" id="video" name="video">
    </div>
    <button type="submit" id="boton">Publicar</button>
</form>
<?php
if (!isset($_SESSION['unique_id'])) {
    die("Error: Usuario no autenticado.");
}

$unique_id = $_SESSION['unique_id'];

$sql_user = "SELECT lname, img FROM users WHERE unique_id = '$unique_id'";
$result_user = mysqli_query($conn, $sql_user);

if ($result_user && mysqli_num_rows($result_user) > 0) {
    $row_user = mysqli_fetch_assoc($result_user);
    $autor = $row_user['lname'];
    $profile_pic = $row_user['img'];
} else {
    die("Error: No se pudo obtener el nombre del autor.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';
    $imagen = '';
    $video = '';
    if (!empty($titulo) && !empty($mensaje)) {
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
            $target_dir = "../php/imageschisme/";
            $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["imagen"]["tmp_name"]);
            if ($check !== false) {
                if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
                    $imagen = $target_file;
                } else {
                    echo "Error al subir la imagen.";
                }
            } else {
                echo "El archivo no es una imagen.";
            }
        }

        if (isset($_FILES['video']) && $_FILES['video']['error'] == 0) {
            $target_dir = "../php/imageschisme/";
            $target_file = $target_dir . basename($_FILES["video"]["name"]);
            $videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $allowed_types = ['mp4', 'webm', 'ogg'];
            if (in_array($videoFileType, $allowed_types)) {
                if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
                    $video = $target_file;
                } else {
                    echo "Error al subir el video.";
                }
            } else {
                echo "El archivo no es un video válido.";
            }
        }

        $sql = "INSERT INTO chisme (usuario, unique_id, titulo, mensaje, imagen, video, fecha) VALUES ('$autor','$unique_id', '$titulo', '$mensaje', '$imagen', '$video', NOW())";

        if (mysqli_query($conn, $sql)) {
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
?>
<div class="mensajes">
    <div class="cop">
        <?php
        $sql = "SELECT p.*, u.img FROM chisme p JOIN users u ON p.unique_id = u.unique_id ORDER BY p.fecha DESC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Formatear la fecha
                $fecha_formateada = date('d-m-Y H:i:s', strtotime($row["fecha"]));

                echo '<div class="post-container">';
                echo '<div class="post-header">';
                echo '<img src="../php/images/' . $row['img'] . '" alt="Foto de perfil" class="profile-pic">';
                echo '<span class="username">@' . $row["usuario"] . '</span>';
                echo '<span class="post-date">' . $fecha_formateada . '</span>';
                echo '</div>';
                echo '<div class="post-content">';
                echo '<h2>' . $row["titulo"] . '</h2>';
                echo '<p>' . $row["mensaje"] . '</p>';
                if (!empty($row["imagen"])) {
                    echo '<img src="' . $row["imagen"] . '" alt="Imagen del mensaje" style="max-width: 100%; height: auto;"><br>';
                }
                if (!empty($row["video"])) {
                    echo '<video controls style="max-width: 100%; height: auto;">';
                    echo '<source src="' . $row["video"] . '" type="video/' . pathinfo($row["video"], PATHINFO_EXTENSION) . '">';
                    echo 'Tu navegador no soporta la reproducción de video.';
                    echo '</video><br>';
                }
                echo '</div>';
                echo '<a href="../post.php?id=' . $row["id_publications"] . '">Ver más</a>';
                echo '</div>';
                echo '<hr>';
            }
        } else {
            echo "No hay posts.";
        }
        ?>
    </div>
</div>





</main><!-- End #main -->


<!-- ======= Footer ======= -->
<footer id="footer" class="section-bg">
    <div class="footer-top">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">

                        <div class="col-sm-6">

                            <div class="footer-info">
                                <img src="../assets/img/INEM.png" width="300px" height="300px" >

                                <p>Este proyecto se tratará de la comunidad del Inem, para que se puedan expresar libremente, teniendo en cuenta las políticas de privacidad y seguridad establecidas.</p>
                            </div>

                            <div class="footer-newsletter">
                                <h4>¿Donde nos puedes ubicar?</h4>
                                <p>Tenemos nuestra sede en el colegio Inem José Félix de Restrepo, el cual es el mejor colegio del área metropolitana. <b>Si quieres hacer parte de las actualizaciones constantes de esta página, pon tu correo aquí:</b></p>
                                <form action="" method="post">
                                    <input type="email" name="email"><input type="submit" value="Enviar">
                                </form>
                            </div>

                        </div>

                        <div class="col-sm-6">
                            <div class="footer-links">
                                <h4>Nuestros links</h4>
                                <ul>
                                    <li><a href="../index.html">Inicio</a></li>
                                    <li><a href="../comunidad.php">Comunidad</a></li>
                                    <li><a href="../amigos.html">Amigos</a></li>
                                    <li><a href="../incognito.php">Incognito</a></li>
                                    <li><a href="#">Politicas de privacidad</a></li>
                                    <li><a href="../nosotros.html">Nosotros</a></li>
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
                                <a href="https://www.instagram.com/manifestameloinem2/" class="instagram"><i class="bi bi-instagram"></i></a>
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
<script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>
