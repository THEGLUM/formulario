<?php
$conn = require_once('conexion.php');

$AutorizaTratamiento = trim($_POST["autorizacion"]);
$Fk_TipoDocumento = trim($_POST["tipoDedocumento"]);
$Pk_NumeroDocumento = trim($_POST["numeroDeDocumento"]) ;
$PrimerApellido =  trim($_POST["PrimerApellido"]);
$SegundoApellido = trim($_POST["segundoApellido"]);
$PrimerNombre = trim($_POST["primeroNombre"]);
$SegundoNombre =  trim($_POST["segundoNombre"]);
$Fk_Sede =  trim($_POST["sedeLaboral"]);
$Fk_Area = trim($_POST["area"]);
$Fk_TipoVia = trim($_POST["direccion"]);
$numeroViaFinal = trim($_POST["numeroViaUno"]);
$NumeroViaDos = trim($_POST["numeroViaDos"]);
$Interior = trim($_POST["interior"]);
$Municipio = trim($_POST["municipioRecidencia"]);
$Barrios = $_POST["barrio"];
$Telefonofijo = trim($_POST["telefono"]);
$Movil = trim($_POST["movil"]);
$TelefonoEmergencia = trim($_POST["telefonoEmergencia"]);
$CorreoElectronico = trim($_POST["correo"]);
$FechaNacimiento = trim($_POST["fechaNacimiento"]);
$Fk_Genero = trim($_POST["genero"]);
$Fk_idioma =  trim($_POST["idiomas"]);
$Guion = "-";
$NumeroVia = $NumeroViaDos." ".$numeroViaFinal;


$query = $conn->prepare('INSERT INTO Personal_almacontact(AutorizaTratamientoDatos, Fk_TipoDocumento, Pk_NumeroDocumento, PrimerApellido,SegundoApellido,PrimerNombre,SegundoNombre,Fk_Sede,Fk_Area,Fk_TipoVia,NumeroVia,Guion,Interior,MunicipioResidencia, Barrios,Telefonofijo,Movil,TelefonoEmergencia,CorreoElectronico,FechaNacimiento,Fk_Genero,Fk_Idioma) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');


$query->bindParam(1, $AutorizaTratamiento, PDO::PARAM_STR);
$query->bindParam(2, $Fk_TipoDocumento, PDO::PARAM_INT);
$query->bindParam(3,  $Pk_NumeroDocumento, PDO::PARAM_STR);
$query->bindParam(4, $PrimerApellido, PDO::PARAM_STR);
$query->bindParam(5, $SegundoApellido, PDO::PARAM_STR);
$query->bindParam(6, $PrimerNombre, PDO::PARAM_STR);
$query->bindParam(7, $SegundoNombre, PDO::PARAM_STR);
$query->bindParam(8, $Fk_Sede, PDO::PARAM_INT);
$query->bindParam(9, $Fk_Area, PDO::PARAM_INT);
$query->bindParam(10, $Fk_TipoVia, PDO::PARAM_INT);
$query->bindParam(11, $NumeroVia, PDO::PARAM_STR);
$query->bindParam(12, $Guion, PDO::PARAM_STR);
$query->bindParam(13, $Interior, PDO::PARAM_STR);
$query->bindParam(14, $Municipio, PDO::PARAM_STR);
$query->bindParam(15, $Barrios, PDO::PARAM_STR);
$query->bindParam(16, $Telefonofijo, PDO::PARAM_INT);
$query->bindParam(17, $TelefonoEmergencia,PDO::PARAM_INT);
$query->bindParam(18, $Movil, PDO::PARAM_INT);
$query->bindParam(19, $CorreoElectronico, PDO::PARAM_STR);
$query->bindParam(20, $FechaNacimiento, PDO::PARAM_STR);
$query->bindParam(21, $Fk_Genero, PDO::PARAM_INT);
$query->bindParam(22, $Fk_idioma, PDO::PARAM_INT);

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
            window.location.href="/github/formulario/formulario/formularioData/html/home.php";
        </Script>
</div>

</body>
</html>';
