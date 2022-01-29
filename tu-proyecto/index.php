<?php 

// Ques es un debbugin

error_reporting( E_ALL );
ini_set( "display_errors", 1 );
function get_post_1_titulo() {
    $post_1_titulo = "lorem ipsum dolor sit amet";
    return $post_1_titulo;
}

function get_post_1_contenido() {
    $post_1_contenido = "lorem ipsum dolor sit amet";
    return $post_1_contenido;
}

function get_post_2_titulo() {
    $post_2_titulo = "lorem ipsum dolor sit amet";
    return $post_2_titulo;
}

function get_post_2_contenido() {
    $post_2_contenido = "lorem ipsum dolor sit amet";
    return $post_2_contenido;
}

function prueba() {
    $saludo = "Hola, ¿Qué tal?";
    global $saludo;
    echo $saludo;
}

// Error fatal
// my_function();
// Warning
// Notice
// echo $my_var;
// Syntax Error
// echo "Hola" . "Mundo";

$my_var = "Ignacio";
var_dump( $my_var );

$my_list = ["uno", "dos"];
var_dump( $my_list );
?>

<p><?php echo $my_var; ?></p>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micro CMS</title>
    <link rel="stylesheet" href="../carpeta-del-curso/carpeta-proyecto/proyecto-final/assets/style.css">
</head>
<body>
  
    <nav id="site-navigation" role="navigation" class="row row-center">
    <div class="column">
        <h1>
            <a href="index.php">Micro CMS</a>
        </h1>
        <ul class="main-menu column clearfix"></ul>
    </div>
    </nav>

    <div id="content">
        <div class="posts">
        <div>
            <h2><?php echo get_post_1_titulo(); ?></h2>
            <div><?php echo get_post_1_contenido(); ?></div>
        </div>
        <div>
            <h2><?php echo get_post_2_titulo(); ?></h2>
            <div><?php echo get_post_2_contenido() ; ?></div>
        </div>
        </div>
    </div>

    <footer id="footer">
        <div id="inner-footer">
            Curso De Itroduccion a PHP en Domestika
        </div>
    </footer>
    
</body>
</html>