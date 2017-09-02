<?php 
	$id = $_GET["id"];
	require_once 'MyConekta.php';

	$respuesta = MyConekta::buscarOrden($id);
	echo json_encode($respuesta);
	
?>