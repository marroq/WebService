<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql="insert into Usuarios(usuario,password,fechacreacion) values ('" . $_POST["usuario"] ."', '" . $_POST["pass"] ."', now())";
			$result = mysql_query($sql);
		?>
		<br><br>Proceso Realizado con Exito<br><br>
		<a href='config.php'>Continuar</a>
		</div>
	</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
