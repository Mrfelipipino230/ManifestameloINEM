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
    <title>Perfil de usuario</title>
    <link rel="stylesheet" type="text/css" href="assets/css/stylesperfil.css">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<?php
$id = mysqli_real_escape_string($conn, $_SESSION['unique_id']);
$miuser = mysqli_query($conn,"SELECT * FROM users WHERE unique_id='$id'");
$use = mysqli_fetch_array($miuser);
?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
}
?>
<body>
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="php/images/<?php echo $row['img']; ?>" alt="" height="170px" >
                </div>
                <button type="button" name="cerrar" class="boton-portada">
                    <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Cerrar Sesión</a>
                </button>
                <a href="index.php">Inicio</a>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo $row['fname'] ?></h3>
                <p class="texto"><?php echo $row['estado']; ?></p>
            </div>
            <div class="perfil-usuario-footer">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="estado">
                        <label>Editar estado:</label>
                        <textarea name="estado" rows="10" cols="70" placeholder="¡Pone un poco de ti manito!"></textarea>
                    </div>
                    <div class="cambinickname">
                        <label>Cambiar nombre:</label>
                        <input type="text" name="fname" placeholder="Nuevo nombre" value="<?php echo $row['fname'];?>" required>
                    </div>
                    <div class="cambinickname">
                        <label>Cambiar nickname:</label>
                        <input type="text" name="lname" placeholder="Nuevo nickname" value="<?php echo $row['lname'];?>" required>
                    </div>
                    <div class="cambioimg">
                        <label>Cambiar avatar:</label>
                        <input type="file" name="img" required>
                    </div>
                    <header>
                        <div class="field button">
                            <input type="submit" name="actulizar" value="Actualizar">
                        </div>
                    </header>
                </form>
            </div>
        </div>
        <?php

        //selecciona y guarda los datos en variables puestos en el formulario
        if (isset($_POST['actulizar'])) {
            $lname = mysqli_real_escape_string($conn, $_POST['lname']);
            $fname = mysqli_real_escape_string($conn, $_POST['fname']);
            $estado = mysqli_real_escape_string($conn, $_POST['estado']);
        // selecciona datos de la base de datos users y los actualiza con nuevos datos puestos en el formulario
            $comprobar = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE lname =  '$lname' AND unique_id != $id"));
            if ($comprobar == 0) {
                $type = 'png';
                $rfoto = $_FILES['img']['tmp_name'];
                $name = $id . '.' . $type;
                if (is_uploaded_file($rfoto)) {
                    $destino = 'php/images/' . $name;
                    $nombrea = $name;
                    copy($rfoto, $destino);
                } else {
                    $nombrea = $use['img'];
                }
                $sql = mysqli_query($conn, "UPDATE users SET img = '$nombrea', lname = '$lname', estado = '$estado', fname='$fname'  WHERE unique_id = '$id'");
                if ($sql){
                    echo "<script type='text/javascript'>window.location='perfil.php'unique_id=$_SESSION[unique_id];</script>";
                }
            }else{
                echo 'el nickname ya existe';
            }


        }

        ?>
    </section>
</body>

</html>
