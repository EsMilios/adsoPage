<?php
// getAudio.php
$conexion = mysqli_connect('localhost', 'u469734594_adsoPageRoot', 'AdsoPage_2024', 'u469734594_adsoPage');

// Verifica la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtiene el nombre del archivo desde la URL
$nombreArchivo = isset($_GET['nombre']) ? $_GET['nombre'] : '';

// Consulta para obtener el audio
$query = "SELECT audio FROM webConversations WHERE nombre = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param('s', $nombreArchivo);
$stmt->execute();
$stmt->store_result();

// Verifica si se encontró el archivo
if ($stmt->num_rows > 0) {
    $stmt->bind_result($audio);
    $stmt->fetch();

    header('Content-Type: audio/mp3');
    echo $audio;
} 

$stmt->close();
mysqli_close($conexion);
?>