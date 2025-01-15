<?php
session_start();

// Verifica si se recibió una ciudad en el formulario
if (isset($_POST['ciudad'])) {
    $_SESSION['ciudad'] = $_POST['ciudad'];
    // Redirige al archivo de resultado después de guardar la ciudad
    header("Location: resultado.php");
    exit();
} else {
    // Si no se recibe ciudad, muestra un error
    echo "<h1>Error: No se ha recibido ninguna ciudad.</h1>";
    echo "<a href='index.html' class='btn btn-primary'>Volver</a>";
}
?>
