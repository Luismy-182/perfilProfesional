
        
<div class="contenedor-formulario">
    <form method="POST" class="formulario">



        <h2 class="text-center"><?php echo $titulo ?></h2>
        <?php require_once __DIR__ .'/../templates/alertas.php' ?>
            <div class="formulario__campo">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" placeholder="Introduce tu usuario">
            </div>

            <div class="formulario__campo">
                <label for="usuario">Password</label>
                <input type="password" id="password" name="password" placeholder="Introduce tu password">
            </div>
            
            
            <input type="submit" value="Iniciar sesión" class="formulario__submit">
        </form>
  
</div>