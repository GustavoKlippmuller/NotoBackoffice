<main class="contenedor seccion contenido-centrado">
    <h1 data-cy="heading-login" >Olvide Contraseña</h1>
    <?php include_once __DIR__ . "/../templates/alertas.php"; ?>
    <form action="/olvide" class="formulario" method="POST" novalidate>
        <fieldset>
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Tu email" name="email" value="<?php echo $email; ?>" required>
        </fieldset>
        <input type="submit" class="boton boton-rojo" value="Enviar Instrucciones">
    </form>
    <div class="actions">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    </div>
</main>
<?php $script = "<script src='build/js/modernizr.js'></script>" ?>