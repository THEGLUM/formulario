<?php
$conn = require_once('conexion.php');
try {


    if (isset($_POST["txtCorreo"]) && !empty(isset($_POST["txtCorreo"]))) {
        $Fk_NumeroDocumento = trim($_POST["txtCedula"]);
        $CorreoElectronico = trim($_POST["txtCorreo"]);
        $basesdeDatos = $conn->prepare("SELECT * FROM Personal_almacontact WHERE Pk_NumeroDocumento = ? AND CorreoElectronico = ?;");
        $basesdeDatos->bindParam(1, $Fk_NumeroDocumento, PDO::PARAM_STR);
        $basesdeDatos->bindParam(2, $CorreoElectronico, PDO::PARAM_STR);
        $basesdeDatos->execute();
        $data = $basesdeDatos->fetchAll();
        foreach ($data as $datos) :

        endforeach;
        if ($basesdeDatos == true) {
            header("location:/github/formulario/formulario/formularioData/html/actualizardatos.php");
            return;
        }
    }
} catch (PDOException $e) {
    echo $e;
}