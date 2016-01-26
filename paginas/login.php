<?php
	include("../BD/conexioni.php");
    include("global/globalHeader.php");
?>
<div align='text-left' class="container">
	<br><br>
	<font size='5'><b>Iniciar Sesion</b></font>
</div>
<div align='center' class="container">
	<form class="form-horizontal" name='validar' method='post' action='validar.php'>
			<div class="form-group">
    		<label class="col-sm-4 control-label">Usuario</label>
    		<div class="col-sm-5">
    			<input type="text" name="usuario" class="form-control" placeholder="Usuario">
    		</div>
    		</div>
			<div class="form-group">
    		<label class="col-sm-4 control-label">Password</label>
    		<div class="col-sm-5">
    			<input type="password" name="pass" class="form-control" placeholder="Password">
    		</div>
    		</div>
			<input type='submit' class="btn btn-success" value='Iniciar Sesion'> <br><br>
	</form>
</div>
<?PHP
	include("../BD/conexionf.php");
?>
