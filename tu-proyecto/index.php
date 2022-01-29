<?php 

// Ques es un debbugin

error_reporting( E_ALL );
ini_set( "display_errors", 1 );

$all_posts = [
    [
        "id" => 1,
        "title" => "Lorem ipsum dolor sit amet",
        "excerpt" => "Lorem ipsum dolor sit amet,list of list 1243",
        "content" => "Lorem ipsum dolor sit amet,list of list 1243,list of list 182983",
        "pusblished_on" => "2018-01-2020",
    ],
    [
        "id" => 1,
        "title" => "Lorem ipsum dolor sit amet",
        "excerpt" => "Lorem ipsum dolor sit amet,list of list 1243",
        "content" => "Lorem ipsum dolor sit amet,list of list 1243,list of list 182983",
        "pusblished_on" => "2018-01-2020",
    ]
];

//loops (while, do, for, foreach)

echo '<hr/>';

$contador = 1;
while ($contador <= 10) {
  echo $contador;
	echo '<br/>';
	$contador = $contador + 1;
}

$contador = 10;
do {
	echo "Mi contador es $contador";
	echo '<br/>';
	$contador = $contador + 1;
} while ( $contador <= 20 );

$longitud_posts = count( $all_posts );
for ( $i = 0; $i < $longitud_posts; $i++ ) {
	echo $all_posts[ $i ]['title'];
	echo '<br/>';
}

foreach ( $all_posts as $post ) {
  echo $post['title'];
	echo '<br/>';
}

foreach ( $all_posts as $post ) {
  echo '<strong>POST:</strong>';
	echo '<br/>';
  foreach ( $post as $key => $value ) {
    echo "- La clave $key tiene valor $value";
		echo '<br/>';
  }
}

?>

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
            <article>
                <header>
                    <h2 class="post-title"><?php echo $all_posts[0]["title"]; ?></h2>
                </header>
                <div clas="post-content">
                    <?php echo $all_posts[0]["content"]; ?>
                </div>
                <footer></footer>
            </article>
            <article>
                <header>
                    <h2 class="post-title"><?php echo $all_posts[1]["title"]; ?></h2>
                </header>
                <div clas="post-content">
                    <?php echo $all_posts[1]["content"]; ?>
                </div>
                <footer></footer>
            </article>
        </div>
    </div>

    <footer id="footer">
        <div id="inner-footer">
            Curso De Itroduccion a PHP en Domestika
        </div>
    </footer>
    
</body>
</html>