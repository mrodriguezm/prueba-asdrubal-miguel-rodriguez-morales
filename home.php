<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página de Inicio</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <h1>Noticias</h1>
       
    </header>

    <main>
        <?php include(get_stylesheet_directory() . '/sections/deportes.php'); ?>

        <?php include(get_stylesheet_directory() . '/sections/viajes.php'); ?>


        <button id="politica-btn" value="false">Mostrar imágenes</button>
        <?php 
            
        
        ?>

        
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Mi Sitio Web - Miguel Angel Rodriguez Morales</p>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>