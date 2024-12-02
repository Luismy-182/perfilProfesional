
<main class="contenedor">
        <div class="encabezado">
        <?php if(!empty($proyecto)){

?>
            <h2 class="text-center">Portafolio de proyectos</h2>

                <p class="text-justify">
                Estos son algunos proyectos que realìcè de forma personal. (El primero fue implementado en la empresa Veladoras Aramo donde trabajè). En cada proyecto se adjunta una descripción breve y enlaces al código fuente de mi autoría, o página web implementada, la mayorìa es MVC 
                </p>
        </div>


    <section class="color">

        <?php foreach ($proyecto as $proyecto) {?>
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
                            <a class="proyecto__descripcion-botonG" href="<?php echo $proyecto->enlace1;?>" target="_blank">
                                <?php echo($proyecto->enlace1 && $proyecto->enlace3)? 'Backend en Github':'Ver en Github';?>
                            </a>    


                            <?php if(!empty($proyecto->enlace2)){ ?>
                            <a class="proyecto__descripcion-botonP" href="<?php echo $proyecto->enlace2;?>" target="_blank">Ir a la aplicación</a>
                            <?php } ?>


                             <?php if(!empty($proyecto->enlace3)){ ?>
                            <a class="proyecto__descripcion-botonG" href="<?php echo $proyecto->enlace3;?>" target="_blank">
                                <?php echo($proyecto->enlace3)? 'Fronted en Github':'' ;?>
                            </a>    
                            <?php } ?>
                        </div>
                    </div>
            </div><!---------fin proyecto---------------------->


            </div>
            <?php } ?>
            <?php }else{?>
                <h1 class="text-center no-proyectos">No hay proyectos aún en tu portafolio</h1>
            <?php } ?>
        </section>
        
</main>
<div class="boton-arriba" id="ir-arriba"><i class="fa-solid fa-chevron-up"></i></div>

<?php require_once __DIR__.'/../includes/redes.php'; ?>

<?php 
    $script = "
        <script src='build/js/app.js'></script>
    ";
?>