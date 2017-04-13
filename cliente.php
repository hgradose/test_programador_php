<?php

//incluir el archivo principal
include("Slim/Slim.php");

//registran la instancia de slim
\Slim\Slim::registerAutoloader();
//aplicacion 
$app = new \Slim\Slim();


 


$app->get(
    '/',function() use ($app){
        

        $app->render('formulario_traer_salario_rango.php');

     }
)->setParams(array($app));


 
$app->post(
    '/procesar_web_service',function() use ($app){
    	

    	$salario1 = $_POST['salario1'];
        $salario2 = $_POST['salario2'];

       

        $split = explode('/', $_SERVER['HTTP_REFERER']);
        array_pop($split);
        $union = implode('/', $split);
 
        $url = "$union/index.php/empleado/encontrar_en_rango/$salario1-$salario2";
 
        //CONSUMIENDO EL XML
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        //$result = json_decode($response);
        
        //print_r($response);

        $employes = simplexml_load_file("reports.xml");
 
         
        $app->render('resultado.php',array('result' => $employes ));

     }

)->setParams(array($app));



 

//inicializamos la aplicacion(API)
$app->run();

