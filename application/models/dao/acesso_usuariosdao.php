<?php

class Acesso_usuariosDao extends CI_Model {
    

    public function connect(){
        $this->load->database();
    }

    public function disconnect(){
        $this->db->close();
    }

    //visualiza os dados referente a um acesso_usuarios.
    public function getByLoginSenha($login,$senha){
        $this->db->from("acesso_usuarios"); //tabela
        $this->db->where("login",$login); //coluna e o código passado como parametro
        $this->db->where("senha",md5($senha.CRIPTOGRAFIA));
        
        $query = $this->db->get();

        if($query==FALSE){
            throw new Exception($this->db->_error_message(),$this->db->_error_number());
        }
        
        $objUser = NULL;

        if($query->num_rows()>0){
            //pega os dados
            $dados = $query->row_array();
            $objUser = $this->Factory->createPojo("acesso_usuarios",$dados);
        }

        return $objUser;
    }

    public function cadastrar($obj){
        $sucess = $this->db->insert("acesso_usuarios",$obj->toArray());
        if(!$sucess){
            throw new Exception($this->db->_error_message(),$this->db->_error_number());
        }

        $id_acesso_usuarios = $this->db->insert_id();

        return $id_acesso_usuarios;
    }
    
    
    public function filtro($dados) {
        
        $this->db->from("acesso_usuarios");
        $this->db->order_by("login");
        
        if ($dados["login"] != NULL):
            $this->db->like("login", $dados["login"]);
        endif;
         
        $query = $this->db->get();
    
        if ($query == FALSE) {
            throw new Exception($this->db->_error_message(), $this->db->_error_number());
        }
    
        $listacesso_usuarios = array();
    
        if ($query != NULL) {
            foreach ($query->result_array() as $dados) {
    
                $listacesso_usuarios[] = $this->visualizar($dados["id_usuario"]);
            }
        }
        return $listacesso_usuarios;
    }

    public function visualizar($id_usuario){
        $this->db->from("acesso_usuarios");
        $this->db->where("id_usuario",$id_usuario);
        $query = $this->db->get();
    
        if($query==FALSE){
            throw new Exception($this->db->_error_message(),$this->db->_error_number());
        }

        $objacesso_usuarios = NULL;
    
        if($query->num_rows()>0){
            $dados = $query->row_array();
            $objacesso_usuarios = $this->Factory->createPojo("acesso_usuarios",$dados);
        }
    
        return $objacesso_usuarios;
    }
    
    
    public function alterar($dados){
        $this->db->where('id_usuario',$dados['id_usuario']);
        $sucess = $this->db->update("acesso_usuarios",$dados);
        
        if(!$sucess){
            throw new Exception($this->db->_error_message(),  $this->db->_error_number());
        }
    }
    
    
    public function excluir($id_usuario){
        $this->db->where('id_usuario',$id_usuario);
        $sucess = $this->db->delete("acesso_usuarios");
         if(!$sucess){
             throw new Exception($this->db->_error_message(),$this->db->_error_number());
         }
    }
}
?>
