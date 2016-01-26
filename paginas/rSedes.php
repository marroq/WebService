<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Sedes</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>Codigo</b></td>
			<td><b>Direccion</b></td> 
			<td><b>Zona</b></td> 
			<td><b>Telefono</b></td> 
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td>
		 </tr>
		 <?PHP
			$sql = "select sedeid, direccion, zona, telefono from Sedes";
			$sql = $sql . " where direccion like '%" . $_POST["direccion"] . "%'";
			$sql = $sql . " and telefono like '%" . $_POST["telefono"] . "%'";
			$sql = $sql . " order by sedeid";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["sedeid"];
				echo "</td>";
				echo "<td>";
				echo $row["direccion"];
				echo "</td>";
				echo "<td>";
				echo $row["zona"];
				echo "</td>";
				echo "<td>";
				echo $row["telefono"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["sedeid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["sedeid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='eSedes.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='dSedes.php'>
		<input type='hidden' value="" name="id">
	</form>

	<button type="button" class="btn btn-primary" onClick="window.location='bSedes.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='iSedes.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
