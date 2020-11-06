<?php 
namespace controllers;

use models\UsuarioModel as UsuarioModel;

require_once("../models/UsuarioModel.php");

class RegistroController{
    public $email;
    public $nombre;
    public $clave;

    public function __construct()
    {
        $this->email = $_POST['email'];
        $this->nombre = $_POST['nombre'];
        $this->clave = $_POST['clave'];
    }

    public function registrar()
    {
        session_start();
        if($this->email == "" || $this->nombre=="" || $this->clave==""){
            $_SESSION['error'] = "Complete la informacion";
            header("Location: ../registro.php");
            return;
        }
        $modelo = new UsuarioModel();
        $data = ['email'=>$this->email, 'nombre'=>$this->nombre, 'clave'=>$this->clave];
        $count = $modelo->insertarUsuario($data);

        if($count == 1){
            $_SESSION['respuesta'] = "Usuario Creado Con Exito";
        }else{
            $_SESSION['error'] = "Hubo un error en la base de datos";
        }
        header("Location: ../registro.php");
    }
}

$obj = new RegistroController();
$obj->registrar();
?>