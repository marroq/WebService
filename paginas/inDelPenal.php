<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql="insert into DelitoPenales(Descripcion) values ('" . $_POST["descripcion"] ."')";
			$result = mysql_query($sql);
		?>
		<br><br>Proceso Realizado con Exito<br><br>
		<a href='bDelPenal.php'>Continuar</a>
		</div>
	</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
