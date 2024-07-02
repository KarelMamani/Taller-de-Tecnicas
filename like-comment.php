<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    http_response_code(403);
    die('No tienes permiso para realizar esta acción.');
}

$commentId = $_POST['commentId'];
$username = $_SESSION['username'];

$mysqli = new mysqli('localhost', 'root', '', 'instant_delight');

if ($mysqli->connect_errno) {
    echo json_encode(['success' => false, 'message' => 'Error al conectar a la base de datos: ' . $mysqli->connect_error]);
    exit();
}

$stmt = $mysqli->prepare("SELECT id FROM likes WHERE comentario_id = ? AND usuario = ?");
$stmt->bind_param('is', $commentId, $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo json_encode(['success' => false, 'message' => 'Ya has dado like a este comentario.']);
    $stmt->close();
    $mysqli->close();
    exit();
}
$stmt->close();

$stmt = $mysqli->prepare("INSERT INTO likes (comentario_id, usuario) VALUES (?, ?)");
$stmt->bind_param('is', $commentId, $username);
$stmt->execute();
$stmt->close();

$stmt = $mysqli->prepare("UPDATE comentarios SET likes = likes + 1 WHERE id = ?");
$stmt->bind_param('i', $commentId);
$stmt->execute();
$stmt->close();

$mysqli->close();

echo json_encode(['success' => true]);
?>