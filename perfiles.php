<?php
session_start();
include_once "php/config.php";
include_once "datousuarioindex.php";
$unique_id = $_SESSION['unique_id'];
//consulta con la base de datos bann, se asegura su la cuenta es baneada, si lo esta no te deja entrar a la pagína
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
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/stylespost.css" rel="stylesheet">
</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center header-scrolled">
    <div class="container d-flex align-items-center">
        <a href="index.php" class="logo me-auto"><img src="assets/img/LOGO.png" width="200px" height="100px"></a>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php">Inicio</a></li>
                <li><a class="nav-link scrollto" href="comunidad.php">Comunidad</a></li>
                <li><a class="nav-link scrollto" href="userss.php">Chat</a></li>
                <li><a class="nav-link scrollto" href="incognito.php">Incógnito</a></li>
                <li><a class="nav-link scrollto" href="perfil.php"></a></li>
                <li><img src="php/images/<?php echo $row['img']; ?>" alt="" width="60" height="60" class="rounded-circle"></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
<br><br><br><br><br><br>
<?php
// manda un error si el id del post no es valido
if (!isset($_GET['id'])) {
    die("Error: perfil no especificado.");
}

$perfil_id = $_GET['id'];

if (isset($_GET['id'])) {
$id = $conn->real_escape_string($_GET['id']);
$sql = "SELECT * FROM peliculas WHERE id_peliculas = $id";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $pelicula = $resultado->fetch_assoc();
}
//muestra los datos de la base de datos
if ($post_found) {
    echo '<div class="post-container">';
    echo '<div class="post-header">';
    echo '<img src="php/images/' . $row['img'] . '" alt="" class="profile-pic">';
    echo '<span class="username">@' . $row_post["usuario"] . '</span>';
    echo '<span class="post-date">' . $row_post["fecha"] . '</span>';
    echo '</div>';
    echo '<div class="post-content">';
    echo '<h2>' . $row_post["titulo"] . '</h2>';
    echo '<p>' . $row_post["mensaje"] . '</p>';
    if (!empty($row_post["imagen"])) {
        echo '<img src="' . $row_post["imagen"] . '" alt="Imagen del mensaje" style="max-width: 100%; height: auto;"><br>';
    }
    if (!empty($row_post["video"])) {
        echo '<video controls style="max-width: 100%; height: auto;">';
        echo '<source src="' . $row_post["video"] . '" type="video/' . pathinfo($row_post["video"], PATHINFO_EXTENSION) . '">';
        echo 'Tu navegador no soporta la reproducción de video.';
        echo '</video><br>';
    }
    echo '</div>';
    echo '</div>';
} else {
    echo "Error: Post no encontrado.";
}
// Mostrar comentarios
echo '<div class="comments-container">';
echo '<h3 id="titl">Comentarios</h3>';
echo '<ul class="comments-list">';
//selecciona varios datos de diferentes bases de datos
$sql_comments = "SELECT c.*, u.img FROM comantarios c JOIN users u ON c.unique_id = u.unique_id WHERE c.id_publications = '$post_id'";
$result_comments = mysqli_query($conn, $sql_comments);

if (mysqli_num_rows($result_comments) > 0) {
    while ($row_comment = mysqli_fetch_assoc($result_comments)) {
        echo '<li class="comment">';
        echo '<img src="php/images/' . $row_comment['img'] . '" alt="Foto de perfil" class="profile-pic">';
        echo '<span class="username">@' . $row_comment["lname"] . '</span>';
        echo '<p id="textocom">' . $row_comment["comentario"] . '</p>';
        if (!empty($row_comment["imagen"])) {
            echo '<img src="' . $row_comment["imagen"] . '" alt="" style="max-width: 15%; height: auto;"><br>';
        }
        echo '</li>';
    }
} else {
    echo '<li>No hay comentarios.</li>';
}

echo '</ul>';
echo '<form action="comentar.php" method="post" enctype="multipart/form-data" class="comment-form">';
echo '<input type="hidden" name="id_publications" value="' . $post_id . '">';
echo '<textarea name="comentario" placeholder="Escribe un comentario..."></textarea>';
echo '<input type="file" name="imagen">';
echo '<button type="submit">Enviar</button>';
echo '</form>';
echo '</div>';
?>
</body>
</html>
