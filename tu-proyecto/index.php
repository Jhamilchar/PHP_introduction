<?php require('init.php'); ?>
<?php require('templates/header.php'); ?>
<?php 

$all_posts = get_all_posts();

$post_found = false;
if ( isset( $_GET['view'] ) ) {
    $post_found = get_post( $_GET['view'] );
    if ($post_found) {
        $all_posts =  [$post_found];
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
<?php require('templates/footer.php'); ?>
