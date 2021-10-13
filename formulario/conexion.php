<?php
/*         $host = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'empleados_almacontact';
        $conn;  */ 
         $host = '10.96.16.53';
        $user = 'personalma';
        $password = 'personalma';
        $db = 'Empleados_Almacontact';
        $conn;   

    try {
        $conexionString = "mysql:host=".$host.";dbname=".$db.";charset=utf8";
        $conn = new PDO($conexionString,$user,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        $conn = 'error en la conexion';
        echo "error:".$e->getMessage()."line".$e->getLine();
    }
    
    return $conn;

