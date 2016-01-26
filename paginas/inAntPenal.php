<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql="insert into AntPenales(Descripcion,SedeId,DPI) values ('" . $_POST["descripcion"] ."' , " . $_POST["sede"] .", '" . $_POST["involucrado"] ."')";
			$result = mysql_query($sql);

			$sql = "select LAST_INSERT_ID() as penalid";
			$result2 = mysql_query($sql);

			while ($row = mysql_fetch_array($result2))
			{
				$penalid = $row["penalid"];
			}
			if (isset($_POST['delito'])) {
				for ($i=0,$j=0;$i<count($_POST['fechaAn']);$i++) {
					if (!$_POST['fechaAn'][$i]==null){
						$sql = "insert into Penales(penalid,delitoid,fecha)";
						$sql = $sql . " values(" . $penalid . ", " . $_POST['delito'][$j] . ", '" . $_POST['fechaAn'][$i] . "')";
						$result = mysql_query($sql);
						$j++;
					}
				}
			}
		?>
		<br><br>Proceso Realizado con Exito<br><br>
		<a href='bAntPenal.php'>Continuar</a>
		</div>
	</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
