<?php

class Acesso_usuariosBusiness extends CI_Model {

  public function validar_login($login,$senha){
    try {
      $userDao = $this->Factory->createDao("acesso_usuarios");
      $userDao->connect();
      $objUser = $userDao->getByLoginSenha($login,$senha);
      $userDao->disconnect();

      if($objUser!=null){
        $dadosSessao = $objUser->toArray();
        //Grava os dados na sessão
        $dadosSessao['login'] = $objUser->getLogin();
        //Flag logado
        $dadosSessao['logged_in'] = true;
        $this->session->set_userdata($dadosSessao);
        return TRUE;
      }
        return FALSE;
    } 
    catch (Exception $exc) {
      throw $exc;
    }
  }

  public function cadastrar($dados){
        try {

            $objUser = $this->Factory->createPojo("acesso_usuarios",$dados);
            $userDao = $this->Factory->createDao("acesso_usuarios");
            $userDao->connect();
            $cod_user = $userDao->cadastrar($objUser);
        $userDao->disconnect();
        return $cod_user;
             } 
        
        catch (Exception $exc) {
          throw $exc;
        }
    }

    //LISTA
    public function filtro($dados){
      try {
        
          $userDao = $this->Factory->createDao("acesso_usuarios");
            $userDao->connect();
            $listUser = $userDao->filtro($dados);
            $userDao->disconnect();
            return $listUser;

            } catch (Exception $exc) {
                throw $exc;
            }
    }

    //VISUALIZA
    public function visualizar($id_user){
      try {
          $userDao = $this->Factory->createDao("acesso_usuarios");
            $userDao->connect();
            $objUser = $userDao->visualizar($id_user);
            $userDao->disconnect();
            return $objUser;
                
            } catch (Exception $exc) {
                throw $exc;
            }
    }
    
    //EDITAR
    public function editar($dados){
      try {
            $userDao = $this->Factory->createDao("acesso_usuarios");
            $userDao->connect();
            $userDao->alterar($dados);
            $userDao->disconnect();
                
            } catch (Exception $exc) {
                throw $exc;
            }
    }
    
    //DELETE
    public function excluir($id_usuario){
      try {
          $userDao = $this->Factory->createDao("acesso_usuarios");
            $userDao->connect();
            $userDao->excluir($id_usuario);
            $userDao->disconnect();
      } catch (Exception $exc) {
                throw $exc;
            }
    }
    





}

?>
