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
    <title>Recetas Instant Delight</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
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
                            <li><a href="#recetas">Recetas</a></li>
                        </ul>
                    </nav>
                    <img src="imagenes/logo.png" alt="Logo" class="logo">
                    <nav class="navbar">
                        <ul>
                            <li><a href="#sobre-nosotros">Sobre Nosotros</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                            <li><?php echo $loginStatus; ?></li>

                            
                        </ul>
                        
                    </nav>
                </div>
            </div>
        </div>
    </section>
    </header>

    <section id="recetas" class="section">
        <div class="container">
            <h1>Recetas</h1>
            <div class="search-bar">
                <input type="text" id="search" placeholder="Buscar recetas...">
                <button>Buscar</button>
            </div>
            <div class="filters">
                <button class="filter-button" data-filter="all">Todo</button>
                <button class="filter-button" data-filter="carnes">Carnes</button>
                <button class="filter-button" data-filter="pizza">Pizza</button>
                <button class="filter-button" data-filter="burritos">Burritos</button>
                <button class="filter-button" data-filter="hamburguesa">Hamburguesas</button>
                <button class="filter-button" data-filter="almuerzos">Almuerzos</button>
                <button class="filter-button" data-filter="vegetariano">Vegetariano</button>
                <button class="filter-button" data-filter="sandwich">Sandwiches</button>
                <button class="filter-button" data-filter="pocos-ingredientes">Pocos Ingredientes</button>
                <button class="filter-button" data-filter="ensalada">Ensaladas</button>
            </div>
            
            <div class="recipes">
                <div class="recipe" data-category="pasta">
                    <a href="recetaPastaAjillo.php">
                        <img src="imagenes/pasta_ajillo.jpg" alt="Pasta al Ajillo">
                        <div class="recipe-details">
                            <div class="recipe-title">Pasta al Ajillo</div>
                            <p>Una receta sencilla y deliciosa de pasta con ajo, aceite de oliva y perejil.</p>
                        </div>
                    </a>
                </div>
                <div class="recipe" data-category="carnes">
                    <a href="recetaCarneMongoliana.php">
                        <img src="imagenes/carne-a-la-mongoliana.jpeg" alt="carne-a-la-mongoliana">
                        <div class="recipe-details">
                            <div class="recipe-title">Carne Mongoliana</div>
                            <p>La Carne a la Mongoliana es un plato clásico de la cocina asiática conocido por su sabor intenso y delicioso.</p>
                        </div>
                    </a>
                </div>

                <div class="recipe" data-category="pizza">
                    <a href="recetaPizza.php">
                        <img src="imagenes/food9.png" alt="Pizza">
                        <div class="recipe-details">
                            <div class="recipe-title">Pizza</div>
                            <p> Una pizza clásica con una base de masa, salsa de tomate, queso y tus ingredientes favoritos como pepperoni, champiñones, y pimientos.</p>
                        </div>
                    </a>
                </div>
                <div class="recipe" data-category="pasta vegetariano almuerzos">
                    <a href="receta.html?id=8">
                        <img src="imagenes/pasta_verduras.webp" alt="Pasta con Vegetales">
                        <div class="recipe-details">
                            <div class="recipe-title">Pasta con Vegetales</div>
                            <p>Pasta con una mezcla de vegetales salteados como brócoli, zanahorias, y pimientos, en una salsa ligera.</p>
                        </div>
                    </a>
                </div>
                <div class="recipe" data-category="burritos">
                    <a href="receta.html?id=tacos">
                        <img src="imagenes/tacosfrijoles.jpg" alt="Tacos">
                        <div class="recipe-details">
                            <div class="recipe-title">Tacos</div>
                            <p>Descripción breve de la receta.</p>
                        </div>
                    </a>
                </div>
                <div class="recipe" data-category="burritos">
                    <a href="receta.html?id=burritos">
                        <img src="imagenes/food6.png" alt="Burritos">
                        <div class="recipe-details">
                            <div class="recipe-title">Burritos</div>
                            <p>Los burritos son un plato mexicano que consiste en una tortilla de harina rellena de varios ingredientes, como carne, frijoles, queso, y vegetales, todo enrollado para crear una comida portátil y deliciosa.</p>
                        </div>
                    </a>
                </div>
                <div class="recipe" data-category="hamburguesa">
                    <a href="receta.html?id=hamburguesa">
                        <img src="imagenes/food1.png" alt="Hamburguesa">
                        <div class="recipe-details">
                            <div class="recipe-title">Hamburguesa</div>
                            <p>Una hamburguesa clásica hecha con una jugosa carne de res, servida en un pan con lechuga, tomate, cebolla, queso y condimentos al gusto.</p>
                        </div>
                    </a>
                </div>
                <div class="recipe" data-category="carnes burritos">
                    <a href="receta.html?id=burrito_carne">
                        <img src="imagenes/food4.png" alt="Burrito de Carne">
                        <div class="recipe-details">
                            <div class="recipe-title">Burrito de Carne</div>
                            <p> Similar a los burritos clásicos, pero estos burritos de carne están rellenos de carne de res sazonada, lo que les da un sabor más robusto y contundente.</p>
                        </div>
                    </a>
                </div>
                <div class="recipe" data-category="almuerzos">
                    <a href="receta.html?id=berenjena_horno">
                        <img src="imagenes/berenjena-horno-carne-picada-640x427.jpg" alt="Berenjena al Horno">
                        <div class="recipe-details">
                            <div class="recipe-title">Berenjena al Horno</div>
                            <p>Berenjenas asadas al horno con una mezcla de tomate, queso y hierbas.</p>
                        </div>
                    </a>
                </div>
                <div class="recipe" data-category="sandwich vegetariano">
                    <a href="receta.html?id=sandwich_vegetariano">
                        <img src="imagenes/Simply-Recipes-Loaded-Veggie-Sandwich-LEAD-6-cbf54f10c0294daaa647e11321c73773.webp" alt="Sandwich Vegetariano">
                        <div class="recipe-details">
                            <div class="recipe-title">Sandwich Vegetariano</div>
                            <p>Un sándwich saludable y delicioso hecho con una variedad de vegetales frescos y a la parrilla, como lechuga, tomate, pepino y pimientos, en pan integral.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="sobre-nosotros" class="section2">
        <div class="container">
            <h2>Sobre Nosotros</h2>
            <p>En Instant Delight, nos dedicamos a ofrecer las mejores recetas caseras con pocos ingredientes y al alcanze de la comunidad estudiantil. Nuestra historia comienza con una pasión por la cocina y un compromiso con la calidad.</p>
        </div>
    </section>

    <section id="contacto" class="section1">
        <div class="container">
            <h2>Contacto</h2>
            <p>Dirección: Los Helechos, Los Eucaliptos</p>
            <p>Teléfono: +56 9 (38593132)</p>
            <div class="social-icons">
                <p>Redes Sociales:</p>
                <a href="#"><img src="imagenes/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="imagenes/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="imagenes/gmail.png" alt="Gmail"></a>
            </div>
        </div>
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
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
