            <div class="formulario__campo">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" placeholder="Introduce el titulo del proyecto" value="<?php echo $proyecto->titulo ?? ''?>">
            </div>

            <div class="formulario__campo">
                <label for="descripcion">Descripción</label>
                <textarea class="text-area" name="descripcion" id="descripcion" placeholder="Descripción del proyecto"><?php echo $proyecto->descripcion ?? ''?></textarea>
            </div>

            <div class="formulario__campo">
                <label for="enlace1">Enlace a Github</label>
                <input type="text" id="enlace1" name="enlace1" placeholder="Introduce el enlace a Github"  value="<?php echo $proyecto->enlace1 ?? ''?>">
            </div>

            <div class="formulario__campo">
                <label for="enlace2">Enlace a página</label>
                <input type="text" id="enlace2" name="enlace2" placeholder="Introduce el enlace a la página"  value="<?php echo $proyecto->enlace2 ?? ''?>">
            </div>
            
            <div class="formulario__campo">
                <label for="enlace3">Enlace a Github 2</label>
                <input type="text" id="enlace3" name="enlace3" placeholder="Introduce el enlace a Github (opcional)"  value="<?php echo $proyecto->enlace3 ?? ''?>">
            </div>

            <div class="formulario__campo">
                <label for="importancia">Importancia</label>
                <select name="importancia" id="importancia">
                    <option value="">-- Selecciona la importancia del proyecto --</option>
                    <option value="0">Prioridad baja</option>
                    <option value="1">Prioridad normal</option>
                    <option value="2">Muy importante</option>
                </select>
            </div>

            <div class="formulario__campo">
                <label for="usuario">Imagen</label>
                <input type="file" name="imagen" id="imagen" accept="image/*">
            </div>

            <?php 
           
                if(isset($proyecto->imagen_actual)){ ?>
                <p>Imagen actual:</p>
                <div class="formulario__imagen">
                    <picture>
                        <source srcset="<?php echo $_ENV['HOST'] . '/storage/proyectos/' . $proyecto->imagen; ?>.webp" type="image/webp">
                        <source srcset="<?php echo $_ENV['HOST'] . '/storage/proyectos/' . $proyecto->imagen; ?>.png" type="image/png">
                        <img src="<?php echo $_ENV['HOST']. 'storage/proyectos/'. $proyecto->imagen; ?>.png" alt="imagen <?php echo $proyecto->titulo?>" >
                    </picture>

                </div>

                <?php } 
            
            ?>
            

          


            