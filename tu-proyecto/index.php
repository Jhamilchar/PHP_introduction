<?php require('init.php'); ?>
<?php require('templates/header.php'); ?>

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
    ],
];

$post_found = false;
if ( isset( $_GET['view'] ) ) {
	foreach ( $all_posts as $post ) {
		if ( $post['id'] == $_GET['view'] ) {
			$post_found = true;
			$all_posts = [ $post ];
		}
	}
}

?>


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
<?php require('templates/footer.php'); ?>
