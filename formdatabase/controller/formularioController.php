<?php
require_once("./model/formularioModel.php");
class formularioController{
    private $formulario;
    public function __construct(){
        $this->formulario = new Formulario();
    }
    
    static function index(){        
        require_once("./view/formularioView.php");
    }

    static function guardar(){
        
        $name= $_REQUEST['name'];
        $lastname = $_REQUEST['lastname'];
        $phone = $_REQUEST['phone'];
        $adress= $_REQUEST['adress'];
        $email = $_REQUEST['email'];
        $user = $_REQUEST['user'];
        $password = $_REQUEST['password'];
        $password = hash('sha512',$password);
        $data = "'".$name."','".$lastname."','".$phone."','".$adress."','".$email."','".$user."','".$password."'";
        $users = new Formulario();
        $dato = $users->insertar("users",$data);
        echo '<script>
        alert("Usuario registrado con éxito.");
        window.location = "http://localhost/formdatabase";
  </script>      
';

    }

}