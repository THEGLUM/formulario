<?php


         $host = 'localhost';
         $user = 'root';
         $password = '';
         $db = 'formulario_1';
         $conn; 
         /*  $host = '10.96.16.53';
         $user = 'personalma';
         $password = 'personalma';
         $db = 'Empleados_Almacontact';
         $conn;  */
        try {
            $dsn = "mysql:host=localhost;dbname=$db";
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if(!$dbh){
                echo "error en la base de datos";
            }
        } catch (PDOException $e){
            echo $e->getMessage();
        }

$tipoDedocumento = $_POST["tipoDedocumento"];
$numeroDeDocumento = $_POST["numeroDeDocumento"];
$primerApellido = $_POST["PrimerApellido"];
$segundoApellido = $_POST["segundoApellido"];
$primerNombre = $_POST["primeroNombre"];
$segundoNombre = $_POST["segundoNombre"];
$area = $_POST["area"];
$direccion = $_POST["direccion"];
$interior = $_POST["flexRadioDefault"];
$municipioRecidencia = $_POST["municipioRecidencia"];
$barrio = $_POST["barrio"];
$sedeLaboral = $_POST["sedeLaboral"];
$telefonoFijo = $_POST["telefono"];
$movil = $_POST["movil"];
$telefonoEmergencia = $_POST["telefonoEmergencia"];
$correo = $_POST["correo"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$genero = $_POST["genero"];
$idiomas = $_POST["idiomas"];

$stmt = $dbh->prepare("INSERT INTO user (tipoDocumento,numeroDocumento,primerApellido,segundoApellido,primerNombre,segundoNombre,area,sede,tipoVia,numeroVia,interior,municipioDeRecidencia,barrio,telefonoFijo,movil,telefonoEmergencia,correoElectronico,fechaNacimiento,genero) VALUES (:tipoDocumento,:numeroDocumento,:primerApellido,:segundoApellido,:primerNombre,:segundoNombre,:area,:sede,:tipoVia,:numeroVia,:interior,:municipioDeRecidencia,:barrio,:telefonoFijo, :movil,:telefonoEmergencia,:correoElectronico,:fechaNacimiento, :genero)");


if($stmt->execute(array(':tipoDocumento' =>,':numeroDocumento'=>,':primerApellido'=>,':segundoApellido'=>,':primerNombre'=>,':segundoNombre'=>,':area'=>,':sede'=>,":tipoVia"=>,':numeroVia'=>,':interior'=>,':municipioDeRecidencia'=>,':barrio'=>,':telefonoFijo'=>,':movil'=>,':telefonoEmergencia'=>,':correoElectronico',':fechaNacimiento',':genero'))) {
    echo "Se ha creado el nuevo registro!";
}
/* $stmt->bindParam(20,$idiomas);
$stmt->execute(); */

