<!DOCTYPE html>
<html lang="es">
<head>
	<title>ARCHIVO EN PHP</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	session_start();
	$_SESSION['ruta'] = "cliente.txt";

	function crear(){
		if(!file_exists($_SESSION['ruta'])){
			$_SESSION['archivo'] =  fopen($_SESSION['ruta'], "a");
		}else{
			$_SESSION['archivo'] =  fopen($_SESSION['ruta'], "a");
		}
	} // Cierre funcion crear

	function agregar ($c, $n){
		crear();
		fwrite($_SESSION['archivo'], $c. ",".$n. "\r\n");
		fclose($_SESSION['archivo']);
		echo "<script> alert('Se han ingreado los datos'); </script>";
	}

	if(isset($_POST['txtCod'])){
		$_SESSION['cod'] = $_POST['txtCod'];
		$_SESSION['nom'] = $_POST['txtNom'];
		if(isset($_POST['btnGuardar'])){
			agregar($_SESSION['cod'], $_SESSION['nom']);
		}
	}

	function buscar ($c){

		if(existe()){
			$encontro = false;
			$_SESSION['leer'] = fopen($_SESSION ['ruta'], "r");
			while(!feof($_SESSION['leer'])){
				$cadena = explode(',', fgets($_SESSION['leer']));
				if($_SESSION['cod'] == $cadena[0]){
					break;
				}else{
					$encontro = false;
				}
			}
			if($encontro){
				$_SESSION['cod'] = $cadena [0];
				$_SESSION['cod'] = $cadena [1];
			}else{
				echo "<script> alert('El cliente no existe'); </script>";
			}
			fclose($_SESSION['leer']);
		}else{
			echo "El archivo no existe";
		}
	}

	if(isset($_POST['btnBuscar'])){
			Buscar($_SESSION['cod']);
		}
	?>
		<h1>Información del cliente</h1>
		<FORM NAME = "FORM1" METHOD = "POST" ACTION="archivoDos.php">
		Código:
		<INPUT TYPE="text" NAME="txtCod" value = "<?php if(isset($_SESSION['cod'])){ echo $_SESSION ['cod'];} ?> "/><br/>
		Nombre:
		<INPUT TYPE="text" NAME="txtNom" value = "<?php if(isset($_SESSION['nom'])){ echo $_SESSION ['nom'];} ?> "/><br/>
		<input type="submit" name="btnGuardar" value="Guardar"/>
		<input type="submit" name="btnBuscar" value="Buscar">
		<input type="submit" name="btnActualizar" value="Actualizar">
		</FORM>
</body>
</html>