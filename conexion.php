<?php

    Class Conexion {
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $db = 'formulario';
        private $conn;

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

$cedula = $_POST["tipoDedocumento"];
echo "<br>$cedula";