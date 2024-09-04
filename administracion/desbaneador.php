<?php
include "../php/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $unique_id = isset($_POST['unique_id']) ? $_POST['unique_id'] : '';

    if (!empty($unique_id)) {
        $sql = "DELETE FROM bann WHERE unique_id = '$unique_id'";

        if ($conn->query($sql) === TRUE) {
            echo "Usuario desbaneado correctamente.";
            header("Location: baneador.php");

        } else {
            echo "Error al desbanear al usuario: " . $conn->error;
        }
    } else {
        echo "ID de usuario no proporcionado.";
    }
}
?>
