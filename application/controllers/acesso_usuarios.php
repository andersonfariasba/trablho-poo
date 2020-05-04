<?php
/* Classe(controller): Usuários
 * Autor: Anderson Farias
 * Última atualização: 25/06/2015
 * Contato: andersonjfarias@yahoo.com.br
 */

class Acesso_usuarios extends MY_Controller {
	
    //VALIDA��O
    private function Rules(){
        $this->form_validation->set_rules('login','Login','required');
        $this->form_validation->set_rules('senha','Senha','required');
        
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade in" role="alert"  id="msgOk">
<strong><i class="fa fa-check"></i></strong> ', '</div>');
        
    }
    
    //CADASTRA
    public function cadastrar($msg=null){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->Rules();
        
        $info['msg'] = $msg;
        
        if($this->form_validation->run()==FALSE){
           
            $content = $this->load->view("acesso_usuarios/cadastrar",$info,TRUE);
            $this->loadPage($content);
        }
        else{
         
         $dados = $this->input->post();
        
         $dados["senha"] = md5($dados["senha"].CRIPTOGRAFIA);
                  
         $userBusiness = $this->Factory->createBusiness("acesso_usuarios");
         $cod_user = $userBusiness->cadastrar($dados);
         $msg = true;
         redirect('acesso_usuarios/cadastrar/'.$msg);
        }

    }

    //LISTAGEM
    public function filtro(){
        try {
            $this->load->helper(array('form','url'));
            
            if ($this->input->post() == NULL) {
            
            $userBusiness = $this->Factory->createBusiness("acesso_usuarios");
            $listUser = $userBusiness->filtro(null);
            $info['listUser'] = $listUser;

            
            $content = $this->load->view("acesso_usuarios/filtro",$info,TRUE);
            $this->loadPage($content);

            }else{
            
            $dados = $this->input->post();
            
            $userBusiness = $this->Factory->createBusiness("acesso_usuarios");
            $listUser = $userBusiness->filtro($dados);
            $info['listUser'] = $listUser;

  
            $content = $this->load->view("acesso_usuarios/filtro",$info,TRUE);
            $this->loadPage($content);	
            	
            }
            
          } catch (Exception $exc) {
            $this->loadError($ex);
        }
    }
    
    //VISUALIZAÇÃO
    public function visualizar($id_user){
          try {
              $this->load->helper(array('form','url'));
              
              $userBusiness = $this->Factory->createBusiness("acesso_usuarios");
              $info["objUser"] = $userBusiness->visualizar($id_user);
              
              $content = $this->load->view("acesso_usuarios/visualizar",$info,TRUE);
              $this->loadPage($content);

          } catch (Exception $exc) {
              echo $exc->getTraceAsString();
          }

      }

      //EDIÇÃO
      public function editar($id_usuario,$msg=null){
          $this->load->helper(array('form','url'));
          $this->load->library('form_validation');
          
          $this->Rules();
          
          if($this->form_validation->run()==FALSE){
              
              //DADOS USUÁRIO
              $userBusiness = $this->Factory->createBusiness("acesso_usuarios");
              $objUser = $userBusiness->visualizar($id_usuario);
              $info["objUser"] = $objUser;
              $info['msg'] = $msg;
            
                            
              $content = $this->load->view("acesso_usuarios/editar",$info,TRUE);
              $this->loadPage($content);
              
           }
           
           else{

            ini_set('display_errors',1);
  ini_set('display_startup_erros',1);
  error_reporting(E_ALL);


           	$dados = $this->input->post();
           	$userBusiness = $this->Factory->createBusiness("acesso_usuarios");
               // DEPOIS FAZER UMA MELHOR VALIDAÇÃO
                if($dados['nova_senha']!=null){
                  $dados["senha"] = md5($dados["nova_senha"].CRIPTOGRAFIA);
                }

                unset($dados['nova_senha']);
                
                
                $cod_user = $userBusiness->editar($dados);
                $msg = true;
                
           	redirect('acesso_usuarios/editar/'.$dados['id_usuario'].'/'.$msg);
           }
      }

      //EXCLUSÃO
      public function excluir($id_usuario){
          $this->load->helper(array('form','url'));

          $userBusiness = $this->Factory->createBusiness("acesso_usuarios");
          $userBusiness->excluir($id_usuario);
          redirect("acesso_usuarios/filtro");
      }

      

      
      
}
?>
