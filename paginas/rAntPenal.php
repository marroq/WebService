<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Antecedentes Penales</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>Codigo</b></td>
			<td><b>Involucrado</b></td>
			<td><b>Descripcion</b></td> 
			<td><b>Sede Emitido</b></td>
			<td><b>Delitos</b></td>
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td>
		 </tr>
		 <?PHP
			$sql = "select ap.penalid, ap.descripcion, s.direccion, i.dpi from AntPenales ap, Sedes s, Involucrado i";
			$sql = $sql . " where ap.sedeid=s.sedeid and ap.dpi=i.dpi and ap.descripcion like '%" . $_POST["descripcion"] . "%'";
			if ($_POST["sede"] != "-1")
			{
				$sql = $sql . " and s.sedeid=" . $_POST["sede"];
			}
			if ($_POST["involucrado"] != "-1")
			{
				$sql = $sql . " and i.dpi=" . $_POST["involucrado"];
			}
			$sql = $sql . " order by ap.penalid";
			$result = mysql_query($sql);

			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["penalid"];
				echo "</td>";
				echo "<td>";
				$dpi=$row["dpi"];
				$persona = file_get_contents("http://localhost/proyecto/paginas/resultpersona.php?dpi=" . $dpi);
				$datos = json_decode($persona);
				foreach($datos as $dato) {
					if(isset($dato->nombre)) 	{$nombre = $dato->nombre; 		} else {$nombre=$row["dpi"];	}
					if(isset($dato->apellido)) 	{$apellido = $dato->apellido;	} else {$apellido="";			}
				}
				echo $nombre . " " . $apellido;
				echo "</td>";
				echo "<td>";
				echo $row["descripcion"];
				echo "</td>";
				echo "<td>";
				echo $row["direccion"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:buscar(" . $row["penalid"] . ");'><img height='40' width='40' src='../Imagenes/search.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["penalid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["penalid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='eAntPenal.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='dAntPenal.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos3' method='post' action='bPenales.php'>
		<input type='hidden' value="" name="id">
	</form>
	<button type="button" class="btn btn-primary" onClick="window.location='bAntPenal.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='iAntPenal.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
