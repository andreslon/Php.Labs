
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Archivo Plano</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	$ruta = "file.txt";
	if (isset($_POST['txtCod'])){
		if(isset($_POST['btnGuardar'])){
			$archivo = fopen($ruta, "w"); // abrir archivo
			fwrite($archivo, $_POST['txtCod'].",".$_POST['txtNom'].",".$_POST['txtEdad']."\r\n");
			fclose($archivo); // cerrar archivo
			echo "Datos Almacenados";
		}
		if(isset($_POST['btnLeer'])){
			if (!file_exists($ruta)) {
				echo "El archivo no existe";
			}
			else{
				$archivo=fopen($ruta, "r");
				while (($line = fgets($archivo)) != false) {
					echo $line, "<br/>";
				}
				fclose(($archivo));
			}
		}
	}
	?>
	<h1>Ejemplo de archivos </h1>
		<FORM NAME = "FORM1" METHOD = "POST" ACTION="archivoUno.php">
		Código:
		<INPUT TYPE="text" NAME="txtCod"/><br/>
		Nombre:
		<INPUT TYPE="text" NAME="txtNom"/><br/>
		Edad:
		<INPUT TYPE="text" NAME="txtEdad"/><br/>
		<input type="submit" name="btnGuardar" value="Guardar"/>
		<input type="submit" name="btnLeer" value="Leer">
		</FORM>
</body>
</html>