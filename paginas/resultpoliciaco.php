<?php
	include("../BD/conexioni.php");
	include("global/utils.php");
	header("Content-Type:application/json; charset=UTF-8");
	//Solombrino();
	
	//$api_key = (isset($_GET['api_key'])) ? $_GET['api_key'] : "";
	//$ak_validator = file_get_contents("http://192.168.0.100/sncc/validate_token.php?api_key=".$api_key);
    //$ak_response = json_decode($ak_validator);

    //if ($ak_response->valid) {
		//Recuperar valores con $_GET[]
		if(isset($_GET["comisaria"])) $comisaria=$_GET["comisaria"];
		else $comisaria=0;

		if(isset($_GET["policia"])) $policia=$_GET["policia"];
		else $policia=0;

		if(isset($_GET["dpi"])) $dpi=$_GET["dpi"];
		else $dpi="";

		//Armar Query
		if (isset($error)) {
			$sql = "select error from Crash where ID =1";
			goto finalizar;
		} else if ($comisaria==1 && $policia==1 && $dpi<>'') {
			$sql="select dp.Descripcion as delito, p.fecha
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.DPI='" . $dpi ."'";

			$comisarias="select c.Nombre as comisaria, c.direccion
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p, Comisarias c
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.ComisariaId=c.ComisariaId and an.DPI='" . $dpi ."'";

			$policias="select distinct pl.Nombres as nombre, pl.Apellidos as apellido
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p, Comisarias c, Policias pl
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.ComisariaId=c.ComisariaId and c.DPI=pl.DPI and an.DPI='" . $dpi ."'";

			$antecedente="select distinct an.Descripcion as antecedente
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p, Comisarias c
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.ComisariaId=c.ComisariaId and an.DPI='" . $dpi ."'";
		} else if ($comisaria==1 && $dpi<>'') {
			$sql="select dp.Descripcion as delito, p.fecha
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.DPI='" . $dpi ."'";

			$comisarias="select c.Nombre as comisaria, c.direccion
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p, Comisarias c
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.ComisariaId=c.ComisariaId and an.DPI='" . $dpi ."'";

			$antecedente="select distinct an.Descripcion as antecedente
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p, Comisarias c
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.ComisariaId=c.ComisariaId and an.DPI='" . $dpi ."'";
		} else if ($policia==1 && $dpi<>'') {
			$sql="select dp.Descripcion as delito, p.fecha
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.DPI='" . $dpi ."'";

			$policias="select distinct pl.Nombres as nombre, pl.Apellidos as apellido
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p, Comisarias c, Policias pl
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.ComisariaId=c.ComisariaId and c.DPI=pl.DPI and an.DPI='" . $dpi ."'";

			$antecedente="select distinct an.Descripcion as antecedente
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p, Comisarias c, Policias pl
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.ComisariaId=c.ComisariaId and c.DPI=pl.DPI and an.DPI='" . $dpi ."'";
		} else if ($dpi<>'') {
			$sql="select dp.Descripcion as delito, p.fecha
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.DPI='" . $dpi ."'";

			$antecedente="select distinct an.Descripcion as antecedente
				from AntPoliciacos an, DelitoPoliciacos dp, Policiacos p
				where p.PoliciacoId=an.PoliciacoId and p.DelitoId=dp.DelitoId and an.DPI='" . $dpi ."'";
		} else {
			$sql = "select error from Crash where ID=3";
		}
		
		$policiaco=getArraySQL($sql);
		print_r($policiaco);

		if($policiaco==null) {
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
			
			if(isset($antecedente)) {
				$antNombre = mysql_query($antecedente);
				while($row = mysql_fetch_array($antNombre)) {$Ant->descripcion = $row["antecedente"];}
			}
			
			if(isset($comisarias)) {
				$antComisaria = mysql_query($comisarias);
				while($row = mysql_fetch_array($antComisaria)) {$Ant->comisaria = $row["comisaria"];	$Ant->direccion = $row["direccion"];}
			}

			if(isset($policias)) {
				$antPolicia = mysql_query($policias);
				while($row = mysql_fetch_array($antPolicia)) {$Ant->polinombre = $row["nombre"];	$Ant->poliapellido = $row["apellido"];}
			}

			if (!isset($antecedente)) {
				echo $json = json_encode($policiaco[0]);
			} else {
				$total = array('antecedente' => $Ant, 'delitos' => $policiaco);
				$json = json_encode($total);
				if (isset($_GET["callback"])) {
					echo $_GET["callback"].'('.$json.')';
				} else
					echo $json;
			}
			goto end;
		}
		
		finalizar:
			$policiaco=getArraySQL($sql);
			$json = json_encode($policiaco);
			if (isset($_GET["callback"])) {
				echo $_GET["callback"].'('.$json.')';
			} else
				echo $json;
		end:
//	}
	include("../BD/conexionf.php");
?>
