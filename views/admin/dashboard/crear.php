<?php include_once __DIR__ .'/../templates/header.php'; ?>

<div class="container-form">
  
    <form class="formulario" method='POST' enctype="multipart/form-data">
    
        <?php include_once __DIR__.'/../templates/formulario.php' ?>

        <?php include_once __DIR__.'/../../templates/alertas.php' ?>
        
        <input type="submit" value="Crear proyecto" class="formulario__submit">
    </form>

</div>


<?php include_once __DIR__ .'/../templates/footer.php'; ?>

<?php 
    $script = "
        <script src='/build/js/menu.js'></script>
    ";
?>