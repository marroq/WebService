<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<font size='4'><b>Busqueda Delitos Policiacos</b></font>
	<br><br>
	<form class="form-horizontal" name='datos' method='post' action='rDelPoliciaco.php'>
		<div class="form-group">
    		<label class="col-sm-4 control-label">Descripcion</label>
    		<div class="col-sm-5">
    			<input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
    		</div>
    	</div>
		<br>
		
		<button type="submit" class="btn btn-primary" onClick="window.location='rDelPoliciaco.php';">Busqueda</button>
		<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
		<button type="button" class="btn btn-primary" onClick="window.location='iDelPoliciaco.php';">Nuevo</button>
	</form>
	</div>
</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
