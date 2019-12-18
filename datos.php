<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="datos.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
	<title>Datos </title>
</head>
<body>
<header>
	<h1>Seleccione el numero de columnas y numero total de imagenes deseada </h1>
</header>

<form action="Galeria.php" method="post" id="form1" name="Datos">
	<span>Numero de imagenes</span> <input autofocus="" type="numero" name="Imgs" >
	<br>
	<br>
	<span>Imagenes por fila</span> <input type="numero" name="Colum">
	<br>
	<br>
	<input type="submit" value="Aceptar">
	</body>
</form>
</body>
</html>