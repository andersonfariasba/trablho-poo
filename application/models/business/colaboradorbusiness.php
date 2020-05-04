<?php
class ColaboradorBusiness extends CI_Model {

  //Cadastrar
  public function cadastrar($dados){
    try {
      $obj = $this->Factory->createPojo("colaborador",$dados);
      $cadastroDao = $this->Factory->createDao("colaborador");
      $cadastroDao->connect();
      $id = $cadastroDao->cadastrar($obj);
      $cadastroDao->disconnect();
   
      return $id;
    } 
    catch (Exception $exc) {
      throw $exc;
    }
  }

  //Listar
  public function filtro($dados=null){
    try {
      $cadastroDao = $this->Factory->createDao("colaborador");
      $cadastroDao->connect();
      $list = $cadastroDao->filtro($dados);
      $cadastroDao->disconnect();
    
      return $list;
  
    } catch (Exception $exc) {
      throw $exc;
    }
  }


  //Visualizar
  public function visualizar($id_colaborador){
    try {
      $cadastroDao = $this->Factory->createDao("colaborador");
      $cadastroDao->connect();
      $obj = $cadastroDao->visualizar($id_colaborador);
      $cadastroDao->disconnect();
      return $obj;

    } catch (Exception $exc) {
      throw $exc;
    }
  }


  //Editar
  public function editar($dados){
    try {
      $cadastroDao = $this->Factory->createDao("colaborador");
      $cadastroDao->connect();
      $cadastroDao->alterar($dados);
      $cadastroDao->disconnect();
    
    } catch (Exception $exc) {
      throw $exc;
    }
  }

  //Exclusão
  public function excluir($id_colaborador){
    try {
      $cadastroDao = $this->Factory->createDao("colaborador");
      $cadastroDao->connect();
      $cadastroDao->excluir($id_colaborador);
      $cadastroDao->disconnect();
    } catch (Exception $exc) {
      throw $exc;
    }
  }
}

?>
