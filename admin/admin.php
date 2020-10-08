<?php
    session_start();
    if(!isset($_SESSION['rol'])){
        header('Location: ../sesion.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('Location:../sesion.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminitración</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/estilo.css?v=<?php echo time(); ?>">
</head>
<body>
<header id="cabecera">
        <div class="cabecera-logo">
            <a href="index.php">
                <h1 class="logo">Afrodit</h1>
            </a>
        </div>
        </div>
    </header>
    <main>

    </main>
    <footer id="pie">
        <div class="pie-top">
            <div class="pie-logo">
                <h3 class="logo">Afrodit</h3>
            </div>
        </div>
        <div class="pie-bottom">
            <div class="pie-derechos">
                <h4>&copy; 2020 Afrodit Todos los derechos reservados</h4>
            </div>
            <div class="pie-politicas">
                <ul>
                    <li><a href="#">Política de privacidad</li>
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Aviso de copyright</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>