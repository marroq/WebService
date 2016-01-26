<?php
	include("global/header.php");
?>
	<div align='center'>
		<br><br>
		<font size='4'><b>Nuevo Agente PNC</b></font>
		<br><br>
		<form class="form-horizontal" name='datos' method='post' action='inPolicia.php'>
			<div class="form-group">
    		<label class="col-sm-4 control-label">DPI</label>
    		<div class="col-sm-5">
    			<input type="text" name="dpi" class="form-control" placeholder="DPI" required>
    		</div>
    		</div>

    		<div class="form-group">
    		<label class="col-sm-4 control-label">Nombres</label>
    		<div class="col-sm-5">
    			<input type="text" name="nombre" class="form-control" placeholder="Nombres" required>
    		</div>
    		</div>

    		<div class="form-group">
    		<label class="col-sm-4 control-label">Apellidos</label>
    		<div class="col-sm-5">
    			<input type="text" name="apellido" class="form-control" placeholder="Apellidos" required>
    		</div>
    		</div>

            <div class="form-group">
            <label class="col-sm-4 control-label">Fecha Ingreso PNC</label>
            <div class="col-sm-5">
                <input type="text" name="fecha" class="form-control" placeholder="YYYY-mm-dd" required>
            </div>
            </div>
			
			<input type='submit' class="btn btn-success" value='Grabar'> <br><br>
			<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	</form>
	</div>
</body>
</html>
