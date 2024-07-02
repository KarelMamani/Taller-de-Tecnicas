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
                <h1>Pizza</h1>
                <img src="imagenes/pizza.jfif" alt="Pizza">
                <h2>Ingredientes</h2>
                <ul>
                    <li class="ingredientes-categoria">Masa:</li>
                    <li>2 tazas de harina</li>
                    <li>1 taza de agua tibia</li>
                    <li>1 cucharadita de sal</li>
                    <li>1 cucharadita de azúcar</li>
                    <li>1 cucharadita de levadura seca</li>
                    <li>2 cucharadas de aceite de oliva</li>
    
                    <li class="ingredientes-categoria">Salsa:</li>
                    <li>1 taza de puré de tomate</li>
                    <li>2 dientes de ajo</li>
                    <li>1 cucharadita de sal</li>
                    <li>1 cucharadita de orégano</li>
                    <li>1 cucharada de aceite de oliva</li>
    
                    <li class="ingredientes-categoria">Cobertura:</li>
                    <li>200 g de queso mozzarella</li>
                    <li>Hojas de albahaca fresca</li>
                    <li>1 pizca de sal</li>
                    <li>1 pizca de pimienta</li>
                </ul>
                <h2>Preparación</h2>
                <ol>
                    <li>En un bol, disolver la levadura y el azúcar en el agua tibia. Dejar reposar por 10 minutos.</li>
                    <li>Agregar la harina y la sal a la mezcla de levadura, y amasar hasta obtener una masa suave. Añadir el aceite de oliva y amasar un poco más.</li>
                    <li>Tapar la masa con un paño húmedo y dejarla reposar en un lugar cálido durante 1 hora o hasta que haya doblado su tamaño.</li>
                    <li>Precalentar el horno a 220°C (430°F).</li>
                    <li>En una superficie enharinada, estirar la masa con un rodillo hasta obtener el grosor deseado.</li>
                    <li>Colocar la masa en una bandeja para pizza ligeramente engrasada.</li>
                    <li>Para la salsa, mezclar el puré de tomate, el ajo picado, la sal, el orégano y el aceite de oliva.</li>
                    <li>Esparcir la salsa sobre la masa de manera uniforme.</li>
                    <li>Distribuir el queso mozzarella sobre la salsa.</li>
                    <li>Hornear la pizza en el horno precalentado durante 15-20 minutos o hasta que la masa esté dorada y el queso burbujeante.</li>
                    <li>Retirar del horno y agregar las hojas de albahaca fresca, sal y pimienta al gusto.</li>
                    <li>Cortar y servir caliente.</li>
                </ol>
                <div class="creador">
                    <img src="imagenes/user-icon.jpeg" alt="Usuario">
                    <div>
                        <p>Receta creada por Juan Pérez</p>
                        <p class="fecha">Publicado el 28 de junio de 2024</p>
                    </div>
                </div>
            </section>
            <section class="comentarios">
                <<h2>Comentarios</h2>
                <div class="comentario" data-id="1">
                    <img src="imagenes/user-icon.jpeg" alt="Usuario" class="usuario">
                    <div class="comentario-texto">
                        <p class="nombre-usuario">Juan Pérez</p>
                        <p class="fecha">27 de junio de 2024, 14:00</p>
                        <p>Este plato es delicioso, muy recomendable. Lo he preparado varias veces y siempre queda perfecto.</p>
                        <button class="like-btn">Like <span class="like-count">0</span></button>
                    </div>
                </div>
                <div class="comentario">
                    <img src="imagenes/user-icon.jpeg" alt="Usuario" class="usuario">
                    <div class="comentario-texto">
                        <p class="nombre-usuario">Ana López</p>
                        <p class="fecha">27 de junio de 2024, 15:30</p>
                        <p>Lo hice para mi familia y les encantó. La combinación de sabores es perfecta.</p>
                    </div>
                </div>
            </section>
        </main>


        </main>
    </section>

    

    

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
