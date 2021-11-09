<?php
$conn = require_once('conexion.php');
try {

    $idUser = $_POST['idUser'];
    $Fk_Sede =  trim($_POST["sedeLaboral"]);
    $Fk_Area = trim($_POST["Area"]);
    $Fk_TipoVia = trim($_POST["direccion"]);
    $numeroViaFinal = trim($_POST["numeroViaUno"]);
    $NumeroViaDos = trim($_POST["numeroViaDos"]);
    $Interior = trim($_POST["interior"]);
    $Municipio = trim($_POST["municipioRecidencia"]);
    $Barrios = trim($_POST["barrio"]);
    $Telefonofijo = trim($_POST["telefonofijo"]);
    $Movil = trim($_POST["movil"]);
    $TelefonoEmergencia = trim($_POST["telefonoEmergencia"]);
    $CorreoElectronico = trim($_POST["correo"]);
    $Guion = "-";
    $NumeroVia = $NumeroViaDos . "#" . $numeroViaFinal;


    //validar si todo esta vacio redireccionar
    if(empty($idUser)) {
        header("Location: ./formularioData/html/actualizardatos.php?error=empty");
        exit();
    }
    if ( empty($Interior) && empty($Telefonofijo) && empty($Movil) && empty($TelefonoEmergencia) && empty($CorreoElectronico) && empty($NumeroVia) ) {
        header("Location: ./formularioData/html/actualizardatos.php");
        echo '<script> alert("por favor introduzca los de mas datos necesarios")</script>';
    }else if (empty($CorreoElectronico) || empty($TelefonoEmergencia) || empty($Telefonofijo) || empty($Movil) ) {
        $query = $conn ->prepare("UPDATE Personal_almacontact SET Fk_Sede = '$Fk_Sede', Fk_Area = '$Fk_Area', Fk_TipoVia = '$Fk_TipoVia', NumeroVia = '$NumeroVia', MunicipioResidencia = '$Municipio', Barrios = '$Barrios' WHERE Pk_NumeroDocumento = '$idUser'");
        $query->execute();
    } else {
        $query = $conn ->prepare("UPDATE Personal_almacontact SET Fk_Sede = '$Fk_Sede', Fk_Area = '$Fk_Area', Fk_TipoVia = '$Fk_TipoVia', NumeroVia = '$NumeroVia', Interior = '$Interior', MunicipioResidencia = '$Municipio', Barrios = '$Barrios', Telefonofijo = '$Telefonofijo', Movil = '$Movil', TelefonoEmergencia = '$TelefonoEmergencia', CorreoElectronico = '$CorreoElectronico' WHERE Pk_NumeroDocumento = '$idUser'");
        $query->execute();
    }
    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        </head>
        <body>
        <div class="alert alert-success" role="alert">
        <Script>
            alert("Datos Actualizados");
            let re = setTimeout(window.location.href="/github/formulario/formulario/formularioData/html/home.php",5000)
        </Script>
        </div>
        </body>
        </html>';
} catch (Exception $e) {
    echo $e;
}
