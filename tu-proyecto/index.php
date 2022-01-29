<?php 

// Ques es un debbugin

error_reporting( E_ALL );
ini_set( "display_errors", 1 );

setlocale( LC_TIME, 'es', 'spa', 'es_ES');
date_default_timezone_set( 'Europe/Madrid');

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
            <?php foreach ($all_posts as $post) {
                ?>
                <article>
                    <header>
                        <h2 class="post-title"><?php echo $post["title"]; ?></h2>
                    </header>
                    <div class="post-content">
                        <?php echo $post["content"]; ?>
                    </div>
                    <footer>
                        <span class="post-date">
                            Publicada en:
                            <?php echo strftime("%d %b %Y"); ?>
                            <!-- echo strtotime ("2018-01-15" 10:15:00); LO VUELVE PARA QUE PUEDA SER LEIDA LA FECHA -->
                        </span>
                    </footer>
                </article>
                <?php 
            } ?>
            
           
        </div>
    </div>

    <footer id="footer">
        <div id="inner-footer">
            Curso De Itroduccion a PHP en Domestika
        </div>
    </footer>
    
</body>
</html>