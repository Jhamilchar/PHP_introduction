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

//Enteros integers

$positivo = 10 ;
$cero = 0;
$negativo = -10 ;

//Punto flotante (reales):Floats, doubles

$numero  = 1.234;
$exponente_1 = 1.234e2;
$exponente_2  = 1.234E-2;

//cadenas : Strings

$nombre = "Ignacio";
$apellido = "Cruz";

var_dump ( "Mi nombre es \$nombre" );


// Booleanos

// $true
// $false

$error = true;
if ( $error ) {
    var_dump("Hay un error. Vuelve a intentarlo");
}

// array
// es lo mismo que python el primer elemento es 0

$colores = ["azul", "verde", "rojo"];

// Array asociativo

$edades = ["pedro" => 22, "ana" => 15, "jose"=> 28];
var_dump( $edades["pedro"]);

// valores que son false

$cero = 0;
$cadena_vacia = "";
$nulo = null;
$array_vacio = [];

// valores que son true

var_dump ((bool) $positivo );
var_dump ((bool) $negativo );
var_dump ((bool) $edades );
var_dump ((bool) $nombre );




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