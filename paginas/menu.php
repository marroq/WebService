<?php
	include("global/header.php");
?>
<div class="col-sm-offset-4 col-sm-5" align="center">
	<h2 class="text-center">ENTIDADES</small></h2>
		<table class="table table-striped">
			<tr><td class="danger">
				<button type="button" class="btn btn-default btn-block" onClick="window.location='bAntPoliciaco.php';">Antecedentes Policiacos</button>
			</td></tr>
			<tr><td class="active">
				<button type="button" class="btn btn-default btn-block" onClick="window.location='bAntPenal.php';">Antecedentes Penales</button>
			</td></tr>
			<tr><td class="danger">
				<button type="button" class="btn btn-default btn-block" onClick="window.location='bComisarias.php';">Comisarias</button>
			</td></tr>
			<tr><td class="active">
				<button type="button" class="btn btn-default btn-block" onClick="window.location='bSedes.php';">Sedes</button>
			</td></tr>
			<tr><td class="danger">
				<button type="button" class="btn btn-default btn-block" onClick="window.location='bDelPoliciaco.php';">Delitos Policiacos</button>
			</td></tr>
			<tr><td class="active">
				<button type="button" class="btn btn-default btn-block" onClick="window.location='bDelPenal.php';">Delitos Penales</button>
			</td></tr>
			<tr><td class="danger">
				<button type="button" class="btn btn-default btn-block" onClick="window.location='bPolicia.php';">Comisarios</button>
			</td></tr>
			<tr><td class="danger">
				<button type="button" class="btn btn-default btn-block" onClick="window.location='config.php';">CONFIGURACION</button>
			</td></tr>
		</table>
		<form class="form-horizontal" name='validar' method='post' action='logout.php'>
			<input type='submit' class="btn btn-success" value='Cerrar Sesion'> <br><br>
		</form>
	</div>
</body>
</html>
