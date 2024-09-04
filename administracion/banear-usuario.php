<?php
include "../php/config.php";
include "baneador.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $unique_id = isset($_POST['unique_id']) ? $_POST['unique_id'] : '';

    if (!empty($unique_id)) {
        $sql = "INSERT INTO bann (unique_id) VALUES ('$unique_id')";

        if ($conn->query($sql) === TRUE) {
            echo "Usuario baneado correctamente.";
            header("Location: baneador.php");
        } else {
            echo "Error al banear al usuario: " . $conn->error;
        }
    } else {
        echo "ID de usuario no proporcionado.";
    }
}
?>
