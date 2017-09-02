<?php 
    $body = @file_get_contents('php://input');
    $data = json_decode($body);
    http_response_code(200); // Return 200 OK
    include "MyConekta.php";

      
    

     
     
    if ($data->type == "order.paid" && $data->data->object->charges->data[0]->payment_method->type == "oxxo"){
        
        $factura = MyConekta::buscarOrden($data->data->object->id);
        $factura = json_decode($factura);
        include 'Telegram.php';
        $botid = '321582973:AAG_8DTJbFpsANX_PyHGFjqzv0oBFNpgFFE';
        $telegram = new Telegram($botid);
        $telegram -> getUpdates();
        $referencia = $factura->charges[0]->payment_method->reference;

        if($referencia != null){

            $referencia = substr($referencia,0,4).' - '.substr($referencia,4,3).' - '.substr($referencia,7,4).' - '.substr($referencia,11,3);

            $textMessage = "*La preReserva ha sido pagada: *\n".
                            "*Nombre:* ".$factura->customer_info->name."\n".
                            "*Referencia:* ".$referencia."\n";

            $content = array('chat_id' => '@latabernareservaciones', 'text'=> $textMessage, 'parse_mode' => 'Markdown');
            //$content = array('chat_id' => '@pruebataberna', 'text'=> $textMessage, 'parse_mode' => 'Markdown');
            include "voucher.php";
            if(ReservaExitosaOxxo($factura->customer_info->email,$referencia)){
                $telegram->sendMessage($content);
            }
            
        }
        
    }

 ?>