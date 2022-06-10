<?php
//POST DATA
$solicitud = $_POST['options'];
$NombreCamp = $_POST['name'];
$productos = $_POST['product'];
$detalles = $_POST['details'];
//API Url
$url = 'http://localhost:4000/addcamp';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'NombreCampaña' =>  $NombreCamp,
    'Detalles' =>  $detalles,
    'id_producto' =>  $productos,
    'id_solicitud' =>  $solicitud
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
$result = curl_exec($ch);

    $Estado = 'Enviada';
    //API Url
    $url = 'http://localhost:4000/updateSol';
    $request_url = $url . '/' . $solicitud;

    //The JSON data.
    $jsonData = array(
        'estado' =>  $Estado
    );

    $curl = curl_init($request_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($jsonData));
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
    ]);
    $response = curl_exec($curl);
    curl_close($curl);
    echo $response . PHP_EOL;