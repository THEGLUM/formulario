<?php
// include_once("conexion.php");
$conn = require_once('conexion.php');


/* $tipoDedocumento = trim($_POST["tipoDedocumento"]);
$numeroDeDocumento = trim($_POST["numeroDeDocumento"]);
$primerApellido = trim($_POST["PrimerApellido"]);
$segundoApellido = trim($_POST["segundoApellido"]);
$primerNombre = trim($_POST["primeroNombre"]);
$segundoNombre = trim($_POST["segundoNombre"]);
$area = trim($_POST["area"]);
$direccion = trim($_POST["direccion"]);
$interior = trim($_POST["flexRadioDefault"]);
$municipioRecidencia = trim($_POST["municipioRecidencia"]);
$barrio = trim($_POST["barrio"]);
$sedeLaboral = trim($_POST["sedeLaboral"]);
$telefonoFijo = trim($_POST["telefono"]);
$movil = trim($_POST["movil"]);
$telefonoEmergencia = trim($_POST["telefonoEmergencia"]);
$correo = trim($_POST["correo"]);
$fechaNacimiento = trim($_POST["fechaNacimiento"]);
$genero = trim($_POST["genero"]);
$idiomas = trim($_POST["idiomas"]);
$numeroDeDireccion = trim($_POST["numeroVia"]); */

$AutorizaTratamiento = trim($_POST["tipoDedocumento"]);
$Fk_TipoDocumento = trim($_POST["tipoDedocumento"]);
$Pk_NumeroDocumento = trim($_POST["numeroDeDocumento"]) ;
$PrimerApellido =  trim($_POST["PrimerApellido"]);
$SegundoApellido = trim($_POST["segundoApellido"]);
$PrimerNombre = trim($_POST["primeroNombre"]);
$SegundoNombre =  trim($_POST["segundoNombre"]);
$Fk_Sede =  trim($_POST["sedeLaboral"]);
$Fk_Area = trim($_POST["area"]);
$Fk_TipoVia = trim($_POST["direccion"]);
$NumeroVia = trim($_POST["flexRadioDefault"]); //revisar
$Interior = trim($_POST["flexRadioDefault"]);
$Municipio = trim($_POST["municipioRecidencia"]);
$Barrios = trim($_POST["barrio"]);
$Telefonofijo = trim($_POST["telefono"]);
$Movil = trim($_POST["movil"]);
$TelefonoEmergencia = trim($_POST["telefonoEmergencia"]);
$CorreoElectronico = trim($_POST["correo"]);
$FechaNacimiento = trim($_POST["fechaNacimiento"]);
$Fk_Genero = trim($_POST["genero"]);
$Fk_idioma =  trim($_POST["idiomas"]);
$Guion = "-";
$query = $conn->prepare('call spInsertarUsuario(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?');

$query->bindParam(1, $AutorizaTratamiento, PDO::PARAM_STR);
$query->bindParam(2, $Fk_TipoDocumento, PDO::PARAM_INT);
$query->bindParam(3, $Pk_NumeroDocumento, PDO::PARAM_STR);
$query->bindParam(4, $PrimerApellido, PDO::PARAM_STR);
$query->bindParam(5, $SegundoApellido, PDO::PARAM_STR); 
$query->bindParam(5, $PrimerNombre, PDO::PARAM_STR);
$query->bindParam(6, $SegundoNombre, PDO::PARAM_STR);
$query->bindParam(12, $Fk_Sede, PDO::PARAM_INT);
$query->bindParam(7, $Fk_Area, PDO::PARAM_INT);
$query->bindParam(8, $Fk_TipoVia, PDO::PARAM_INT);
$query->bindParam(20, $NumeroVia, PDO::PARAM_STR);
$query->bindParam(22, $Guion, PDO::PARAM_STR);
$query->bindParam(9, $Interior, PDO::PARAM_STR);
$query->bindParam(10,$Municipio, PDO::PARAM_STR);
$query->bindParam(11, $Barrios, PDO::PARAM_STR);
$query->bindParam(13, $Telefonofijo, PDO::PARAM_INT);
$query->bindParam(14, $Movil, PDO::PARAM_INT);
$query->bindParam(15, $TelefonoEmergencia, PDO::PARAM_INT);
$query->bindParam(16, $CorreoElectronico, PDO::PARAM_STR);
$query->bindParam(17, $FechaNacimiento, PDO::PARAM_STR);
$query->bindParam(18, $Fk_Genero, PDO::PARAM_INT);
$query->bindParam(19, $Fk_idioma, PDO::PARAM_INT);

$query->execute();







