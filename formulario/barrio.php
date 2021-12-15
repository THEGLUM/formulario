<?php
// algoritmo para traer lo que seria todo los barrio
$id = $_POST['id_municipio'];
$html='';
if(isset($id)){
    $conn = include_once("./conexion.php");
    $query = "SELECT * FROM Barrio WHERE Fk_id_municipio= ".$id;
    $res = $conn -> prepare($query);
    $res->execute();
    $datos = $res->fetchAll();
    $data = '';
    echo '<option value="">Seleccione un barrio</option>';
    foreach ($datos as $value) {
        $data = $data . '<option value='.$value['Id_barrio'].'>'.$value['Nombre_barrio'].'</option>';
    }
    echo $data;
}
