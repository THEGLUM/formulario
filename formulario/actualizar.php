<?php
$conn = require_once('conexion.php');
try {

    $idUser = $_POST['idUser'];

    $consul = $conn -> prepare("SELECT * FROM Personal_almacontact WHERE Pk_NumeroDocumento = '$idUser' ");
    $consul -> execute();
    $data = $consul -> fetchAll();
    foreach ( $data as $datos):
        $Fk_Sede1 = $datos["Fk_Sede"];
        $Fk_Area1 =  $datos['Fk_Area'];
        $Fk_TipoVia1 = $datos['Fk_TipoVia'];
        $Interior1 = $datos['Interior'];
        $Municipio1 = $datos['MunicipioResidencia'];
        $Barrios1 = $datos['Barrios'];
        $Telefonofijo1 = $datos['Telefonofijo'];
        $Movil1 = $datos['Movil'];
        $TelefonoEmergencia1 = $datos['TelefonoEmergencia'];
        $CorreoElectronico1 = $datos['CorreoElectronico'];
        $NumeroVia1 = $datos['NumeroVia'];
    endforeach;

    //condicionales para verificar si todo fue insertado correctamente
        $idUser = $_POST['idUser'];
        if(empty($idUser)) {
            $idUser = $idUser1;
        }
        $Fk_Sede =  trim($_POST["sedeLaboral"]);
        if(empty($Fk_Sede)) {
            $Fk_Sede = $Fk_Sede1;
        }
        $Fk_Area = trim($_POST["Area"]);
        if(empty($Fk_Area)) {
            $Fk_Area = $Fk_Area1;
        }
        $Fk_TipoVia = trim($_POST["direccion"]);
        if(empty($Fk_TipoVia)) {
            $Fk_TipoVia = $Fk_TipoVia1;
        }

        $numeroViaFinal = trim($_POST["numeroViaUno"]);
        $NumeroViaDos = trim($_POST["numeroViaDos"]);

        $Interior = trim($_POST["interior"]);
        if(empty($Interior)) {
            $Interior = $Interior1;
        }
        $Municipio = trim($_POST["municipioRecidencia"]);
        if(empty($Municipio)) {
            $Municipio = $Municipio1;
        }
        $Barrios = trim($_POST["barrio"]);
        if(empty($Barrios)) {
            $Barrios = $Barrios1;
        }
        $Telefonofijo = trim($_POST["telefonofijo"]);
        if(empty($Telefonofijo)) {
            $Telefonofijo = $Telefonofijo1;
        }
        $Movil = trim($_POST["movil"]);
        if(empty($Movil)) {
            $Movil = $Movil1;
        }
        echo $TelefonoEmergencia = trim($_POST["telefonoEmergencia"]);
        if(empty($TelefonoEmergencia)) {
            $TelefonoEmergencia = $TelefonoEmergencia1;
        }
        $CorreoElectronico = trim($_POST["correo"]);
        if(empty($CorreoElectronico)) {
            $CorreoElectronico = $CorreoElectronico1;
        }
        $Guion = "-";
        if(empty($NumeroViaDos) && empty($numeroViaFinal)) {
            $NumeroVia = $NumeroVia1;
        }else {
            $NumeroVia = $NumeroViaDos . "#" . $numeroViaFinal;
        }




    //validar si todo esta vacio redireccionar
    if(empty($idUser) ) {
        header("Location: ./formularioData/html/actualizardatos.php?error=empty");
        exit();
    }
    if ( empty($Interior) && empty($Telefonofijo) && empty($Movil) && empty($TelefonoEmergencia) && empty($CorreoElectronico) && empty($NumeroVia) ) {
        header("Location: ./formularioData/html/actualizardatos.php");
        echo '<script> alert("por favor introduzca los de mas datos necesarios")</script>';
    }else {
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
            let re = setTimeout(window.location.href="/github/formulario/",5000)
        </Script>
        </div>
        </body>
        </html>';
} catch (Exception $e) {
    echo $e;
}
