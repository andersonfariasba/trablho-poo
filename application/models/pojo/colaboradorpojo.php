<?php
class ColaboradorPojo extends CI_Model {

    private $id_colaborador;
    private $id_cargo;
    private $nome;
    private $cpf;
    private $salario;

    private $cargo; 

    public function getId_colaborador(){
        return $this->id_colaborador;
    }

    public function setId_colaborador($id_colaborador){
        $this->id_colaborador = $id_colaborador;
    }

    public function getId_cargo(){
        return $this->id_cargo;
    }

    public function setId_cargo($id_cargo){
        $this->id_cargo = $id_cargo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function populate($dados){
        if(isset($dados["id_colaborador"]))
            $this->id_colaborador = $dados["id_colaborador"];

        if(isset($dados["id_cargo"]))
            $this->id_cargo = $dados["id_cargo"];

        if(isset($dados["nome"]))
            $this->nome = $dados["nome"];

        if(isset($dados["cpf"]))
            $this->cpf = $dados["cpf"];

          if(isset($dados["salario"]))
            $this->salario = $dados["salario"];
    }


    public function toArray(){
        $inArray = array();
        foreach(get_object_vars($this) as $attribute => $value){
            if(is_float($this->$attribute)){
                $inArray[$attribute] = number_format($this->$attribute,4,".","");
            }
            else
            {
                $inArray[$attribute] = $this->$attribute;
            }
        }

        unset($inArray["cargo"]);
        return $inArray;
    }
}
?>
