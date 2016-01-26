<?php 
	session_start();
	if (!isset($_SESSION["logged"])) {
		header("Location: login.php");
	}
?>
<html>
	<head>
		<title>ProyectoCC6</title>
		<script language="javascript">
			function idmodificar(pid) {
				document.datos.id.value= pid;
				document.datos.submit();
			}
			function idborrar(pid) {
				vrespuesta=confirm('Esta seguro de eliminar el registro?');
				if(vrespuesta) {
					document.datos2.id.value=pid;
					document.datos2.submit();
				}
			}
			function buscar(pid) {
				document.datos3.id.value=pid;
				document.datos3.submit();
			}
			function idmodificar2(pid) {
				document.datos4.id.value= pid;
				document.datos4.submit();
			}
			function idborrar2(pid) {
				vrespuesta=confirm('Esta seguro de eliminar el registro?');
				if(vrespuesta) {
					document.datos5.id.value=pid;
					document.datos5.submit();
				}
			}
		</script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h1 class="text-right">Antecedentes<small>CCVI</small></h1>
		</div>
