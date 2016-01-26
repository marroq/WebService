<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Log de Conexiones</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>LogId</b></td>
			<td><b>IP</b></td> 
			<td><b>Fecha</b></td>
		 </tr>
		 <?PHP
			$sql = "select logid, ip, fecha from LogConexion";
			$sql = $sql . " order by fecha";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["logid"];
				echo "</td>";
				echo "<td>";
				echo $row["ip"];
				echo "</td>";
				echo "<td>";
				echo $row["fecha"];
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
