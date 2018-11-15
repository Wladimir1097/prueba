<?php

class Conexion {

    private $servidor;
    private $usuario;
    private $clave;
    private $baseDatos;
    private $conn = null;
    
    public function __construct() {
        try {
            $this->servidor = 'localhost';
            $this->usuario = 'root';
            $this->clave = '';
            $this->baseDatos = 'bdempleado';
            $this->conn = new mysqli($this->servidor, $this->usuario, $this->clave, $this->baseDatos);
            $this->conn->set_charset("SET NAME 'utf8';"); //caracteres
            if ($this->conn->connect_error) {
                die("error en la conexion: " . $this->conn->connect_error . "-" . $this->conn->connect_errno);
            }
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
    
    public function getConn(){
        return $this->conn;
    }
}