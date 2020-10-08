<?php
    session_start();
    include "conexion_php/conexion.php";
    if(!isset($_SESSION['rol'])){
    }
    else if($_SESSION['rol']==1){
        header("Location:admin/admin.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afrodit</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo time(); ?>">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <!-- FUENTES DE LETRAS -->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet"> 
    <!-- font-family: 'Oswald', sans-serif; -->
</head>
<body>
    <header id="cabecera">
        <div class="cabecera-top">
            <div class="cabecera-logo">
                <h1 class="logo">Afrodit</h1>
            </div>
            <div class="cabecera-usuario">
                <input type="search" name="" id="" placeholder="Buscar...">
                <a href="#">Carrito</a>
                <a href="sesion.php">Iniciar sesión</a>
            </div>
        </div>
        <div class="cabecera-bottom">
            <a href="index.php">Inicio</a>
            <a href="#">Perfumeria</a>
            <a href="#">Maquillaje</a>
            <a href="#">Cuidado corporal</a>
            <a href="validaciones_php/salir.php">salir</a>
        </div>
    </header>