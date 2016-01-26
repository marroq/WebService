<?php
	header("Content-Type:application/json; charset=UTF-8");

	$howtos = array();
	$howto = new stdClass();
	$howto->titulo = "¿Como Saludar?";
	$howto->formas = array('es' => 'Buenos días','kq' => 'xsaqär');
	array_push($howtos,$howto);
	
	/*
	$involucrado = new stdClass();
	$involucrado->nombre = "Pedro";
	$involucrado->apellido = "Juarez";
	array_push($involucrados,$involucrado);
	
	$involucrado = new stdClass();
	$involucrado->nombre = "Francisco";
	$involucrado->apellido = "Tunez";
	array_push($involucrados,$involucrado);
	*/

	echo json_encode($howtos);
?>
