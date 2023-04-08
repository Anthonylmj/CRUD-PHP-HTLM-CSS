<?php

class Formulario{
    private $Modelo;
    private $db;    
    private $datos;    
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=127.0.0.1;dbname=crudweb',"anthony","137946285");
    }
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla."(name, lastname, phone, adress, email, user, password) values(". $data .")";
        echo $consulta;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
     }

}