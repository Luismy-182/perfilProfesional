<aside class="sidebar">
    
        <div class="menu">
            <a href="/admin"><h2 class="logo">M.A.S.P</h2></a><i class="fa-solid fa-bars" id="barras"></i>
        </div>

        <p class="text-center text-white font-light">Hola mi amor: <?php echo $_SESSION['nombre']?></p>
        <nav class="sidebar__nav" id="menu">
            <a class="<?php echo($titulo==='Proyectos') ? 'activo':'' ?>" href="/admin">Proyectos</a>
            <a class="<?php echo ($titulo==='Crear proyecto')? 'activo':'' ?>" href="/admin/crear">Crear nuevo proyecto</a>
            <a href="/" target="_blank">Ir a página Principal</a>
            <a href="/portafolio" target="_blank">Ir a Portafolio de proyectos web</a>
            <a href="/logout">Cerrar sesión</a>
        </nav>
 
</aside>

