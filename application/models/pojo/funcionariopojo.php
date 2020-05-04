<?php

class FuncionarioPojo extends Pessoa {

    private $matricula;
    private $data_admissao;
    private $salario;

     public function __construct($nome, $cpf)
    {
        parent::__construct($nome, $cpf);
       
    }


    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getData_admissao(){
        return $this->data_admissao;
    }

    public function setData_admissao($data_admissao){
        $this->data_admissao = $data_admissao;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
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
