<main class="contenedor seccion contenido-centrado">
    <h1>Recuperar Password</h1>
    <p>Coloca tu nuevo password a continuación</p>
    <?php include_once __DIR__ . "/../templates/alertas.php"; ?>
    <?php if($error){ 
        $script = "<script src='build/js/modernizr.js'></script>";
        return; 
        }?>
    <form class="formulario" method="POST">
        <div class="campo">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Tu Nuevo Password" />
        </div>
        <input type="submit" class="boton boton-rojo" value="Guardar Nuevo Password">
    </form>
    <div class="acciones">
        <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
    </div>
</main>
<?php $script = "<script src='build/js/modernizr.js'></script>" ?>