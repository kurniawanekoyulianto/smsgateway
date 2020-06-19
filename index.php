<?php
	// Account details lorem
	$apiKey = urlencode('lf5UCZQvIOk-2xy0Dlv4l3XEVFyBNzpOLCtSaXasIZ');
	
	// Message details
	$numbers = array(085884444269, 085725562882);
	$sender = urlencode('PT. Solo Murni	');
	$message = rawurlencode('Hello World!');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.txtlocal.com/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>