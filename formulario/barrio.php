<?php

$id = $_POST['id_municipio'];
$html='';
if(isset($id)){
    $conn = include_once("./conexion.php");
    $query = "SELECT * FROM Barrio WHERE Fk_id_municipio= ".$id;
    $res = $conn -> prepare($query);
    $res->execute();
    $datos = $res->fetchAll();
    $data = '';
    foreach ($datos as $value) {
        $data = $data . '<option value='.$value['Nombre_barrio'].'>'.$value['Nombre_barrio'].'</option>';
    }
    echo $data;
}

