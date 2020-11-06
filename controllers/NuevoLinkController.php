<?php 

namespace controllers;

use models\LinksModel as LinksModel;

require_once("../models/LinksModel.php");
class NuevoLinkController{
    public $nombre;
    public $url;

    public function __construct()
    {
        $this->nombre = $_POST['nombre'];
        $this->url = $_POST['url'];
    }

    public function crear(){
        session_start();
        if($this->nombre=="" || $this->url==""){
            $_SESSION['error']="Complete los campos";
            header("Location: ../views/nuevo_link.php");
            return;
        }
        $model = new LinksModel;
        $user = $_SESSION['usuario'];
        $data =['nombre'=>$this->nombre,'link'=>$this->url, "email"=>$user['email']];
        $count = $model->insertarLink($data);
        if($count==1){
            $_SESSION['respuesta']="Link creado con exito";
        }else{
            $_SESSION['error']="Error en la base de datos";
        }
        header("Location: ../views/nuevo_link.php");
    }
}

$obj = new NuevoLinkController();
$obj->crear();