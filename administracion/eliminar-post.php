<?php
include "../php/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = isset($_POST['post_id']) ? $_POST['post_id'] : '';

    if (!empty($post_id)) {
        $sql = "DELETE FROM publications WHERE id_publications = '$post_id'";

        if ($conn->query($sql) === TRUE) {
            echo "Publicación eliminada correctamente.";
            header("Location: baneador.php");
        } else {
            echo "Error al eliminar la publicación: " . $conn->error;
        }
    } else {
        echo "ID de publicación no proporcionado.";
    }
}
?>
