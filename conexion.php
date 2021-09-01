<?php

    Class Conexion {
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $db = 'formulario';
        private $conn;
/*         private $host = '10.96.16.53';
        private $user = 'personalma';
        private $password = 'personalma';
        private $db = 'Empleados_Almacontact';
        private $conn; */

        public function __construct()
        {
            $conexionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
            try {
                $this->conn = new PDO($conexionString,$this->user,$this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "conexion con la base de datos🥰";
            } catch (Exception $e) {
                $this->conn = 'error en la conexion';
                echo "error:".$e->getMessage();
            }
        }
    }
    $conn =  new Conexion();

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

echo "<br>"."$tipoDedocumento"." <br> ";
echo "$numeroDeDocumento"." <br> ";
echo "$primerApellido"." <br> ";
echo "$segundoApellido"." <br> ";
echo "$primerNombre"." <br> ";
echo "$segundoNombre"." <br> ";
echo "$area"." <br> ";
echo "$direccion"." <br> ";
echo "$interior"." <br> ";
echo "$municipioRecidencia"." <br> ";
echo "$barrio"." <br> ";
echo "$sedeLaboral"." <br> ";
echo "$telefonoFijo"." <br> ";
echo "$movil"." <br> ";
echo "$telefonoEmergencia"." <br> ";
echo "$correo"." <br> ";
echo "$fechaNacimiento"." <br> ";
echo "$genero"." <br> ";
echo "$idiomas"." <br> ";