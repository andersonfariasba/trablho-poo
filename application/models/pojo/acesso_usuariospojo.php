<?php
class Acesso_usuariosPojo extends CI_Model {

    private $id_usuario;
    private $login;
    private $senha;

    public function getId_usuario(){
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function populate($dados){
        if(isset($dados["id_usuario"]))
            $this->id_usuario = $dados["id_usuario"];

        if(isset($dados["login"]))
            $this->login = $dados["login"];

        if(isset($dados["senha"]))
            $this->senha = $dados["senha"];
    }


    public function toArray(){
        $inArray = array();
        foreach(get_object_vars($this) as $attribute => $value){
            if(is_float($this->$attribute)){
                $inArray[$attribute] = number_format($this->$attribute,4,".","");
            }
            else{
                $inArray[$attribute] = $this->$attribute;
            }
        }
        
        return $inArray;
    }
}
?>
