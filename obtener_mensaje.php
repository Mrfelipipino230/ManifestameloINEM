<?php
include_once "php/config.php";

// selecciona los id de los menjaes en la tabla e anonimos y los limita
$sql = "SELECT * FROM anonimos ORDER BY id_mensajes DESC LIMIT 20";
$result = mysqli_query($conn, $sql);
// muestra los mensajes
while ($row = mysqli_fetch_assoc($result)) {
    $message_class = ($row['unique_id'] == $_SESSION['unique_id']) ? 'message-right' : 'message-left';
    echo "<div class='message $message_class'><strong>" . htmlspecialchars($row['nombre']) . ":</strong> " . htmlspecialchars($row['mensaje']) . "</div>";
}
?>
