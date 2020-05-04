<?php
class CargoPojo extends CI_Model {

    private $id_cargo;
    private $cargo;

    public function getId_cargo(){
        return $this->id_cargo;
    }

    public function setId_cargo($id_cargo){
        $this->id_cargo = $id_cargo;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function populate($dados){
       
        if(isset($dados["id_cargo"]))
            $this->id_cargo = $dados["id_cargo"];

        if(isset($dados["cargo"]))
            $this->cargo = $dados["cargo"];
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
        
        return $inArray;
    }
}
?>
