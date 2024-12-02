<?php include_once __DIR__ .'/../templates/header.php'; ?>


<div>
<?php 
    if(!empty($proyectos)){ ?>
      <?php foreach ($proyectos as $proyecto){ ?>
   
        <div class="card-proyecto">
            <div class="card-proyecto__info">
              
                <a href="/admin/proyecto?id=<?php echo $proyecto->id?>">
                    <h2><?php echo $proyecto->titulo ?></h2>
                </a>
                <p>Última edición: <?php echo $proyecto->fecha ?></p>
            </div>

            <div class="card-proyecto__acciones">
                <a class="boton-editar" href="/admin/editar?id=<?php echo $proyecto->id  /*echo str_replace(' ', '-', $proyecto->titulo )*/ ?>">
                    <p>Editar</p>
                </a>
                <form method="POST" action="/admin/eliminar" id="eliminar">
                    <input type="hidden" name="id" value="<?php echo $proyecto->id?>">
                    <input  class="boton-eliminar" type="submit" value="Eliminar">
                </form>
            </div>
        </div>
        <?php } ?>

<?php 
    }else{ ?>
    <div class="contenedor-proyectos">
        <p class="text-center">Lo sentimos rey, no hay proyectos aún.</p>
    </div>
   <?php  }
?>
</div>

    <!--Metemos JS para proteger el borrado accidental-->
<?php 
    $script = "
        <script src='build/js/eliminar.js'></script>
        <script src='build/js/menu.js'></script>
    ";
?>




<?php include_once __DIR__ .'/../templates/footer.php'; ?>
