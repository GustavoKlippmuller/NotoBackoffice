<main class="contenedor seccion contenido-centrado">
    <h1 data-cy="heading-login" >Iniciar Sesión</h1>
    <?php include_once __DIR__ . "/../templates/alertas.php"; ?>
    <form data-cy="formulario-login" action="/" class="formulario" method="POST" novalidate>
        <fieldset>
            <legend>Username y Password</legend>
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Tu Username" name="username" value="<?php echo $username; ?>" required>
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Tu Password" name="password" value="<?php echo $password; ?>" required>
        </fieldset>
        <input type="submit" class="boton boton-rojo" value="Iniciar Sesión">
    </form>
    <div class="actions">
        <a href="/olvide">¿Olvidaste tu password?</a>
    </div>
</main>

<?php $script = "<script src='build/js/modernizr.js'></script>" ?>