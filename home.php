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


        <?php
            $hora = date('H');
            if ($hora >= 12 && $hora < 21) {
                include(get_stylesheet_directory() . '/sections/imagenes.php'); // Muestra las imagenes solo durante las horas de la tarde
            }
        ?>

        
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Mi Sitio Web - Miguel Angel Rodriguez Morales</p>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>