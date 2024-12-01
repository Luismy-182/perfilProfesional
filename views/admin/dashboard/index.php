<?php include_once __DIR__ .'/../templates/header.php'; ?>


<div>
<?php 
    if(!empty($proyectos)){ ?>
    <div class="contenedor-proyectos">
        <div class="proyectos">
            <?php foreach ($proyectos as $proyecto){ ?>
            <a href="/admin/proyecto?id=<?php echo $proyecto->id?>">
                <h2><?php echo $proyecto->titulo ?></h2>
            </a>
            <p>Última edición: <?php echo $proyecto->fecha ?></p>

            <div class="proyectos-acciones">
                <a href="/admin/editar?id=<?php echo $proyecto->id  /*echo str_replace(' ', '-', $proyecto->titulo )*/ ?>">
                    <p>Editar</p>
                </a>
                <form method="POST" action="/admin/eliminar">
                    <input type="hidden" name="id" value="<?php echo $proyecto->id?>">
                    <input type="submit" value="Eliminar">
                </form>
            </div>
            <?php } ?>
        </div>
    </div>

<?php 
    }else{ ?>
    <div class="contenedor-proyectos">
        <p class="text-center">Lo sentimos rey, no hay proyectos aún.</p>
    </div>
   <?php  }
?>
</div>




<?php include_once __DIR__ .'/../templates/footer.php'; ?>
