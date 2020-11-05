<?php 
namespace controllers;

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
    }
}
?>