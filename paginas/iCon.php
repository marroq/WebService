<?php
	include("global/header.php");
?>
	<div align='center'>
		<br><br>
		<font size='4'><b>Nueva Conexion</b></font>
		<br><br>
		<form class="form-horizontal" name='datos' method='post' action='inCon.php'>
			<div class="form-group">
    		<label class="col-sm-4 control-label">IP</label>
    		<div class="col-sm-5">
    			<input type="text" name="ip" class="form-control" placeholder="IP" title="Campo obligatorio" required>
    		</div>
    		</div>
    		<div class="form-group">
    		<label class="col-sm-4 control-label">Puerto</label>
    		<div class="col-sm-5">
    			<input type="text" name="puerto" class="form-control" placeholder="Puerto" title="Campo obligatorio" required>
    		</div>
    		</div>
    		<div class="form-group">
    		<label class="col-sm-4 control-label">Extension de Archivo</label>
    		<div class="col-sm-5">
    			<input type="text" name="extension" class="form-control" placeholder="Extension" title="Campo obligatorio" required>
    		</div>
    		</div>
    		<div class="form-group">
    		<label class="col-sm-4 control-label">Rol</label>
    		<div class="col-sm-5">
    			<input type="text" name="rol" class="form-control" placeholder="Rol" title="Campo obligatorio" required>
    		</div>
    		</div>
			<input type='submit' class="btn btn-success" value='Grabar'> <br><br>
			<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	</form>
	</div>
</body>
</html>
