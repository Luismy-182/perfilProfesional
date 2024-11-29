
<div class="contenedor-formulario">


        <form  method="post" class="formulario" >


        <h2 class="text-center">Registro</h2>
        <?php require_once __DIR__ .'/../templates/alertas.php' ?>

            <div class="formulario__campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre">
            </div>
            <div class="formulario__campo">
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" placeholder="Introduce tu apellidos">
            </div>
            <div class="formulario__campo">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" placeholder="Introduce tu usuario">
            </div>

            <div class="formulario__campo">
                <label for="usuario">Password</label>
                <input type="password" id="password" name="password" placeholder="Introduce tu password">
            </div>
            
            
            <input type="submit" value="Registrarse" class="formulario__submit">
        </form>
  
</div>