<?php

class CargoDao extends CI_Model {
    
    public function connect(){
        $this->load->database();
    }

    public function disconnect(){
        $this->db->close();
    }


    public function cadastrar($obj){
        $sucess = $this->db->insert("cargo",$obj->toArray());
        if(!$sucess){
            throw new Exception($this->db->_error_message(),$this->db->_error_number());
        }

        $id_cargo = $this->db->insert_id();

        return $id_cargo;
    }
    
    
    public function filtro($dados) {
     	
    	$this->db->from("cargo");
    	$this->db->order_by("cargo");
    	
    	if ($dados["cargo"] != NULL):
    		$this->db->like("cargo", $dados["cargo"]);
    	endif;
         
        $query = $this->db->get();
    
    	if ($query == FALSE) {
    		throw new Exception($this->db->_error_message(), $this->db->_error_number());
    	}
    
    	$listcargo = array();
    
    	if ($query != NULL) {
    		foreach ($query->result_array() as $dados) {
    
    			$listcargo[] = $this->visualizar($dados["id_cargo"]);
    		}
    	}
    	return $listcargo;
    }

    public function visualizar($id_cargo){
    	$this->db->from("cargo");
    	$this->db->where("id_cargo",$id_cargo);
      	$query = $this->db->get();
    
    	if($query==FALSE){
    		throw new Exception($this->db->_error_message(),$this->db->_error_number());
    	}

    	$objcargo = NULL;
    
    	if($query->num_rows()>0){
    		$dados = $query->row_array();
    		$objcargo = $this->Factory->createPojo("cargo",$dados);
    	}
    
    	return $objcargo;
    }
    
    
    public function alterar($dados){
    	$this->db->where('id_cargo',$dados['id_cargo']);
    	$sucess = $this->db->update("cargo",$dados);
    	
    	if(!$sucess){
    		throw new Exception($this->db->_error_message(),  $this->db->_error_number());
    	}
    }
    
    
    public function excluir($id_cargo){
        $this->db->where('id_cargo',$id_cargo);
        $sucess = $this->db->delete("cargo");
         if(!$sucess){
             throw new Exception($this->db->_error_message(),$this->db->_error_number());
         }
    }
}
?>
