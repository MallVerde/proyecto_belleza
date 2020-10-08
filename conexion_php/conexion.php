<?php
    // try{
    //     $conexion = new PDO('mysql:host=localhost;dbname=tienda_belleza', 'root', '') or die("hola");
    // } catch(PDOException $e){
    //     echo 'Error: '.$e->getMessage();
    // }
    
    $host_mysql = "localhost";
    $user_mysql = "root";
    $pass_mysql = "";
    $db_mysql = "tienda_belleza";
    @$mysqli = mysqli_connect($host_mysql, $user_mysql, $pass_mysql, $db_mysql) or die("Error al conectar con la base de datos");
?>
