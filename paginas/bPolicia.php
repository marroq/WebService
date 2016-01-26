<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
	<br><br>
	<font size='4'><b>Busqueda Policias</b></font>
	<br><br>
	<form class="form-horizontal" name='datos' method='post' action='rPolicia.php'>
		<div class="form-group">
    		<label class="col-sm-4 control-label">DPI</label>
    		<div class="col-sm-5">
    			<input type="text" name="DPI" class="form-control" placeholder="DPI">
    		</div>
    	</div>

    	<div class="form-group">
    		<label class="col-sm-4 control-label">Nombre</label>
    		<div class="col-sm-5">
    			<input type="text" name="Nombre" class="form-control" placeholder="Nombre">
    		</div>
    	</div>

    	<div class="form-group">
    		<label class="col-sm-4 control-label">Apellido</label>
    		<div class="col-sm-5">
    			<input type="text" name="apellido" class="form-control" placeholder="Apellido">
    		</div>
    	</div>

		<div class="form-group">
    		<label class="col-sm-4 control-label">Fecha Ingreso</label>
    		<div class="col-sm-5">
    			<input type="text" name="fechaingreso" class="form-control" placeholder="YYYY-mm-dd">
    		</div>
    	</div>

		<button type="submit" class="btn btn-primary" onClick="window.location='rPolicia.php';">Busqueda</button>
		<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
		<button type="button" class="btn btn-primary" onClick="window.location='iPolicia.php';">Nuevo</button>
	</form>
	</div>
</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
