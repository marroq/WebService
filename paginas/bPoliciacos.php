<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="col-sm-offset-4 col-sm-5">
	<font size='4'><b>Delitos</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>Delito</b></td> 
			<td><b>Fecha</b></td>
		 </tr>
		 <?PHP
			$sql = "select dp.descripcion, p.fecha from AntPoliciacos ap, DelitoPoliciacos dp, Policiacos p";
			$sql = $sql . " where p.policiacoid=ap.policiacoid and p.delitoid=dp.delitoid";
			$sql = $sql . " and p.policiacoid=" . $_POST["id"];
			$sql = $sql . " order by p.fecha";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["descripcion"];
				echo "</td>";
				echo "<td>";
				echo $row["fecha"];
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<button type="button" class="btn btn-primary" onClick="window.location='bAntPoliciaco.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
