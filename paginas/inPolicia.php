<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql="insert into Policias(DPI,Nombres,Apellidos, FechaIngreso) values (" . $_POST["dpi"] .",'" . $_POST["nombre"] ."','" . $_POST["apellido"] ."','" . $_POST["fecha"] ."')";
			$result = mysql_query($sql);
		?>
		<br><br>Proceso Realizado con Exito<br><br>
		<a href='bPolicia.php'>Continuar</a>
		</div>
	</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
