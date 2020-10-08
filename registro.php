<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afrodit</title>
    <link rel="stylesheet" href="css/sesion.css?v=<?php echo time(); ?>">
    
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo time(); ?>">

    <!-- FUENTES DE LETRAS -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<body>
    <header id="cabecera">
        <div class="cabecera-logo">
            <a href="index.php"><h1 class="logo">Afrodit</h1></a>
        </div>
    </div>
    </header>
    <main id="principal">
        <section class="principal-formulario">
            <div class="formulario">
                <div class="formulario-titulo">
                    <h2>Registrate</h2>
                </div>
                <form action="validaciones_php/valida_registro.php" method="post">
                    <div>
                        <input type="text" name="nombre" id="IdNombre" placeholder="Ingrese su nombre">
                    </div>
                    <div>
                        <input type="email" name="correo" id="idCorreo" placeholder="Ingrese su correo" required>
                    </div>
                    <div>
                        <input type="password" name="contra" id="idContra" placeholder="Ingrese su contraseña" required>
                    </div>
                    <div>
                        <input type="password" name="ccontra" id="idContra" placeholder="Confirme su contraseña" required>
                    </div>
                    <div>
                        <p>¿Ya estas registrado?<a href="sesion.php"> Inicia sesión</a></p>
                    </div>
                    <div>
                        <input type="submit" value="Registrarse">
                    </div>
                </form>
            </div>
        </section>
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