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
			$sql = "select dp.descripcion, p.fecha from AntPenales ap, DelitoPenales dp, Penales p";
			$sql = $sql . " where p.penalid=ap.penalid and p.delitoid=dp.delitoid";
			$sql = $sql . " and p.penalid=" . $_POST["id"];
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
	<button type="button" class="btn btn-primary" onClick="window.location='bAntPenal.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
