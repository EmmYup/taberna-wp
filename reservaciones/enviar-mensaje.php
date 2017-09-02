<?php 


include 'Telegram.php';
$botid = '321582973:AAG_8DTJbFpsANX_PyHGFjqzv0oBFNpgFFE';
$telegram = new Telegram($botid);
$telegram -> getUpdates();

$textMessage = "*Reservacion en linea*\n".
				"*Nombre:* _Martin Alejandro Pat Uitzil_\n".
				"*Hora de Reserva:* _09:00 P.M_ \n";

$content = array('chat_id' => '@latabernareservaciones', 'text'=> $textMessage, 'parse_mode' => 'Markdown');
$telegram->sendMessage($content);


 ?>