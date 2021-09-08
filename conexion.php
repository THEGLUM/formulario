<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'formulario';
    $conn;
/*  private $host = '10.96.16.53';
    private $user = 'personalma';
    private $password = 'personalma';
    private $db = 'Empleados_Almacontact';
    private $conn; */

    try {
        $conexionString = "mysql:host=".$host.";dbname=".$db.";charset=utf8";
        $conn = new PDO($conexionString,$user,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexion con la base de datos";
    } catch (Exception $e) {
        $conn = 'error en la conexion';
        echo "error:".$e->getMessage()."line".$e->getLine();
    }

    return $conn;
