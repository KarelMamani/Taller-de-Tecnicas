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
                <h1>Carne a la Mongoliana</h1>
                <img src="imagenes/carne-a-la-mongoliana.jpeg" alt="Carne a la Mongoliana">
                <h2>Ingredientes</h2>
                <ul>
                    <li class="ingredientes-categoria">Frutas y verduras:</li>
                    <li>Aji (Opcional)</li>
                    <li>2 Cebollines</li>
                    <li>2 Dientes ajo</li>
                    
                    <li class="ingredientes-categoria">Cerveza, vinos y licores:</li>
                    <li>1/4 Taza vino blanco</li>
                    
                    <li class="ingredientes-categoria">Proteínas:</li>
                    <li>700 g Lomo liso o asiento (cortes bien magros)</li>
                    
                    <li class="ingredientes-categoria">Otros:</li>
                    <li>1/2 Taza salsa de soya</li>
                    <li>Aceite</li>
                    <li>1 Cda jengibre</li>
                    <li>2 Cda maicena</li>
                </ul>

                <h2>Preparación</h2>
            <ol>
                <li>Cortar el lomo liso en tiras finas y mezclar con la maicena. Dejar reposar por 10 minutos.</li>
                <li>Calentar aceite en un wok o sartén grande a fuego alto. Agregar las tiras de carne y cocinar hasta que estén doradas. Retirar y reservar.</li>
                <li>En la misma sartén, agregar un poco más de aceite si es necesario y sofreír los ajos picados, el jengibre rallado y los cebollines en rodajas.</li>
                <li>Añadir el vino blanco y dejar reducir por unos minutos.</li>
                <li>Agregar la salsa de soya y cocinar por unos minutos más.</li>
                <li>Incorporar nuevamente la carne a la sartén y mezclar bien con la salsa.</li>
                <li>Opcionalmente, añadir aji picado al gusto.</li>
                <li>Cocinar por unos minutos más hasta que la carne esté bien impregnada de la salsa.</li>
                <li>Servir caliente, acompañado de arroz blanco o fideos chinos.</li>
            </ol>

        
                <div class="creador">
                    <img src="imagenes/user-icon.jpeg" alt="Usuario">
                    <div>
                        <p>Receta creada por María García</p>
                        <p class="fecha">Publicado el 27 de junio de 2024</p>
                    </div>
                </div>

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
