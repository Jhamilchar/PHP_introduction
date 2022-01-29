<?php 
$post_1_titulo = "lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor";
$post_1_contenido = "lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor orem ipsum dolor";
$post_2_titulo = "lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor pa alla pa aca";
$post_2_contenido = "lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor pa alla pa aca";

function nombre_de_la_funcion( $param1, $param2) {

}

function que_dia_es_hoy() {
    echo "Hoy es " . date("l");
}

function suma3( $num1, $num2, $num3 ) {
    echo $num1 + $num2 + $num3;
}

function incremento ($num, $inc = 1) {
    return $num + $inc;
}

?>

<h1><?php que_dia_es_hoy(); ?></h1>
<h1><?php suma3(10, 2, 5); ?></h1>
<h1><?php echo incremento(10, 5); ?></h1>

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
            <h2><?php echo $post_1_titulo; ?></h2>
            <h2><?php echo $post_1_contenido; ?></h2>
        </div>
        <div>
            <h2><?php echo $post_2_titulo; ?></h2>
            <h2><?php echo $post_2_contenido; ?></h2>
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