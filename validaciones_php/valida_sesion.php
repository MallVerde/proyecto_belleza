<?php
	session_start();	
	include("../conexion_php/conexion.php");
	
	if(isset($_POST['correo']) && isset($_POST['contra'])){
		$correo = $_POST['correo'];
		$contra = $_POST['contra'];

		$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE correo='$correo' AND contraseña = '$contra'");
		if($f=mysqli_fetch_assoc($sql)){
			if($contra==$f['contraseña']){
				$_SESSION['id_usuario']=$f['id'];
				$_SESSION['nombre']=$f['nombre'];
				$_SESSION['rol']=$f['rol'];

				switch($_SESSION['rol']){
					case 1:
						header('Location: ../admin/admin.php');
					break;
		
					case 2:
						header('Location: ../index.php');
					break;
					default: 
				}
			}
		}else{
			echo '<script>alert("Usuario o contraseña incorrecta")</script> ';
			echo "<script>location.href='../sesion.php'</script>";				
		}
	}
?>
	