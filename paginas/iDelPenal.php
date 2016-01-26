<?php
	include("global/header.php");
?>
	<div align='center'>
		<br><br>
		<font size='4'><b>Nuevo Delito para Antecedente Penal</b></font>
		<br><br>
		<form class="form-horizontal" name='datos' method='post' action='inDelPenal.php'>
			<div class="form-group">
    		<label class="col-sm-4 control-label">Descripcion</label>
    		<div class="col-sm-5">
    			<input type="text" name="descripcion" class="form-control" placeholder="Descripcion" title="Campo obligatorio" required>
    		</div>
    		</div>
			
			<input type='submit' class="btn btn-success" value='Grabar'> <br><br>
			<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	</form>
	</div>
</body>
</html>
