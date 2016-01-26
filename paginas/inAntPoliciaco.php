<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql="insert into AntPoliciacos(Descripcion,ComisariaId, DPI) values ('" . $_POST["descripcion"] ."' , " . $_POST["comisaria"] .", '" . $_POST["involucrado"] ."')";
			$result = mysql_query($sql);

			$sql = "select LAST_INSERT_ID() as policiacoid";
			$result2 = mysql_query($sql);

			while ($row = mysql_fetch_array($result2))
			{
				$policiacoid = $row["policiacoid"];
			}
			if (isset($_POST['delito'])) {
				for ($i=0,$j=0;$i<count($_POST['fechaAn']);$i++) {
					if (!$_POST['fechaAn'][$i]==null){
						$sql = "insert into Policiacos(policiacoid,delitoid,fecha)";
						$sql = $sql . " values(" . $policiacoid . ", " . $_POST['delito'][$j] . ", '" . $_POST['fechaAn'][$i] . "')";
						$result = mysql_query($sql);
						$j++;
					}
				}
			}
		?>
		<br><br>Proceso Realizado con Exito<br><br>
		<a href='bAntPoliciaco.php'>Continuar</a>
		</div>
	</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>

