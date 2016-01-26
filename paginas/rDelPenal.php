<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Listado de Delitos Penales</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>Codigo</b></td>
			<td><b>Delito</b></td> 
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td>
		 </tr>
		 <?PHP
			$sql = "select delitoid, descripcion from DelitoPenales";
			$sql = $sql . " where descripcion like '%" . $_POST["descripcion"] . "%'";
			$sql = $sql . " order by delitoid";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["delitoid"];
				echo "</td>";
				echo "<td>";
				echo $row["descripcion"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["delitoid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["delitoid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='eDelPenal.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='dDelPenal.php'>
		<input type='hidden' value="" name="id">
	</form>

	<button type="button" class="btn btn-primary" onClick="window.location='bDelPenal.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='iDelPenal.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
