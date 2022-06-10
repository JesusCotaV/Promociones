<?php
//POST DATA
$FechaI = $_POST['fechai'];
$FechaF = $_POST['fechaf'];
$id = $_POST['options'];
$Observacion = $_POST['observacion'];
if($Observacion == null){
    $Estado = 'Autorizada';
    //API Url
    $url = 'http://localhost:4000/updateCamp';
    $request_url = $url . '/' . $id;

    //The JSON data.
    $jsonData = array(
        'FechaI' =>  $FechaI,
        'FechaF' =>  $FechaF,
        'Estado' =>  $Estado
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
}

if($Observacion != null){
    $url = 'http://localhost:4000/solicitudesObs/'.$id.'';
    $array = file_get_contents($url);
    $json_a = json_decode($array,true);
    $id_sol =  implode(",",$array);
    echo $id_sol;

    if($id_sol != null){
        $Estado = 'Pendiente';
        //API Url
        $url = 'http://localhost:4000/updateSol';
        $request_url = $url . '/' . $id_sol;

        //The JSON data.
        $jsonData = array(
            'observacion' =>  $Observacion,
            'estado' =>  $Estado
        );

        $curl = curl_init($request_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($jsonData));
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Access-Control-Allow-Origin: "*"',
        'Access-Control-Allow-Methods: DELETE, POST, GET, OPTIONS, PUT',
        'Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With'
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response . PHP_EOL;
    }
   
}