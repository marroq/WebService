<?php
	include("../BD/conexioni.php");
	include("global/utils.php");
	header("Content-Type:application/json; charset=UTF-8");
	Solombrino();
	
	$api_key = (isset($_GET['api_key'])) ? $_GET['api_key'] : "";
	$ak_validator = file_get_contents("http://192.168.0.100/sncc/validate_token.php?api_key=".$api_key);
    $ak_response = json_decode($ak_validator);
	
    if ($ak_response->valid) {
		//Recuperar valores con $_GET[]
		if(isset($_GET["sede"])) $sede = $_GET['sede'];
		else $sede=0;
		
		if(isset($_GET["dpi"])) $dpi=$_GET["dpi"];
		else $dpi="";
		
		//Armar Query
		if (isset($error)) {
			$sql = "select error from Crash where ID =1";
			goto finalizar;
		} else if ($sede==1 && $dpi<>'') {
			$sql = "select dp.Descripcion as delito, p.fecha
				from AntPenales an, Penales p, DelitoPenales dp
				where p.PenalId=an.PenalId and p.DelitoId=dp.DelitoId and an.DPI='" . $dpi ."'";

			$sedes = "select s.Direccion as sede, s.telefono
				from AntPenales an, Penales p, DelitoPenales dp, Sedes s
				where p.PenalId=an.PenalId and p.DelitoId=dp.DelitoId and an.SedeId=s.SedeId and an.DPI='" . $dpi ."'";

			$antecedente = "select distinct an.Descripcion as antecedente
				from AntPenales an, Penales p, DelitoPenales dp, Sedes s
				where p.PenalId=an.PenalId and p.DelitoId=dp.DelitoId and an.SedeId=s.SedeId and an.DPI='" . $dpi ."'";
		} else if ($dpi<>'') {
			$sql = "select dp.Descripcion as delito, p.fecha
				from AntPenales an, Penales p, DelitoPenales dp
				where p.PenalId=an.PenalId and p.DelitoId=dp.DelitoId and an.DPI='" . $dpi ."'";

			$antecedente = "select distinct an.Descripcion as antecedente
				from AntPenales an, Penales p, DelitoPenales dp
				where p.PenalId=an.PenalId and p.DelitoId=dp.DelitoId and an.DPI='" . $dpi ."'";
		} else {
			$sql = "select error from Crash where ID=3";
		}
		
		$penales=getArraySQL($sql);
		
		if ($penales==null) {
			$sql="select error as dpi from Crash where ID=2";
			$vacio=getArraySQL($sql);
			$json = json_encode($vacio[0]);
			if (isset($_GET["callback"])) {
				echo $_GET["callback"].'('.$json.')';
			} else
				echo $json;
			goto end;
		} else {
			$Ants = array();
			$Ant = new stdClass();

			if (isset($antecedente)) {
				$antNombre = mysql_query($antecedente);
				while($row = mysql_fetch_array($antNombre)) {$Ant->descripcion = $row["antecedente"];}
			}
			
			if(isset($sedes)) {
				$antSede = mysql_query($sedes);
				while($row = mysql_fetch_array($antSede)) {$Ant->sede = $row["sede"];	$Ant->telefono = $row["telefono"];}
			}

			if (!isset($antecedente)) {
				echo $json = json_encode($penales[0]);
			} else {
				$total = array('antecedente' => $Ant, 'delitos' => $penales);
				$json = json_encode($total);
				if (isset($_GET["callback"])) {
					echo $_GET["callback"].'('.$json.')';
				} else
					echo $json;
			}
			goto end;
		}
		
		finalizar:
			$penales=getArraySQL($sql);
			$json = json_encode($penales);
			if (isset($_GET["callback"])) {
				echo $_GET["callback"].'('.$json.')';
			} else
				echo $json;

		end:
	}
	include("../BD/conexionf.php");
?>
