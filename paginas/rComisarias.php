<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Comisarias</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>Codigo</b></td>
			<td><b>Nombre</b></td> 
			<td><b>Direccion</b></td> 
			<td><b>Zona</b></td> 
			<td><b>Encargado</b></td> 
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td>
		 </tr>
		 <?PHP
			$sql = "select c.comisariaid, c.nombre, c.direccion, c.zona, p.nombres, p.apellidos from Comisarias c, Policias p";
			$sql = $sql . " where c.dpi=p.dpi and c.nombre like '%" . $_POST["nombre"] . "%'";
			$sql = $sql . " and c.direccion like '%" . $_POST["direccion"] . "%'";
			if ($_POST["encargado"] != "-1")
			{
				$sql = $sql . " and p.dpi=" . $_POST["encargado"];
			}
			$sql = $sql . " order by c.comisariaid";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["comisariaid"];
				echo "</td>";
				echo "<td>";
				echo $row["nombre"];
				echo "</td>";
				echo "<td>";
				echo $row["direccion"];
				echo "</td>";
				echo "<td>";
				echo $row["zona"];
				echo "</td>";
				echo "<td>";
				echo $row["nombres"] . " " . $row["apellidos"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["comisariaid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["comisariaid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='eComisarias.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='dComisarias.php'>
		<input type='hidden' value="" name="id">
	</form>

	<button type="button" class="btn btn-primary" onClick="window.location='bComisarias.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='iComisarias.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
