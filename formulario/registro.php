<?php
// include_once("conexion.php");
$conn = require_once('conexion.php');


$tipoDedocumento = trim($_POST["tipoDedocumento"]);
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
$numeroDeDireccion = trim($_POST["numeroVia"]);

/* $tipoDedocumento = 1;
$numeroDeDocumento = "" ;
$primerApellido =  "";
$segundoApellido = "";
$primerNombre = "";
$segundoNombre = "";
$area = 1;
$direccion = "";
$interior = "";
$municipioRecidencia = "";
$barrio = "";
$sedeLaboral =  1;
$telefonoFijo = 1;
$movil = 1;
$telefonoEmergencia = '';
$correo = '';
$fechaNacimiento = '';
$genero = 1;
$idiomas = 1;
$numeroDeDireccion = "";
 */
$query = $conn->prepare('call spInsertarUsuario(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

$query->bindParam(1, $tipoDedocumento, PDO::PARAM_INT);
$query->bindParam(2, $numeroDeDocumento, PDO::PARAM_STR);
$query->bindParam(3, $primerApellido, PDO::PARAM_STR);
$query->bindParam(4, $segundoApellido, PDO::PARAM_STR);
$query->bindParam(5, $primerNombre, PDO::PARAM_STR);
$query->bindParam(6, $segundoNombre, PDO::PARAM_STR);
$query->bindParam(7, $area, PDO::PARAM_INT);
$query->bindParam(8, $direccion, PDO::PARAM_STR);
$query->bindParam(9, $interior, PDO::PARAM_STR);
$query->bindParam(10,$municipioRecidencia, PDO::PARAM_STR);
$query->bindParam(11, $barrio, PDO::PARAM_STR);
$query->bindParam(12, $sedeLaboral, PDO::PARAM_INT);
$query->bindParam(13, $telefonoFijo, PDO::PARAM_INT);
$query->bindParam(14, $movil, PDO::PARAM_INT);
$query->bindParam(15, $telefonoEmergencia, PDO::PARAM_INT);
$query->bindParam(16, $correo, PDO::PARAM_STR);
$query->bindParam(17, $fechaNacimiento, PDO::PARAM_STR);
$query->bindParam(18, $genero, PDO::PARAM_INT);
$query->bindParam(19, $idiomas, PDO::PARAM_STR);
$query->bindParam(20, $numeroDeDireccion, PDO::PARAM_STR);

$query->execute();







