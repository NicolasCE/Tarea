<?php 

namespace models;

require_once("Conexion.php");

class LinksModel{
    public function insertarLink($data){
        {
        $stm = Conexion::conector()->prepare("INSERT INTO links VALUES(NULL,:A,:B,:C)");
        $stm->bindParam(":A",$data['nombre']);
        $stm->bindParam(":B",$data['link']);
        $stm->bindParam(":C",($data['email']));
        return $stm->execute();
        }
    }

    public function getAllLinksByEmail($email){
        $stm = Conexion::conector()->prepare("SELECT * FROM links WHERE emailFK=:A");
        $stm->bindParam(":A", $email);
        $stm->execute();
        return $stm->fetchAll(\PDO::FETCH_ASSOC);
    }
}


?>