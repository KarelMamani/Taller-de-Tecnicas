<?php
session_start();

// Verificar si el usuario está autenticado
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $loginStatus = "<p>Bienvenido, $username!</p>";
    $loginStatus .= '<a href="logout.php">Cerrar sesión</a>';
} else {
    $loginStatus = '<a href="login.php">Iniciar Sesión</a>';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Receta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <section id="Inicio" class="section">
        <div class="menu">
            <div class="container">
                <nav class="navbar">
                    <div class="menu-1">
                        <ul>
                            <li><a href="index.php">Inicio</a></li>

                        </ul>
                    </nav>
                        <img src="imagenes/logo.png" alt="Logo" class="logo">
                    <nav class="navbar">
                        <ul>
                            <li><a href="#recetas">Recetas</a></li>
                            <li><?php echo $loginStatus; ?></li>
                        </ul>
                        
                    </nav>
                </div>
            </div>
        </div>
    </section>
    </header>
    <section id="detalle-receta" class="section">
        <main class="container">
            <section class="receta">
                <h1>Pasta al Ajillo</h1>
                <img src="imagenes/pasta_ajillo.jpg" alt="Pasta al Ajillo">
                <h2>Ingredientes</h2>
                <ul>
                    <li class="ingredientes-categoria">Pasta:</li>
                    <li>200 g de espaguetis</li>
    
                    <li class="ingredientes-categoria">Salsa:</li>
                    <li>4 dientes de ajo</li>
                    <li>1/4 taza de aceite de oliva</li>
                    <li>1/4 taza de queso parmesano rallado</li>
                    <li>1/2 cucharadita de hojuelas de chile</li>
                    <li>1 cucharada de perejil fresco picado</li>
                    <li>Sal al gusto</li>
                    <li>Pimienta al gusto</li>
                </ul>
                <h2>Preparación</h2>
                <ol>
                    <li>Cocinar los espaguetis según las instrucciones del paquete. Escurrir y reservar.</li>
                    <li>En una sartén grande, calentar el aceite de oliva a fuego medio.</li>
                    <li>Añadir los dientes de ajo picados y cocinar hasta que estén dorados y fragantes.</li>
                    <li>Agregar las hojuelas de chile y mezclar bien.</li>
                    <li>Incorporar la pasta cocida a la sartén y mezclar para que se impregne bien con el ajo y el aceite.</li>
                    <li>Agregar el queso parmesano rallado y mezclar nuevamente.</li>
                    <li>Salpimentar al gusto y retirar del fuego.</li>
                    <li>Servir la pasta al ajillo caliente, espolvoreada con perejil fresco picado.</li>
                </ol>
                <div class="creador">
                    <img src="imagenes/user-icon.jpeg" alt="Usuario">
                    <div>
                        <p>Receta creada por Ana López</p>
                        <p class="fecha">Publicado el 28 de junio de 2024</p>
                    </div>
                </div>
            </section>
        </main>
    </section>
        </main>

    

    

    <footer>
        <div class="container">
            <div class="links">
                <h4>Enlaces</h4>
                <ul>
                    <li><a href="#">Enlace 1</a></li>
                    <li><a href="#">Enlace 2</a></li>
                    <li><a href="#">Enlace 3</a></li>
                    <li><a href="#">Enlace 4</a></li>
                </ul>
            </div>
        </div>

        <p>&copy; 2024 Instant Delight. Todos los derechos reservados.</p>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
