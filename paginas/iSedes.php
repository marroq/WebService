<?php
	include("global/header.php");
?>
	<div align='center'>
		<br><br>
		<font size='4'><b>Nueva Sede</b></font>
		<br><br>
		<form class="form-horizontal" name='datos' method='post' action='inSedes.php'>
			<div class="form-group">
    		<label class="col-sm-4 control-label">Direccion</label>
    		<div class="col-sm-5">
    			<input type="text" name="direccion" class="form-control" placeholder="Direccion" required>
    		</div>
    		</div>

    		<div class="form-group">
    		<label class="col-sm-4 control-label">Zona</label>
    		<div class="col-sm-5">
    			<input type="text" name="zona" class="form-control" placeholder="Zona" required>
    		</div>
    		</div>

    		<div class="form-group">
    		<label class="col-sm-4 control-label">Telefono</label>
    		<div class="col-sm-5">
    			<input type="text" name="telefono" class="form-control" placeholder="Telefono" required>
    		</div>
    		</div>
			
			<input type='submit' class="btn btn-success" value='Grabar'> <br><br>
			<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	</form>
	</div>
</body>
</html>
