<?php
session_start();
include 'php/config.php';
//// manda un error si el unique_id no  existe
if (!isset($_SESSION['unique_id'])) {
    die("Error: Usuario no autenticado.");
}

$unique_id = $_SESSION['unique_id'];
//hace una consulta a users para buscar el nombre del autor
$sql_user = "SELECT lname FROM users WHERE unique_id = '$unique_id'";
$result_user = mysqli_query($conn, $sql_user);

if ($result_user && mysqli_num_rows($result_user) > 0) {
    $row_user = mysqli_fetch_assoc($result_user);
    $autor = $row_user['lname'];
} else {
    die("Error: No se pudo obtener el nombre del autor.");
}
//selecciona y guarda los datos en variables
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_publications = isset($_POST['id_publications']) ? $_POST['id_publications'] : '';
    $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : '';
    $imagen = '';
    if (!empty($comentario)) {
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
            $target_dir = "php/imagesForo/";
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

        $sql = "INSERT INTO comantarios (id_publications, unique_id, lname, comentario, imagen) VALUES ('$id_publications', '$unique_id', '$autor', '$comentario', '$imagen')";

        if (mysqli_query($conn, $sql)) {
            header("Location: post.php?id=" . $id_publications);
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "El comentario no puede estar vacío.";
    }
}
?>
