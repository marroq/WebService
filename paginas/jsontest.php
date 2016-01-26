<?php
	include("../BD/conexioni.php");
	include("global/utils.php");
	header("Content-Type:application/json; charset=UTF-8");

	$sql="Select * from Sedes";
	$sedes = getArraySQL($sql);
	$json = json_encode($sedes);
	echo $json;

	$array = json_decode($json);

	//echo $array[2]->Direccion;

	foreach ($array as $obj) {
		$idSede = $obj->SedeId;
		$dir = $obj->Direccion;
		$zona = $obj->Zona;
		$telefono = $obj->Telefono;
	//	echo "SEDE:" . $idSede . " DIRECCION:" . $dir . " ZONA:" . $zona . " TELEFONO:" . $telefono;
	//	echo "<br>";
	}

	//echo "<br>";

	for ($i=0;$i<count($array); $i++) {
		$idSede=$array[$i]->SedeId;
		$dir = $array[$i]->Direccion;
		$zona=$array[$i]->Zona;
		$telefono=$array[$i]->Telefono;
		echo "SEDE:" . $idSede . " DIRECCION:" . $dir . " ZONA:" . $zona . " TELEFONO:" . $telefono;
		echo "<br>";
	}
?>
<?PHP
	include("../BD/conexionf.php");
?>
