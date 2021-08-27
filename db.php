<?php

class DB {
    private $host;
    private $user;
    private $pass;
    private $driver;
    private $db;
    private $charset;

    public function __construct(){
        $file = "util/config.ini";

        if(!$arr = parse_ini_file($file)) throw new Exception("no abrio el documento con la configuracion",1);

        $this->driver       =$arr['driver'];
        $this->host         =$arr['host'];
        $this->pass         =$arr['pass'];
        $this->db           =$arr['db'];
        $this->user         =$arr['user'];
        $this->charset      =$arr['charset'];
    }
    public function conn(){
        try{
            $string = $this->drive.'host='.$this->host . ';dbname=' . $this->db;
            $conn = new PDO($string, $this->user, $this->pass);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $conn->exec('SET CHARACTER SET ' . $this->charset);
        }catch (PDOException $err) { //error de conexion
            echo '*------------------------------------*';
            die('error en la conexion PDO: ' . $err->getMessage());
            echo 'line error: ' . $err->getLine();
            echo '*------------------------------------*';
        } catch (Exception $err) { //error en clase
            echo '*------------------------------------*';
            die('error en la conexion: ' . $err->getMessage());
            echo 'line error: ' . $err->getLine();
            echo '*------------------------------------*';
        }
        return $conn;
    }

}