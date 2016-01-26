<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Antecedentes Policiacos</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>Codigo</b></td>
			<td><b>Involucrado</b></td>
			<td><b>Descripcion</b></td> 
			<td><b>Comisaria Emitido</b></td> 
			<td><b>Delitos</b></td>
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td>
		 </tr>
		 <?PHP
			$sql = "select ap.policiacoid, ap.descripcion, i.dpi, c.nombre from AntPoliciacos ap, Comisarias c, Involucrado i";
			$sql = $sql . " where ap.comisariaid=c.comisariaid and ap.dpi=i.dpi and ap.descripcion like '%" . $_POST["descripcion"] . "%'";
			if ($_POST["comisaria"] != "-1")
			{
				$sql = $sql . " and c.comisariaid=" . $_POST["comisaria"];
			}
			if ($_POST["involucrado"] != "-1")
			{
				$sql = $sql . " and i.dpi=" . $_POST["involucrado"];
			}
			$sql = $sql . " order by ap.policiacoid";
			$result = mysql_query($sql);
			
			$i=0;
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["policiacoid"];
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
				echo $row["nombre"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:buscar(" . $row["policiacoid"] . ");'><img height='40' width='40' src='../Imagenes/search.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["policiacoid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["policiacoid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
				$i++;
			}
		?>
	</table>
	<form name='datos' method='post' action='eAntPoliciaco.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='dAntPoliciaco.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos3' method='post' action='bPoliciacos.php'>
		<input type='hidden' value="" name="id">
	</form>
	<button type="button" class="btn btn-primary" onClick="window.location='bAntPoliciaco.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='iAntPoliciaco.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
