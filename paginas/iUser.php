<?php
	include("global/header.php");
?>
	<div align='center'>
		<br><br>
		<font size='4'><b>Nuevo Usuario</b></font>
		<br><br>
		<form class="form-horizontal" name='datos' method='post' action='inUser.php'>
			<div class="form-group">
    		<label class="col-sm-4 control-label">Usuario</label>
    		<div class="col-sm-5">
    			<input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
    		</div>
    		</div>
    		<div class="form-group">
    		<label class="col-sm-4 control-label">Password</label>
    		<div class="col-sm-5">
    			<input type="password" name="pass" class="form-control" placeholder="Password" required>
    		</div>
    		</div>
			<input type='submit' class="btn btn-success" value='Grabar'> <br><br>
			<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	</form>
	</div>
</body>
</html>
