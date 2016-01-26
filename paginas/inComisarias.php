<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql="insert into Comisarias(Nombre,Direccion,Zona,DPI) values ('" . $_POST["nombre"] ."' , '" . $_POST["direccion"] ."', " . $_POST["zona"] ."," . $_POST["encargado"] .")";
			$result = mysql_query($sql);
		?>
		<br><br>Proceso Realizado con Exito<br><br>
		<a href='bComisarias.php'>Continuar</a>
		</div>
	</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
