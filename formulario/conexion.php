<?php
/* ACA ESTA EL APARTADO MAS IMPORTANTE PPARA QUE TODO EL PROYECTO FUNCIONE */

//ESTA FUNCION  HACE QUE SE CONECTE A UNA BASE DE DATOS DE PRUEBAS
/*         $host = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'Empleados_Almacontact';
        $conn;
 */

 //VARIABLES PARA LA CONECCION CON LA BASE DE DATOS ES IMPORTANTE
        $host = '10.96.16.53';
        $user = 'personalma';
        $password = 'personalma';
        $db = 'Empleados_Almacontact';
        $conn;

        //METODO PARA LA CONEXION A LA BASE DE DATOS
    try {
        $conexionString = "mysql:host=".$host.";dbname=".$db.";charset=utf8";
        $conn = new PDO($conexionString,$user,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        $conn = 'error en la conexion';
        echo "error:".$e->getMessage()."line".$e->getLine();
    }

    return $conn;

