<?php

class ColaboradorDao extends CI_Model {
    

    public function connect(){
        $this->load->database();
    }

    public function disconnect(){
        $this->db->close();
    }


    public function cadastrar($objUser){
        $sucess = $this->db->insert("colaborador",$objUser->toArray());
        if(!$sucess){
            throw new Exception($this->db->_error_message(),$this->db->_error_number());
        }

        $id_colaborador = $this->db->insert_id();

        return $id_colaborador;
    }
    
    
    public function filtro($dados) {
     	
    	$this->db->from("colaborador");
    	$this->db->order_by("nome");
    	
    	if ($dados["nome"] != NULL):
    		$this->db->like("nome", $dados["nome"]);
    	endif;
         
        $query = $this->db->get();
    
    	if ($query == FALSE) {
    		throw new Exception($this->db->_error_message(), $this->db->_error_number());
    	}
    
    	$listColaborador = array();
    
    	if ($query != NULL) {
    		foreach ($query->result_array() as $dados) {
    
    			$listColaborador[] = $this->visualizar($dados["id_colaborador"]);
    		}
    	}
    	return $listColaborador;
    }

    public function visualizar($id_colaborador){
    	$this->db->from("colaborador");
    	$this->db->where("id_colaborador",$id_colaborador);
      	$query = $this->db->get();
    
    	if($query==FALSE){
    		throw new Exception($this->db->_error_message(),$this->db->_error_number());
    	}

    	$objColaborador = NULL;
    
    	if($query->num_rows()>0){
    		$dados = $query->row_array();
    		$objColaborador = $this->Factory->createPojo("colaborador",$dados);
                
                $cargoBusiness = $this->Factory->createBusiness("cargo");
                $objCargo = $cargoBusiness->visualizar($objColaborador->getId_cargo());
                $objColaborador->setCargo($objCargo);    
    	}
    
    	return $objColaborador;
    }
    
    
    public function alterar($dados){
    	$this->db->where('id_colaborador',$dados['id_colaborador']);
    	$sucess = $this->db->update("colaborador",$dados);
    	
    	if(!$sucess){
    		throw new Exception($this->db->_error_message(),  $this->db->_error_number());
    	}
    }
    
    
    public function excluir($id_colaborador){
        $this->db->where('id_colaborador',$id_colaborador);
        $sucess = $this->db->delete("colaborador");
         if(!$sucess){
             throw new Exception($this->db->_error_message(),$this->db->_error_number());
         }
    }
}
?>
