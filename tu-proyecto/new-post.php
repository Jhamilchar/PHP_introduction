<?php require('init.php'); ?>
<?php require('templates/header.php'); ?>

<?php 
//Se ha enviado el formulario?
    // -SI: Comprobar que todo esta bien y guardar en el post
    // -NO: Seguir ejecucion

if (isset( $_POST['submi-new-post'])) {
    //Se ha enviado el formulario
}
?>
<form action="" method="post">
    <label for="title">Título (requerido)</label>
    <input type="text" name="title" id="title" value="">

    <label for="excerpt">Extracto</label>
    <input type="text" name="excerpt" id="excerpt" value="">

    <label for="content">Contenido (requerido)</label>
    <input name="content" id="content" cols="30" rows="30" value="">

    <p>
        <input type="submit" name="submit-new-post" value="Nuevo post">
    </p>
</form>
<?php require('templates/footer.php'); ?>
