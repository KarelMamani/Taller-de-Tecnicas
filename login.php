<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user['password'])) {
            echo "Login successful!";
            // Después de verificar el login exitoso
            session_start();
            $_SESSION['username'] = $username; // Almacena el nombre de usuario en la sesión
            header('Location: index.php');
            exit();

            // Aquí puedes iniciar sesión, establecer cookies, redireccionar, etc.
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="">
            <!-- Campo Password arriba -->
            Username: <input type="text" name="username" required><br>
            <!-- Campo Username abajo -->
            Password: <input type="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
        <!-- Botón de Registro con JavaScript -->
        <button class="register-btn" onclick="goToRegister()">Registro</button>
    </div>

    <script>
        function goToRegister() {
            window.location.href = "registro.php";
        }
    </script>
</body>
</html>

