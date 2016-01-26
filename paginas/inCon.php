<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql="insert into Conexion(ip,puerto,extension,rol) values ('" . $_POST["ip"] ."', " . $_POST["puerto"] .", '" . $_POST["extension"] ."','" . $_POST["rol"] ."')";
			$result = mysql_query($sql);

			$sql="insert into LogConexion(logid,ip,fecha) values ((select ConexionId from Conexion where ip='".$_POST["ip"]."'),'" . $_POST["ip"] ."',now())";
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
