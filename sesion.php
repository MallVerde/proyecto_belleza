<?php
    include_once("header_sesion.php");
?>

<main id="principal">
    <section class="principal-formulario">
        <div class="formulario">
            <div class="formulario-titulo">
                <h2>Inicie Sesión</h2>
            </div>
            <form action="validaciones_php/valida_sesion.php" method="post">
                <div>
                    <input type="email" name="correo" id="idCorreo" placeholder="Ingrese su correo" required>
                </div>
                <div>
                    <input type="password" name="contra" id="idContra" placeholder="Ingrese su contraseña" required>
                </div>
                <div>
                    <p>¿No tienes una cuenta?<a href="registro.php"> Registrate</a></p>
                </div>
                <div>
                    <input type="submit" value="Iniciar sesión">
                </div>
            </form>
        </div>
    </section>
</main>

<?php
    include_once("footer_sesion.html");
?>