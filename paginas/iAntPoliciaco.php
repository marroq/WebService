<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
	<div align='center'>
		<br><br>
		<font size='4'><b>Nuevo Antecedente Policiaco</b></font>
		<br><br>
		<form class="form-horizontal" name='datos' method='post' action='inAntPoliciaco.php'>
		<div class="form-group">
    		<label class="col-sm-4 control-label">Involucrado</label>
			<div class="col-sm-5">
			<select name="involucrado" class="form-control">
			<option value="-1" selected></option>
			<?PHP
				$sql = "select dpi from Involucrado";
				$sql = $sql . " order by dpi";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
				{
					$dpi=$row["dpi"];
					$persona = file_get_contents("http://localhost/proyecto/paginas/resultpersona.php?dpi=" . $dpi);
					$datos = json_decode($persona);
					foreach($datos as $dato) {
						if(isset($dato->nombre)) 	{$nombre = $dato->nombre; 		} else {$nombre="No Registrado";	}
						if(isset($dato->apellido)) 	{$apellido = $dato->apellido;	} else {$apellido="";				}
					}
					echo "<option value='" . $row["dpi"] . "'>";
					echo $nombre . " " . $apellido . "</option>";
				}
			?>
		</select>
		</div>
		</div>

		<div class="form-group">
    		<label class="col-sm-4 control-label">Descripcion</label>
    		<div class="col-sm-5">
    			<input type="text" name="descripcion" class="form-control" placeholder="Descripcion" title="Campo obligatorio" required>
    		</div>
    	</div>

    	<div class="form-group">
    		<label class="col-sm-4 control-label">Comisaria</label>
			<div class="col-sm-5">
			<select name="comisaria" class="form-control">
			<option value="-1" selected></option>
			<?PHP
				$sql = "select comisariaid, nombre from Comisarias";
				$sql = $sql . " order by nombre";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
				{
					echo "<option value='" . $row["comisariaid"] . "'>";
					//echo $row["dpi"] . "</option>";
					echo $row["nombre"] . "</option>";
				}
			?>
		</select>
		</div>
		</div>

		<table><tr><td>
			<div class="form-group">
    			<label class="col-sm-4 control-label">Delitos</label>
    		</div>
    		</td><td>
			<?PHP
				$sql = "select delitoid, descripcion from DelitoPoliciacos";
				$sql = $sql . " order by descripcion";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
				{
					echo " <input type='checkbox' name='delito[]' value='" . $row["delitoid"] . "'>";
					echo $row["descripcion"] . 
					"<input type='text' name='fechaAn[]' class='form-control' placeholder='YYYY-mm-dd'><br>";
				}
			?>
			<br>
			</td></tr></table>

		<input type='submit' class="btn btn-success" value='Grabar'> <br><br>
		<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	</form>
	</div>
</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
