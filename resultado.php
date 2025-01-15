<?php
session_start();

// Verifica si la ciudad está en la sesión
if (isset($_SESSION['ciudad'])) {
    $ciudad = $_SESSION['ciudad'];
} else {
    echo "<div class='alert alert-danger text-center' role='alert'><h1>Error: No se encontró la ciudad.</h1></div>";
    echo "<a href='index.html' class='btn btn-primary d-block mx-auto'>Volver</a>";
    exit;
}

// Hacer la solicitud a la API con cURL
$apiKey = "0d81c562c80504aa75fea6cbf3be1662";
$apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$ciudad}&units=metric&lang=es&appid={$apiKey}";

$ch = curl_init(); // Inicia la sesión de cURL
curl_setopt($ch, CURLOPT_URL, $apiUrl); // Establece la URL de la API
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Obtiene la respuesta como cadena
curl_setopt($ch, CURLOPT_TIMEOUT, 5); // Establece un tiempo de espera de 5 segundos
$response = curl_exec($ch); // Ejecuta la solicitud
curl_close($ch); // Cierra la sesión de cURL

$data = json_decode($response, true);

// Verificar que la respuesta sea correcta
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta del Clima - Resultado</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <?php 
    if ($data && $data['cod'] == 200) {
        echo "<div class='card'>";
        echo "<div class='card-header text-center'><h1>Clima en {$ciudad}</h1></div>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>Temperatura: {$data['main']['temp']}°C</p>";
        echo "<p class='card-text'>Temperatura mínima: {$data['main']['temp_min']}°C</p>";
        echo "<p class='card-text'>Temperatura máxima: {$data['main']['temp_max']}°C</p>";
        echo "<p class='card-text'>Humedad: {$data['main']['humidity']}%</p>";
        echo "<p class='card-text'>Descripción: {$data['weather'][0]['description']}</p>";
        echo "<p class='card-text'>Viento: {$data['wind']['speed']} m/s</p>";
        echo "<p class='card-text'>Dirección del viento: {$data['wind']['deg']}°</p>";
        echo "<p class='card-text'>Presión atmosférica: {$data['main']['pressure']} hPa</p>";
        echo "<p class='card-text'>Nubosidad: {$data['clouds']['all']}%</p>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<div class='alert alert-danger text-center' role='alert'><h1>Error: No se encontró la ciudad especificada.</h1></div>";
    }
    ?>
    <a href="index.html" class="btn btn-primary d-block mx-auto">Volver</a>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
