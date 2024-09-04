<?php
session_start();
include_once "php/config.php";
//evita inyecciones sql y inserta los datos a anonimos
if (isset($_POST['message'])) {
    $unique_id = $_SESSION['unique_id'];
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $sql = "INSERT INTO anonimos (unique_id, mensaje, nombre) VALUES ('$unique_id', '$message', '$name')";
    if (mysqli_query($conn, $sql)) {
        header("Location: incognito.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
