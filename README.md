# Taller-de-Tecnicas
# Instant Delight

Instant Delight es una página web dedicada a publicar recetas de comida. Esta plataforma permite a los usuarios registrarse, iniciar sesión, comentar en las recetas y dar "likes" a los comentarios.

## Descripción del Producto

El objetivo de Instant Delight es proporcionar una plataforma fácil de usar para compartir y descubrir nuevas recetas. Los usuarios pueden:

- Registrarse y crear una cuenta.
- Iniciar sesión en su cuenta.
- Comentar en las recetas publicadas.
- Dar "likes" a los comentarios de otros usuarios.

## Configuración del Proyecto

### Requisitos

- PHP 7.4 o superior
- MySQL 5.7 o superior
- Servidor web (por ejemplo, Apache)

### Pasos de Configuración

1. **Clona el repositorio:**

   ```bash
   git clone https://github.com/tu_usuario/instant-delight.git
   cd instant-delight

2. Configura la base de datos:

Abre tu cliente MySQL (por ejemplo, MySQL Workbench o la línea de comandos de MySQL) y ejecuta los siguientes comandos para crear las bases de datos y las tablas necesarias:

      CREATE DATABASE login_db;
      USE login_db;

      CREATE TABLE users (
          id INT AUTO_INCREMENT PRIMARY KEY,
          username VARCHAR(50) NOT NULL UNIQUE,
          password VARCHAR(255) NOT NULL  
      );
      
      CREATE DATABASE IF NOT EXISTS instant_delight;
      USE instant_delight;
      
      CREATE TABLE IF NOT EXISTS comentarios (
          id INT AUTO_INCREMENT PRIMARY KEY,
          usuario VARCHAR(50),
          texto TEXT,
          fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
          likes INT DEFAULT 0
      );
      
      CREATE TABLE IF NOT EXISTS likes (
          id INT AUTO_INCREMENT PRIMARY KEY,
          comentario_id INT,
          usuario VARCHAR(50),
          fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
          FOREIGN KEY (comentario_id) REFERENCES comentarios(id) ON DELETE CASCADE
      );

3. Configura la conexión a la base de datos en PHP:

Abre el archivo db_connection.php y configura las credenciales de tu base de datos:

<?php
$host = "localhost";
$db_name = "login_db";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

5. Inicia el servidor web:

Asegúrate de que tu servidor web esté configurado para servir los archivos de Instant Delight.
Accede a la página web:

Abre tu navegador y navega a http://localhost/instant-delight (o la URL donde hayas configurado el proyecto) para ver la página de recetas en acción.

Contribuciones
¡Las contribuciones son bienvenidas! Por favor, abre un issue o un pull request para discutir cualquier cambio que te gustaría realizar.

Licencia
Este proyecto está bajo la Licencia MIT. Consulta el archivo LICENSE para obtener más detalles.

Este `README.md` proporciona una descripción clara del proyecto, los requisitos necesarios, y los pasos para configurarlo. También invita a la comunidad a contribuir y proporciona información sobre la licencia del proyecto. Asegúrate de personalizar los enlaces y la información según sea necesario para tu proyecto específico.
