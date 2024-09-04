<?php
include "../php/config.php";

session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: loginadmin.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logoutadmin'])) {
    session_destroy();
    header("Location: loginadmin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador de usuario</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="styleadmin.css">
</head>
<body>
<form method="post">
    <input type="submit" name="logoutadmin" value="Cerrar Sesión">
</form>
<form class="formulario" method="post">
    <h1>Buscador de usuario</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" id="search-input" name="search" placeholder="Buscar usuario por ID...">
        </div>
        <input type="submit" value="Enviar" class="button">
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = isset($_POST['search']) ? $_POST['search'] : '';

    if (!empty($search)) {
        // Consulta para buscar usuarios y publicaciones por ID
        $sql = "SELECT u.unique_id, u.fname, u.lname, u.email, p.id_publications AS post_id, p.titulo, p.mensaje, p.imagen, p.fecha
                FROM users u
                LEFT JOIN publications p ON u.unique_id = p.unique_id
                WHERE u.unique_id = '$search'
                ORDER BY p.fecha DESC";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Título del Post</th><th>Mensaje</th><th>Imagen</th><th>Acciones</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["unique_id"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["email"] . "</td>
                          <td>" . $row["titulo"] . "</td><td>" . $row["mensaje"] . "</td>";
                if (!empty($row["imagen"])) {
                    echo "<td><img src='../" . $row["imagen"] . "' alt='Imagen del mensaje' style='max-width: 100%; height: auto;'></td>";
                } else {
                    echo "<td>No hay imagen</td>";
                }
                echo "<td>" . $row["fecha"] . "</td>
                      <td>
                          <form method='post' action='eliminar-post.php'>
                              <input type='hidden' name='post_id' value='" . $row["post_id"] . "'>
                              <input type='submit' value='Eliminar' class='button'>
                          </form>
                          <form method='post' action='banear-usuario.php'>
                              <input type='hidden' name='unique_id' value='" . $row["unique_id"] ."'>
                              <input type='submit' value='Banear' class='button'>
                          </form>
                          <form method='post' action='desbaneador.php'>
                              <input type='hidden' name='unique_id' value='" . $row["unique_id"] . "'>
                              <input type='submit' value='Desbanear' class='button'>
                          </form>
                      </td></tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron resultados.";
        }
    } else {
        echo "Por favor, ingrese un término de búsqueda.";
    }
}
?>
</body>
</html>

