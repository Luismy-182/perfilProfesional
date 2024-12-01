<?php include_once __DIR__ .'/../templates/header.php'; ?>

<section class="color">
            <div class="proyectos">
             
            

                <div class="proyecto">
                        <div class="proyecto__imagen">
                            <picture>
                                <source srcset="<?php echo $_ENV['HOST'] . '/storage/proyectos/' . $proyecto->imagen; ?>.webp" type="image/webp">
                                <source srcset="<?php echo $_ENV['HOST'] . '/storage/proyectos/' . $proyecto->imagen; ?>.png" type="image/png">
                                <img src="<?php echo $_ENV['HOST']. 'storage/proyectos/'. $proyecto->imagen; ?>.png" alt="imagen <?php echo $proyecto->titulo?>" >
                            </picture>

                        </div>


                <div class="proyecto__descripcion">
                        <h3 class="proyecto__descripcion-titulo"><?php echo $proyecto->titulo;?></h3>
                        <p>
                        <?php echo $proyecto->descripcion;?>
                        </p>
                        <div class="proyecto__descripcion--botones">
                            <a class="proyecto__descripcion-botonG" href="<?php echo $proyecto->enlace1;?>" target="_blank">Ver en Github</a>    
                            <a class="proyecto__descripcion-botonP" href="<?php echo $proyecto->enlace2;?>" target="_blank">Ir a la aplicación</a>
                        </div>
                </div>
            </div><!---------fin proyecto---------------------->
        </div>

      
</section>
        