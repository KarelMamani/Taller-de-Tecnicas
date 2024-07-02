<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Verificar si el usuario ya existe
    $checkSql = "SELECT * FROM users WHERE username = :username";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bindParam(':username', $username);
    $checkStmt->execute();
    $existingUser = $checkStmt->fetch();

    if ($existingUser) {
        $message = "El nombre de usuario ya existe, por favor vuelva a intetar.";
    } else {
        // Insertar el nuevo usuario
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            $message = "Registration successful!";
        } else {
            $message = "Error: " . $stmt->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <?php if (!empty($message)) : ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p>¿Ya tiene una cuenta? <a href="login.php">Login aquí</a></p>
    </div>
</body>
</html>

