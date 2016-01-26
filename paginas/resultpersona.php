<?php
	include("../BD/conexioni.php");
	include("global/utils.php");
	header("Content-Type:application/json; charset=UTF-8");
	
	//Recuperar valores con $_GET[]
	if(isset($_GET["dpi"])) {
		$dpi=$_GET["dpi"];
		$sql="select ip,puerto from Conexion where Rol='Renap'";
		$result=mysql_query($sql);
		while($row = mysql_fetch_array($result)) {$ip = $row["ip"]; $puerto = $row["puerto"];}
		try {
			$persona = @file_get_contents("http://".$ip.":".$puerto."/personas/" . $dpi);
			$dato = json_decode($persona);
			
			$clientes = array();
			$cliente = new stdClass();
				
			if(isset($dato->nombre)) 			{$nombre = $dato->nombre; 					$cliente->nombre = $nombre;}
			if(isset($dato->segundo_nombre)) 	{$nombre2 = $dato->segundo_nombre;			$cliente->nombre2 = $nombre2;}
			if(isset($dato->tercer_nombre)) 	{$nombre3 = $dato->tercer_nombre;			$cliente->nombre3 = $nombre3;}
			if(isset($dato->primer_apellido)) 	{$apellido = $dato->primer_apellido;		$cliente->apellido = $apellido;}
			if(isset($dato->segundo_apellido)) 	{$apellido2 = $dato->segundo_apellido;		$cliente->apellido2 = $apellido2;}
			if(isset($dato->genero)) 			{$genero = $dato->genero;					$cliente->genero = $genero;}
			if(isset($dato->nacimiento)) 		{$fechaN = $dato->nacimiento;				$cliente->fecha_nac = $fechaN;}
			if(isset($dato->id_municipio)) 		{$municipio = $dato->id_municipio;			$cliente->municipio = $municipio;}
			if(isset($dato->direccion)) 		{$direccion = $dato->direccion;				$cliente->direccion = $direccion;}
			if(isset($dato->error)) 			$error = $dato->error;
			array_push($clientes,$cliente);
		} catch(Exception $exa) {
			$cliente->nombre = "Cliente no disponible";
		}
	} else $dpi="";
		
	echo $json = json_encode($clientes);
	include("../BD/conexionf.php");
?>
