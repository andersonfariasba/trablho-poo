<?php

class DiretoriaPojo extends Funcionario {

    private $bonus;
    private $plano_especial;

    public function __construct($nome, $cpf)
    {
        parent::__construct($nome, $cpf);
       
    }

    public function getBonus(){
        return $this->bonus;
    }

    public function setBonus($bonus){
        $this->bonus = $bonus;
    }

    public function getPlano_especial(){
        return $this->plano_especial;
    }

    public function setPlano_especial($plano_especial){
        $this->plano_especial = $plano_especial;
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
