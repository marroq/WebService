<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Policias</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>DPI</b></td>
			<td><b>Nombres</b></td>
			<td><b>Apellidos</b></td>
			<td><b>Fecha Ingreso PNC</b></td>
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td>
		 </tr>
		 <?PHP
			$sql = "select dpi, nombres, apellidos, fechaingreso from Policias";
			$sql = $sql . " where dpi like '%" . $_POST["DPI"] . "%'";
			$sql = $sql . " and nombres like '%" . $_POST["Nombre"] . "%'";
			$sql = $sql . " and apellidos like '%" . $_POST["apellido"] . "%'";
			$sql = $sql . " and fechaingreso like '%" . $_POST["fechaingreso"] . "%'";
			$sql = $sql . " order by nombres";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["dpi"];
				echo "</td>";
				echo "<td>";
				echo $row["nombres"];
				echo "</td>";
				echo "<td>";
				echo $row["apellidos"];
				echo "</td>";
				echo "<td>";
				echo $row["fechaingreso"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["dpi"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["dpi"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='ePolicia.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='dPolicia.php'>
		<input type='hidden' value="" name="id">
	</form>

	<button type="button" class="btn btn-primary" onClick="window.location='bPolicia.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='iPolicia.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
