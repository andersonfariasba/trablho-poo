<?php
/* Classe Controller: cargo
 * Autor: Anderson Farias
*/

class Cargo extends MY_Controller {

  //Validação dos dados para as ações de Cadastrar e Editar
  // Chamar no inicio dos metodos de cadastrar ou editar
  private function Rules(){
    //Informa o campo a ser validado conforme parametros:
    //1º Nome do campo, 2º Nome a ser exibido na mensagem padrão, 3º Tipo de Validação 
    $this->form_validation->set_rules('cargo','Cargo','required');
    //Padrão para o layot da mensagem de erro
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissible fade in" role="alert"  id="msgOk">
    <strong><i class="fa fa-check"></i></strong> ', '</div>');
  }

  //Ação ao chamar a url: cargo/cadastrar
  //$msg = caso seja diferente de null mostrar a mensagem de sucesso na View de cadastrar
  public function cadastrar($msg=null){
    //Carrega as biblitecas de form, e url (links) do codeigniter que serão utilizadas na View
    $this->load->helper(array('form','url'));
    //Carrega a bibliteca de Validação do Codeigniter padrão
    $this->load->library('form_validation');
    // Chama o metodo de Validação criado no inicio do controller determinando quais campos
    // precisam ser validados
    $this->Rules();
    
    //Passa a variável de mensagem de sucesso para view
    $info['msg'] = $msg;

    //Tela de cadastrar inicial
    if($this->form_validation->run()==FALSE){
         
      // Chama a view de cadastrar
      $content = $this->load->view("cargo/cadastrar",$info,TRUE);
      $this->loadPage($content);   
    }
    
    // Caso o formulario seja submetido (Ação no botão de Salvar)
    else{
    
      // Pega todos os dados dos campos referente ao formulário
      $dados = $this->input->post();

      $cadastroBusiness = $this->Factory->createBusiness("cargo");
      $id = $cadastroBusiness->cadastrar($dados);
      
      // Mensagem de Sucesso como true para ser exibido na view
      $msg = true;
      
      // Redireciona para tela de cadastrar incial com a mensagem de sucesso setado como true
      // Na tela de cadastro que está a mensagem de sucesso 
      redirect('cargo/cadastrar/'.$msg);
    }
  }


  //Listagem
  //Ação ao chamar a url: cargo/filtro
  public function filtro(){
    try {
  
      $this->load->helper(array('form','url'));

      // Tela inicial da listagem de dados
      if ($this->input->post() == NULL) {

        // Chama o padrão Business que possui o acesso a base de dados 
        $cadastroBusiness = $this->Factory->createBusiness("cargo");
        // Como não possui parâmetro o metodo filtro ele passa todos os registros
        $list = $cadastroBusiness->filtro(null);
        
        //Armazena os dados da listagem para ser exibido na view de pesquisa
        $info['list'] = $list;

        $content = $this->load->view("cargo/filtro",$info,TRUE);
        $this->loadPage($content);
      }

      // Caso seja solicitado a ação de pesquisar pelo filtro
      else{

      // Pega os dados do campo do formulário de pesquisa
      $dados = $this->input->post();

      // Chama o padrão Business que possui o acesso a base de dados
      $cadastroBusiness = $this->Factory->createBusiness("cargo");
      // Observar que o parâmetro $dados está sendo enviado para listar apenas 
      // os dados referente ao desejado
      $list = $cadastroBusiness->filtro($dados);
      
      //Armazena os dados da listagem para ser exibido na view de pesquisa
      $info['list'] = $list;

      // Chama a view de cadastrar
      $content = $this->load->view("cargo/filtro",$info,TRUE);
      $this->loadPage($content);	

      }
    } catch (Exception $exc){
  
        $this->loadError($ex);  
    }
  }

   //Ação ao chamar a url: cargo/editar/$id
  //$msg = caso seja diferente de null mostrar a mensagem de sucesso na View de editar
  public function editar($id_cargo,$msg=null){
     //Carrega as biblitecas de form, e url (links) do codeigniter que serão utilizadas na View
    $this->load->helper(array('form','url'));
    //Carrega a bibliteca de Validação do Codeigniter padrão
    $this->load->library('form_validation');
    // Chama o metodo de Validação criado no inicio do controller determinando quais campos
    // precisam ser validados
    $this->Rules();

     //Tela de Editar inicial
    if($this->form_validation->run()==FALSE){

      //Dados do cargo
      $cadastroBusiness = $this->Factory->createBusiness("cargo");
      $obj = $cadastroBusiness->visualizar($id_cargo);
      $info["obj"] = $obj;
      
      $info['msg'] = $msg; //Null, pois está na tela inicial e não teve ação de confirmar a edição 

       // Chama a view de Editar
      $content = $this->load->view("cargo/editar",$info,TRUE);
      $this->loadPage($content);
    }

     // Caso o formulario seja submetido (Ação no botão de Salvar)
    else{
  
      // Pega todos os dados dos campos referente ao formulário
      $dados = $this->input->post();
      
      $cargoBusiness = $this->Factory->createBusiness("cargo");
      $cargo = $cargoBusiness->editar($dados);
      
      // Mensagem de Sucesso como true para ser exibido na view
      $msg = true;
      
      // Redireciona para tela de cadastrar inicial com a mensagem de sucesso setado como true
      // Na tela de cadastro que está a mensagem de sucesso 
      redirect('cargo/editar/'.$dados['id_cargo'].'/'.$msg);
    }
  }

  //Exclusão
  //Ação ao chamar a url: cargo/excluir/$id
  public function excluir($id_cargo){
    //Carrega as biblitecas de form, e url (links) do codeigniter que serão utilizadas na View
    $this->load->helper(array('form','url'));
    
    //Chama o metodo de excluir do padrão bussiness
    $cadastroBusiness = $this->Factory->createBusiness("cargo");
    $cadastroBusiness->excluir($id_cargo);
    
    //redireciona para o filtro de pesquisa após a exclusão
    redirect("cargo/filtro");
  }
}

?>
