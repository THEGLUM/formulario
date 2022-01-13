<?php
$conn = require_once('conexion.php');


    $AutorizaTratamiento    = trim($_POST["autorizacion"]);
    $Fk_TipoDocumento       = trim($_POST["tipoDedocumento"]);
    $Pk_NumeroDocumento     = trim($_POST["numeroDeDocumento"]) ;
    $PrimerApellido         = trim($_POST["PrimerApellido"]);
    $SegundoApellido        = trim($_POST["segundoApellido"]);
    $PrimerNombre           = trim($_POST["primeroNombre"]);
    $SegundoNombre          = trim($_POST["segundoNombre"]);
    $Fk_Sede                = trim($_POST["sedeLaboral"]);
    $Fk_Area                = trim($_POST["area"]);
    $Fk_TipoVia             = trim($_POST["direccion"]);
    $numeroVia              = trim($_POST["numeroVia"]);
    $letraVia               = trim($_POST["letraVia"]);
    $numeroCasa             = trim($_POST["numeroCasa"]);
    $Interior               = trim($_POST["interior"]);
    $Municipio              = trim($_POST["municipioRecidencia"]);
    $Barrios                = trim( $_POST["barrio"]);
    $Telefonofijo           = trim($_POST["telefono"]);
    $Movil                  = trim($_POST["movil"]);
    $TelefonoEmergencia     = trim($_POST["telefonoEmergencia"]);
    $nombreEmergencia       = trim($_POST["NombreEmergencia"]);
    $CorreoElectronico      = trim($_POST["correo"]);
    $FechaNacimiento        = trim($_POST["fechaNacimiento"]);
    $Fk_Genero              = trim($_POST["genero"]);
    $Fk_idioma2 = '';
    foreach ($_POST["idiomas"] as $Fk_idioma):
        $Fk_idioma2 = $Fk_idioma2.$Fk_idioma.",";
    endforeach;
    $lugarNacimiento       = trim($_POST["lugarDeNaciemiento"]);
    $fechaExpedicion        = trim($_POST["expedicion"]);
    $lugarDeExpedicion      = trim($_POST["lugarDeExpedicionDeLaCedula"]);
    $estadoCivil            = trim($_POST["estadoCivil"]);
    $Guion                  = "-";
    $DireccionFinal              = $numeroVia.$letraVia." # ".$numeroCasa;
    $fechaActual = date('Y-m-d');
    $uuid = ($_POST['uuid']);
    if ($_POST['vacunaCovid1'] == 'No'){
        $VacunaCovid1 = 'NO APLICA';
        $VacunaCovid2 = 'NO APLICA';
        $VacunaCovid3 = 'NO APLICA';
        $VacunaCovid4 = $VacunaCovid1.','.$VacunaCovid2.','.$VacunaCovid3;
    }else {

        $VacunaCovid1 = trim($_POST['vacunaCovid1']);
        $VacunaCovid2 = trim($_POST['vacunaCovid2']);
        $VacunaCovid3 = trim($_POST['vacunaCovid3']);
        $VacunaCovid4 = $VacunaCovid1.','.$VacunaCovid2.','.$VacunaCovid3;
    }

    $query = $conn->prepare('INSERT INTO Personal_almacontact(AutorizaTratamientoDatos, Fk_TipoDocumento, Pk_NumeroDocumento,fechaExpedicion,lugarDeExpedicion, PrimerApellido,SegundoApellido,PrimerNombre,SegundoNombre,Fk_Sede,Fk_Area,Fk_TipoVia,NumeroVia,Guion,Interior,MunicipioResidencia, Barrios,Telefonofijo,Movil,nombre_parentesco,TelefonoEmergencia,CorreoElectronico,FechaNacimiento,lugarNacimiento,estadoCivil,Fk_Genero,Fk_Idioma,ultima_modificacion, uuid, Esquemacovid) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

    $query->bindParam(1, $AutorizaTratamiento, PDO::PARAM_STR);
    $query->bindParam(2, $Fk_TipoDocumento, PDO::PARAM_INT);
    $query->bindParam(3, $Pk_NumeroDocumento, PDO::PARAM_STR);
    $query->bindParam(4, $fechaExpedicion, PDO::PARAM_STR);
    $query->bindParam(5, $lugarDeExpedicion, PDO::PARAM_STR);
    $query->bindParam(6, $PrimerApellido, PDO::PARAM_STR);
    $query->bindParam(7, $SegundoApellido, PDO::PARAM_STR);
    $query->bindParam(8, $PrimerNombre, PDO::PARAM_STR);
    $query->bindParam(9, $SegundoNombre, PDO::PARAM_STR);
    $query->bindParam(10, $Fk_Sede, PDO::PARAM_INT);
    $query->bindParam(11, $Fk_Area, PDO::PARAM_INT);
    $query->bindParam(12, $Fk_TipoVia, PDO::PARAM_INT);
    $query->bindParam(13, $DireccionFinal, PDO::PARAM_STR);
    $query->bindParam(14, $Guion, PDO::PARAM_STR);
    $query->bindParam(15, $Interior, PDO::PARAM_STR);
    $query->bindParam(16, $Municipio, PDO::PARAM_STR);
    $query->bindParam(17, $Barrios, PDO::PARAM_STR);
    $query->bindParam(18, $Telefonofijo, PDO::PARAM_INT);
    $query->bindParam(19, $TelefonoEmergencia,PDO::PARAM_INT);
    $query->bindParam(20, $nombreEmergencia,PDO::PARAM_STR);
    $query->bindParam(21, $Movil, PDO::PARAM_INT);
    $query->bindParam(22, $CorreoElectronico, PDO::PARAM_STR);
    $query->bindParam(23, $FechaNacimiento, PDO::PARAM_STR);
    $query->bindParam(24, $lugarNacimiento, PDO::PARAM_STR);
    $query->bindParam(25, $estadoCivil, PDO::PARAM_STR);
    $query->bindParam(26, $Fk_Genero, PDO::PARAM_INT);
    $query->bindParam(27, $Fk_idioma2, PDO::PARAM_STR);
    $query->bindParam(28, $fechaActual, PDO::PARAM_STR);
    $query->bindParam(29, $uuid, PDO::PARAM_STR);
    $query->bindParam(30, $VacunaCovid4, PDO::PARAM_STR);
    $query->execute();

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
                alert("Registro Exitoso");
                window.location.href="/github/formulario/";
            </Script>
    </div>

    </body>
    </html>';



