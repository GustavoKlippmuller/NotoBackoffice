<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice Noto Group</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="../build/css/app.css">
</head>
<body class="body">
    <div class="overlay">
        <header class="header" style="<?php echo isset($inicio) ? 'display: none' : ''; ?>">
            <div class="banderas">
                <img src="/build/img/banderaEspañola.webp" alt="bandera espalola">
                <img class="disable" src="/build/img/banderaInglesa.webp" alt="bandera inglesa">
            </div>
            <p class="username">Usuario: <?php echo $_SESSION['name_user'] . ' ';?><i class="fas fa-chevron-down"></i></p>
            <div class="desplegable"><a href="/logout">Cerrar Sesión</a></div>
            <input type="hidden" name="" id="idUsuario" value="<?php print $_SESSION['idUser']; ?>">
        </header>
        <?php echo $contenido; ?>
        <footer class="footer">
            <div class="content-footer">
                <p data-cy="copyright" class="copyright">Todos los derechos Reservados <?php echo date('Y');?> &copy;</p>
                <a href="/">
                    <img src="/build/img/Logo.png" alt="Logo Noto">
                </a>
            </div>
        </footer>
    </div>    
    <?php echo $script ?? ''; ?>
</body>
</html>