<?php
	include("../BD/conexioni.php");
	include("global/globalHeader.php");
?>
<div align='center' class="container">
	<?PHP
		$sql = "select usuario, password from Usuarios where Usuario='". $_POST["usuario"] . "' and Password='" . $_POST["pass"] ."'";
		$result=mysql_query($sql);
		$val=0;
		while($row = mysql_fetch_array($result)) {
			$val=1;
		}
		if ($val==1) {
			$_SESSION["logged"] = true;
			echo '<h3>Iniciando sesion...</h3>';
			echo"
				<script type='text/javascript'>
					setTimeout('saltarMenu()',3000);
				</script>";
		} else {
			echo '<h3>Usuario Incorrecto...</h3>';
			echo '<h3>Redireccionando a pagina de Login</h3>';
			echo "<script type='text/javascript'>
					setTimeout('login()',3000);
				</script>";
		}
	?>
</div>
<?PHP
	include("../BD/conexionf.php");
?>
