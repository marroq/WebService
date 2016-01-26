<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>CONEXIONES</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>IP</b></td>
			<td><b>Puerto</b></td> 
			<td><b>Extension de Archivo</b></td>
			<td><b>Rol</b></td>
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td>
		 </tr>
		 <?PHP
			$sql = "select conexionid, ip, puerto, extension, rol from Conexion";
			$sql = $sql . " order by rol";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["ip"];
				echo "</td>";
				echo "<td>";
				echo $row["puerto"];
				echo "</td>";
				echo "<td>";
				echo $row["extension"];
				echo "</td>";
				echo "<td>";
				echo $row["rol"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["conexionid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["conexionid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='eCon.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='dCon.php'>
		<input type='hidden' value="" name="id">
	</form>
	<button type="button" class="btn btn-primary" onClick="window.location='iCon.php';">Nueva Conexion</button>
	<button type="button" class="btn btn-default" onClick="window.location='bLogCon.php';">Revisar Log</button>
	<br><br><br>
	<font size='4'><b>USUARIOS</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>Usuario</b></td>
			<td><b>Password</b></td> 
			<td><b>Fecha de Creacion</b></td>
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td>
		 </tr>
		 <?PHP
			$sql = "select userid, usuario, password, fechacreacion from Usuarios";
			$sql = $sql . " order by userid";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["usuario"];
				echo "</td>";
				echo "<td>";
				echo $row["password"];
				echo "</td>";
				echo "<td>";
				echo $row["fechacreacion"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar2(" . $row["userid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar2(" . $row["userid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos4' method='post' action='eUser.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos5' method='post' action='dUser.php'>
		<input type='hidden' value="" name="id">
	</form>
	<button type="button" class="btn btn-primary" onClick="window.location='iUser.php';">Nuevo Usuario</button><br><br>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
