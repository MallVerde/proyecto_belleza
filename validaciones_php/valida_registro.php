<?php
    require("../conexion_php/conexion.php");

    $nombre = $_POST['nombre'];
	$correo=$_POST['correo'];
	$contra= $_POST['contra'];
    $ccontra=$_POST['ccontra'];

    mysqli_query($mysqli,"INSERT INTO usuarios(`id`,`tipo`,`nombre`,`correo`,`contraseña`) VALUES('',2,'$nombre','$correo','$contra')");

	// $checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE correo='$correo'");
    // $check_mail=mysqli_num_rows($checkemail);
	// 	if($contra==$ccontra){
	// 		if($check_mail>0){
	// 			echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
	// 			echo " <script>location.href='../registro.php'</script>";
	// 		}else{
	// 			mysqli_query($mysqli,"INSERT INTO usuarios(`id`,`tipo`,`nombre`,`correo`,`contraseña`) VALUES('',1,'$nombre','$correo','$contra')");
	// 			echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
	// 			echo "<script>location.href='../sesion.php'</script>";
	// 		}
	// 	}else{
	// 		echo 'Las contraseñas son incorrectas';
	// 		echo "<script>location.href='../registro.php'</script>";
	// 	}	
?>