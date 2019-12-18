<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> Galeria de Imagenes</title>
	<link rel="stylesheet" type="text/css" href="php.css">
</head>

<body>
	
	<header>
		<?php
		echo '<p class="Titulo">Galeria Dinamica HTML5, CSS3, PHP</p><br>';
		?>
	</header>
	
		
	</section>
	<center>
	<table>
		<?php
		if(isset($_GET['vpi'])){
		$PI=$_GET['vpi'];
		$PF=$_GET['vpf'];
		$mod=$_GET['modu'];
		$A=$_GET['AH'];
		$B=1;
		$izquierda=150;
		echo '<tr>';
		for ($Contador=$PI; $Contador<=$PF ;$Contador++) { 

			echo '<td><div id="ContenedorIndividual'.$Contador.'" style="position:relative;top:300; left:'.$izquierda.';"><a href="imagenes/Foto'.$Contador.'.jpg" widht="150em" height="150em" class="miniatura"><img class="mini" src="imagenes/Foto'.$Contador.'.jpg" widht="150em" height="150em" alt="Imagen '.$Contador.'/><img src="imagenes/Foto'.$Contador.'.jpg" widht="150em" height="150em" alt ="Imagen'.$Contador.'"/><span><img class="ampliada" src="imagenes/Foto'.$Contador.'.jpg" alt="Imagen'.$Contador.'ampliada"/><br/>Imagen'.$Contador.'</span></a></div></td>';

			if ($Contador==$PF && $Contador%$mod!=0){
				
			}
			if ($Contador%$mod==0){
				echo '</tr> <tr>';

			}
$izquierda=$izquierda+350;
			}
			}
			else if (isset($_POST['Imgs'])){
				$PF=$_POST['Imgs'];
				$mod=$_POST['Colum'];
				$PI=1;
				$A=$PF;
				$B=1;
				$izquierda=150;
			echo '<tr>';
				for ($Contador=1; $Contador<=$PF ;$Contador++) { 

			echo '<td><div id="ContenedorIndividual'.$Contador.'" style="position:relative;top:300; left:'.$izquierda.';"><a href="imagenes/Foto'.$Contador.'.jpg" widht="150em" height="150em" class="miniatura"><img class="mini" src="imagenes/Foto'.$Contador.'.jpg" widht="150em" height="150em" alt="Imagen '.$Contador.'/><img src="imagenes/Foto'.$Contador.'.jpg" widht="150em" height="150em" alt ="Imagen'.$Contador.'"/><span><img class="ampliada" src="imagenes/Foto'.$Contador.'.jpg" alt="Imagen'.$Contador.'ampliada"/><br/>Imagen'.$Contador.'</span></a></div></td>';

			if ($Contador%$mod==0){
				echo '</tr> <tr>';}
				$izquierda=$izquierda+350;
			}

			}
			else
				echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=Galeria.php?vpi=1&vpf=9&modu=3&AH=9">';
			
			echo '</tr>';
			?>
			
	</table>
	<div class="Botones">
		<?php
		if($PI>1){
			echo '<a href="Galeria.php?vpi='.($PI-$A).'&vpf='.($PF-$A).'&modu='.$mod.'&AH='.$A.'"><img src="imagenes/arrow-left.png" class="flechas" ></a>';

			echo '<a href="Galeria.php?vpi='.($PF+$B).'&vpf='.($PF+$A).'&modu='.$mod.'&AH='.$A.'"><img src="imagenes/arrow-right.png" class="flechas"></a>';

		}
		else{
			echo'<a href="Galeria.php?vpi='.($PF+$B).'&vpf='.($PF+$A).'&modu='.$mod.'&AH='.$A.'"><img src="imagenes/arrow-right.png" class="flechas"></a>';
		}
		?>
</center>
</body>

</html>