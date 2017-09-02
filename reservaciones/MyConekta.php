<?php

require_once("conekta/lib/Conekta.php");

class MyConekta {
	
	public static $api_key = 'key_5pQsSWd7sjHZyytinKvNLw'; //produccion
	//public static $api_key = 'key_uR3yJzGFn8UFyha7qFczPQ'; //pruebas

	public static $description = 'Reservacion';	
	public static $currency = 'mxn';	

	//Function to validate if the token does exist
	public static function check_token($token){
		if ($token == $_SESSION['token'])
			return true;

		return false;
	}

	//Function to generate a md5 32digits token
	public static function tokengenerator($len = 32){		
		//seed
		$keychars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";				
		// RANDOM KEY GENERATOR
		$id = "";
		$max = strlen($keychars) - 1;
		
		for ($i=0;$i<$len;$i++)
			$id .= substr($keychars, rand(0, $max), 1);
		
		return md5($id);
	}

	

	public static function buscarCargo($id){
		\Conekta\Conekta::setApiKey(self::$api_key);
		try {
			$response =  \Conekta\Charge::retrieve($id);
			return $response;
		} catch (Exception $e) {
			return $e;
		}
	}

	public static function buscarOrden($id){
		\Conekta\Conekta::setApiKey(self::$api_key);
		try {
			$response =  \Conekta\Order::find($id);
			return $response;
		} catch (Exception $e) {
			return $e;
		}
	}

	//Function to make payments in Bank
	public static function bank($amount, $name, $email, $phone, $bank){		
		\Conekta\Conekta::setApiKey(self::$api_key);
		$request = array(	
			'amount' => $amount,
			'currency' => self::$currency,
			'description' => self::$description,
			'details' => array(
			                'name' => $name,
			                'email' => $email,
			                'phone' => $phone
			                ),
			'bank' => array('type' => $bank)
			);

		try {
			$response =  \Conekta\Charge::create($request);  	

			echo
		    'status='.$response['status'].
		    '&currency='.$response['currency'].
		    '&description='.$response['description'].
		    '&amount='.$response['amount'].
		    '&service_name='.$response['payment_method']['service_name'].
		    '&service_number='.$response['payment_method']['service_number'].
		    '&reference='.$response['payment_method']['reference'].
		    '&type='.$response['payment_method']['type'].
		    '&expiry_date='.date('d/m/Y').
		    '&token='.$_SESSION['token'];
		  	
		} 
		catch (Exception $e) {
		  	// Catch all exceptions including validation errors.
		  	echo $e->getMessage(); 
		 }		
	}

	//Function to make payments in Oxxo stores
	public static function oxxo($amount, $email,$nombre,$telefono,$adultos,$ninos,$fecha,$hora,$sucursal,$comentario,$evento){	

		\Conekta\Conekta::setApiKey(self::$api_key);
		/*$request = array(
		    'amount' => $amount,

		    'currency' => self::$currency,
		    'description' => self::$description,
		    'details'=> array('email' => $email,
	    					  'phone' => $telefono,
	   						  'name' => $nombre),
		    'cash'=> array('type' => 'oxxo')
		    );*/

		
		$data = array(
			  'currency' =>  self::$currency,
			  'customer_info' => array(
			    	'email' => $email,
					'name' => $nombre,
					'phone' => $telefono
			  ),
			  'line_items' => array(
			    array(
			      'name'=> 'Reservaciones',
		          'description'=> 'Reservacion',
		          'unit_price'=> $amount / $adultos,
		          'quantity'=> $adultos,
		          'sku'=> 'reserva',
		          'category'=> 'reserva'
			    )
			  ),
			  'charges' => array(
			  	array(
			  		'payment_method' => array(
			        	"service_name" => "OxxoPay",
				        "object" => "cash_payment",
				        "type"=> "oxxo_cash",
				        "store_name"=> "OXXO",
				        'expires_at' => time() + 43200
			       )
			  ))
			);

		try {
			$orden =  \Conekta\Order::create($data);  

		   	$orden = json_decode($orden);

		   	$referencia = $orden->charges[0]->payment_method->reference;
		    $referencia = substr($referencia,0,4).' - '.substr($referencia,4,3).' - '.substr($referencia,7,4).' - '.substr($referencia,11,3);
		   	echo $referencia;
		   	include "voucher.php";
		    if(enviarTicketOxxo($sucursal,$nombre,$fecha,'OXXO',$ninos,$adultos,$amount,$referencia,$evento)){
   				enviarCorreoOxxo($sucursal,$fecha,$hora,$adultos,$ninos,$nombre,$telefono,$email,$comentario,$referencia,$amount / 100);
		   	 }

		} 
		catch (Exception $e) {
		  	// Catch all exceptions including validation errors.
		  	echo $e; 
		}
	}

	//Function to make payments with a Credit/Debit Card
	public static function card($nombre,$token,$sucursal,$hora,$comentario,$brand,$fecha,$ninos,$amount, $number, $exp_month, $exp_year, $cvc, $name, $email,$phone,$preciounitario,$cantidad,$evento){

		\Conekta\Conekta::setApiKey(self::$api_key);
		

			/*$data = array(
			'card'=> array(
				'token_id' => $token
				),
			'details' => array(
					'email' => $email,
					'name' => $name,
					'phone' => $phone,
					'line_items'=> array(
					      array(
					        'name'=> 'Reservaciones',
					        'description'=> 'Reservacion',
					        'unit_price'=> $preciounitario.'00',
					        'quantity'=> $cantidad,
					        'sku'=> 'reserva',
					        'category'=> 'reserva'
					      )
					    ),
				), 
			
			'description' => self::$description, 
			'amount' => $amount, 
			'currency' => self::$currency
			);*/

			$data = array(
			  'currency' =>  self::$currency,
			  'customer_info' => array(
			    	'email' => $email,
					'name' => $name,
					'phone' => $phone
			  ),
			  'line_items' => array(
			    array(
			      'name'=> 'Reservaciones',
		          'description'=> 'Reservacion',
		          'unit_price'=> $amount / $cantidad,
		          'quantity'=> $cantidad,
		          'sku'=> 'reserva',
		          'category'=> 'reserva'
			    )
			  ),
			  'charges' => array(
			  	array(
			  		'payment_method' => array(
			        'type'       => 'card',
			        'token_id' => $token
			       )
			  ))
			);

		try {
		  	$orden = \Conekta\Order::create($data);
		  
			echo $orden;
			$codigoAutorizacion = $orden->charges[0]->payment_method->auth_code;

	    	include 'voucher.php';
	    	if(enviarTicket($sucursal,$name,$fecha,'Tarjeta Bancaria',$brand,substr($number, -4, 4),$exp_month."/".$exp_year,$ninos,$cantidad,$amount,$codigoAutorizacion,$evento)){
	    		
	    		if(enviarCorreo($sucursal,$fecha,$hora,$cantidad,$ninos,$nombre,$phone,$email,$comentario,$amount / 100 ))
    				{

    				}
	    	}
		} 
		catch (\Conekta\ErrorList $e) {
		  // Catch all exceptions including validation errors.
			$error = $e->getMessage();
			$error = array("failure_message"=>$error);
		   	echo json_encode($error);
		}
	}
	//END OF CLASS
}