<?php
    session_start();
    include "conexion_php/conexion.php";

    include "conexion_php/conexion.php";
    if(!isset($_SESSION['rol'])){
    }
    else if($_SESSION['rol']==1){
        header("Location:admin/admin.php");
    }
    else{
        header("Location:index.php");
    }
?>

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
            <a href="index.php">
                <h1 class="logo">Afrodit</h1>
            </a>
        </div>
        </div>
    </header>