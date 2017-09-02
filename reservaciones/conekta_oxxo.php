<?php
session_start();
require_once 'MyConekta.php';

$_SESSION['token'] = MyConekta::tokengenerator();
$amount = $_POST['monto'];
$amount = (strstr($amount = $_POST['amount'], '.')) ? str_replace('.', '', $amount) : $amount.'00';
$email 	= $_POST['email'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$adultos = $_POST['cantidad'];
$ninos = $_POST['ninos'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$sucursal = $_POST['sucursal'];
$comentario = $_POST['comentario'];
$evento = $_POST['evento'];

if($nombre != null){
MyConekta::oxxo($amount,$email,$nombre,$telefono,$adultos,$ninos,$fecha,$hora,$sucursal,$comentario,$evento);
}



