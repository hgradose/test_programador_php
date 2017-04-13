<?php

//incluir el archivo principal
include("Slim/Slim.php");

//registran la instancia de slim
\Slim\Slim::registerAutoloader();
//aplicacion 
$app = new \Slim\Slim();


 
//routing 
//accediendo VIA URL
//http:///www.google.com/
//localhost/apirest/index.php/ => "Hola mundo ...."
$app->get(
    '/',function() use ($app){
    	

    $app->render('menu.php');

    }
)->setParams(array($app));


$app->get(
    '/empleado/encontrar_en_rango/:variable',function($variable) use ($app){

        function limpia($numero){
            $tmp = str_replace("$", "", $numero);
            $tmp2 = str_replace(",", "", $tmp);
            return $tmp2;
        }

        $variable = explode('-', $variable);
        $inicial = $variable[0];
        $final = $variable[1];

        $data = file_get_contents("employees.json");
        $array = json_decode($data, true);

        $resultado = array();
        foreach ($array as $key => $datos) {
           if(limpia($datos['salary']) > limpia($inicial) && limpia($datos['salary']) < limpia($final) ){
                $resultado[] = $datos;
           }
        }
 
        //echo $data;
        $xml =new DOMDocument("1.0");
        $xml->formatOutput = true;
        $employes=$xml->createElement("employes");
        $xml->appendChild($employes);
       
        foreach ($resultado as $key => $value) {
            $employe = $xml->createElement("employe");
            $employes->appendChild($employe);

            $id = $xml->createElement("id",$value['id']);
            $employe->appendChild($id);

            $name = $xml->createElement("name",$value['name']);
            $employe->appendChild($name);

            $salary = $xml->createElement("salary",$value['salary']);
            $employe->appendChild($salary);
        }
        /*echo "<xmp>" . */$xml->saveXML()/* . "</xmp>"*/;
        $xml->save("reports.xml");

    }
);


$app->get(
    '/empleados/:listado',function() use ($app){
         
        $data = file_get_contents("employees.json");
        $products = json_decode($data, true);


        $app->render('lista.php', array('dataproducts' => $products));
    }
);

$app->post(
    '/empleados/:resultado',function() use ($app){
        

        $data = file_get_contents("employees.json");
        $products = json_decode($data, true);

        $busqueda = $_POST['busqueda'];
        $busqueda = trim($busqueda);
        foreach ($products as $key => $value) {
            if($value['email'] == $busqueda ){
                $result[] = $value;
            }
        }

      
        $app->render('lista.php', array('dataproducts' => $result));
    }
);


$app->get(
    '/empleados/detalle/:id',function($id) use ($app){
         
        $data = file_get_contents("employees.json");
        $products = json_decode($data, true);

        $busqueda = trim($id);
        foreach ($products as $key => $value) {
            if($value['id'] == $busqueda ){
                $result[] = $value;
            }
        }
        $app->render('detalle.php', array('dataproducts' => $result));
    }
);


 

//inicializamos la aplicacion(API)
$app->run();

