<?php

include("db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1&& strlen($_POST['phone']) >= 1&& strlen($_POST['affair'])) {
        $nombre = trim($_POST['name']);
        $correo = trim($_POST['email']);
        $telefono = trim($_POST['phone']);
        $asunto = trim($_POST['affair']);
        $consulta = "INSERT INTO info(nombre, email, telefono, asunto) VALUES ('$nombre','$correo','$telefono','$asunto')";
        $resultado = mysqli_query($conexion,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">¡Registro correctamente!</h3>
            <?php
        } else {
            ?>
            <h3 class="error">¡Ha ocurrido un error!</h3>
            <?php
        }
    }   else {
        ?>
        <h3 class="error">¡Por favor complete los campos!</h3>
        <?php
    }
}
?>