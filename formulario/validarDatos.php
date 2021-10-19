<?php

$conn = require_once('conexion.php');

    $Fk_NumeroDocumento = trim($_POST["txtCedula"]);
    $CorreoElectronico = trim($_POST["txtCorreo"]);
    
  
    try {
        $basesdeDatos = $conn->prepare("SELECT * FROM Personal_almacontact WHERE Pk_NumeroDocumento = ? AND CorreoElectronico = ?;");
        
        $basesdeDatos->bindParam(1, $Fk_NumeroDocumento, PDO::PARAM_INT);
        $basesdeDatos->bindParam(2, $CorreoElectronico, PDO::PARAM_STR);
        $basesdeDatos-> execute();
        var_dump($basesdeDatos);
        $hola = $basesdeDatos;
            var_dump($hola);
            
    if ($basesdeDatos == true)
    {
        echo "Funciona";   # code...
    }
    else
    {
        echo "No funciona";
    }
        //code...
    } catch (PDOExeption $e) {
        echo $e;
    }
