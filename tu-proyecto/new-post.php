<?php require('init.php'); ?>
<?php require('templates/header.php'); ?>

<?php 
$error = false;
$title = '';
$excerpt = '';
$content = '';
//Se ha enviado el formulario?
    // -SI: Comprobar que todo esta bien y guardar en el post
    // -NO: Seguir ejecucion

if (isset( $_POST['submit-new-post'])) {
    //Se ha enviado el formulario
    $title = $_POST['title'];
    $excerpt = $_POST['excerpt'];
    $content = $_POST['content'];

    if (empty($title )|| empty($content)) {
        $error = true;
    }

    else {
        insert_post($title, $excerpt,$content );
        //Redirigir al blog
        header ('Location: http://127.0.0.1/tu-proyecto/index.php');
        die();
    }
}
?>
<h2>Crear nuevo post</h2>

<?php if ($error): ?>

    <div class="error">
        Error en el formulario
    </div>

<?php endif; ?>


<form action="" method="post">
    <label for="title">Título (requerido)</label>
    <input type="text" name="title" id="title" value="<?php echo $title; ?>">

    <label for="excerpt">Extracto</label>
    <input type="text" name="excerpt" id="excerpt" value="<?php echo $excerpt; ?>">

    <label for="content">Contenido (requerido)</label>
    <textarea name="content" id="content" cols="30" rows="30" value=""><?php echo $content; ?></textarea>

    <p>
        <input type="submit" name="submit-new-post" value="Nuevo post">
    </p>
</form>
<?php require('templates/footer.php'); ?>
