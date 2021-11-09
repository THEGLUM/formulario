<?php
$id = $_POST['id'];
$html='';
if(isset($id)){
    $conn = include_once("./conexion.php");
    $query ="SELECT * FROM Municipio WHERE Fk_id_sede= ".$id;
    $res = $conn -> prepare($query);
    $res->execute();
    $datos = $res->fetchAll();
    $data = '';
    echo '<option value="">Seleccione un municipio</option>';
    foreach ($datos as $value) {
        $data = $data . '<option value='.$value['Id_municipio'].'>'.$value['Nombre_municipio'].'</option>';
    }
    echo $data;
}
