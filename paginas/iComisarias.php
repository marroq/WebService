<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
	<div align='center'>
		<br><br>
		<font size='4'><b>Nueva Comisaria</b></font>
		<br><br>
		<form class="form-horizontal" name='datos' method='post' action='inComisarias.php'>
		<div class="form-group">
    		<label class="col-sm-4 control-label">Nombre</label>
    		<div class="col-sm-5">
    			<input type="text" name="nombre" class="form-control" placeholder="Nombre" title="Campo obligatorio" required>
    		</div>
    	</div>

    	<div class="form-group">
    		<label class="col-sm-4 control-label">Direccion</label>
    		<div class="col-sm-5">
    			<input type="text" name="direccion" class="form-control" placeholder="Direccion" title="Campo obligatorio" required>
    		</div>
    	</div>

    	<div class="form-group">
    		<label class="col-sm-4 control-label">Zona</label>
    		<div class="col-sm-5">
    			<input type="text" name="zona" class="form-control" placeholder="Zona" title="Campo obligatorio" required>
    		</div>
    	</div>

			<div class="form-group">
    		<label class="col-sm-4 control-label">Encargado</label>
			<div class="col-sm-5">
			<select name="encargado" class="form-control">
				<option value=e"-1" selected></option>
				<?PHP
					$sql = "select dpi, nombres, apellidos from Policias";
					$sql = $sql . " order by nombres";
					$result = mysql_query($sql);
					while($row = mysql_fetch_array($result))
					{
						echo "<option value='" . $row["dpi"] . "'>";
						echo $row["nombres"] . " " . $row["apellidos"] . " </option>";
					}
				?>
			</select></div></div>

			<input type='submit' class="btn btn-success" value='Grabar'> <br><br>
			<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	</form>
	</div>
</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
