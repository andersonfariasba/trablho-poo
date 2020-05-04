<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */
//

define("TXT_MENU_CONFIG", "Menu de Configurações");

//CÓDIGOS CADASTROS PADRÕES QUE NÃO PODEM SER EXCLUÍDOS
define("PAD_CAD_CLIENTE", 1); //Código Cliente Default
define("PAD_CAD_FORNECEDOR", 1); //Código Fornecedor Default
define("PAD_CAD_FILIAL", 1); //Código Filial Default
define("PAD_FUNC_ADM", 1); //Código Filial Default

define("PAD_PLANO_COMPRA", 1); //Código para plano de contas faturamento de compra
define("PAD_PLANO_CAIXA", 2); //Código para plano de contas de ajuste de caixa


define("CODIGO_ADMINISTRADOR", 1);
define("CODIGO_VELLORE", 2); //USUÁRIO VELLORE PARA CONFIGURAÇÕES
define("PERFIL_MASTER", 1);
define("PERFIL_CONTADOR", 6);
define("PERFIL_FINANCEIRO", 3);
define("PERFIL_COORDENADOR",2);
define("PERFIL_REQUISITANTE",4);
define("PERFIL_AUXILIAR",4);
define("PERFIL_VENDAS",5);

define("PERFIL_CONTROLADORIA",4);

//Encoding UTF-8
define("ENCOD_UTF",'UTF-8');

//TIPO CREDITO E DEBITO
define("OP_TIPO_CREDITO",3);
define("OP_TIPO_DEBITO",4);

//TIPOS DE ITENS TROCAS DE VENDAS
define("TROCA_ITEM_VENDIDO",0);
define("TROCA_ITEM_NOVO",1);

//TIPO DE MATERIAS E PRODUTOS
//estoque
define("PRODUTO",1);
define("TP_MATERIA_PRIMA",2);
define("TP_EMBALAGEM",3);
define("SERVICO",4);

//UNIDADE PORCENTAGEM DESCONTO
define("UNIDADE_PORCENTAGEM",1);
define("UNIDADE_UN",2);

//TRANSPORTADORA
define("GRUPO_TRANSPORTADORA",1);

//GRUPO CLIENTE ATACADO E VAREJO
define("CLIENTE_ATACADO",1);
define("CLIENTE_VAREJO",2);


//Tipo de Conta Pagar Compra 
define("CATEGORIA_COMPRA",1);

//Tipo de Conta Pagar Ajuste Caixa
define("AJUSTE_CAIXA",2);


//STATUS QUALIDADE COMPRA
define("ST_QUALI_ANALISE",0); //EM ABERTO
define("ST_QUALI_APROVADO",1);
define("ST_QUALI_REPROVADO",2);



//NOVOS STATUS DINAMICO PADRÃO
define("EM_ELABORACAO",1); //EM ABERTO
define("ST_EM_APROVACAO",2); //EM APROVAÇÃO
define("ST_APROVADO",3); //APROVADO
define("ST_APROVADO_PARCIAL",4); //APROVADO
define("ST_RECEBIDO",9); //APROVADO
define("ST_RECEBIDO_PARCIAL",8); //APROVADO



define("FORMA_PAG_DINHEIRO", 1);
define("FORMA_PAG_CREDITO", 3);
define("FORMA_PAG_DEBITO", 4);

define("FORMA_REC_DINHEIRO", 1);
define("FORMA_REC_CREDITO", 2);
define("FORMA_REC_DEBITO", 3);
define("FORMA_REC_PRAZO", 4);


define("TIPO_REC_VISTA", 0);
define("TIPO_REC_PARCELADO", 1);

define("DELETADO_FATURADO", 2); //CONTAS EM FATURAMENTO ANDAMENTO


define("TAXA_UNICA", 1);
define("TAXA_OPERADORA", 2);
define("TAXA_TABELA", 2);




define("DELETADO_SIM", 1);
define("CRIPTOGRAFIA", "xts19@L129");
define("DELETADO", 0);

//status padroes
define("ATIVO", 0);
define("BLOQUEADO", 1);
define("INATIVO", 3);

//TIPO DE EMPRESA
define("PESSOA_JURIDICA", 1);
define("PESSOA_FISICA", 2);

define("SOL_MANUAL", 0); //Codigo para solicitacao manual
define("SOL_IMPORT", 1); //Codigo para solicitacao importacao

//FORMAS DE PAGAMENTOS - TIPO DE CONTAS
define("FORMA_CONTA_PAGAR", 1);
define("FORMA_CONTA_RECEBER", 2);
define("FORMA_AMBOS", 3);





//status orcamento
define("ORC_PROCESSAMENTO",9);
define("ORC_ANDAMANETO",0);
define("ORC_APROVADO",1);

//Status Cotação
define("COTACAO_ANDAMENTO",0);
define("COTACAO_APROVADA",1);


//FINAL MENUS
define("FORMA_PRAZO",1);
define("FORMA_AVISTA",2);




//TIPOS DE EMPRESAS
define("CLIENTE",1);
define("FORNECEDOR", 2);



define("ORCAMENTO",1);
define("PEDIDO",2);
define("VENDA",2);



//TIPO RETIRADA MOVIMENTACAO
define("MOV_VENDA",1);
define("MOV_MANUAL",2);




//tipos de pedidos efaturamento
define("PROCESSAMENTO",0); //EM PROCESSAMENTO
define("ANDAMENTO",1); //EM ABERTO
define("FINALIZADO",2);
define("CANCELADO",3);
define("ENTREGUE",4);
define("FATURAMENTO",5);
define("APROVADO",6); //concluido



define("ABERTO",0); //nao autorizado
define("PAGO",1); //autorizado
define("CONCLUIDO",2); //concluido
define("FECHADO",3); //concluido
define("AGENDADO",4); //concluido



//Cod. finalizaÃ§Ã£o de pedido em deletado
define('PEDIDO_FINALIZADO',9);
define('PEDIDO_ABERTO',0);
define('PEDIDO_FATURADO',1);
define('PEDIDO_CANCELADO',6);




define("FRETE_EMPRESA",1);
define("FRETE_CLIENTE",2);

define("NAO",0);
define("SIM",1);

define("CONTAS_PAGAR",1);
define("CONTAS_RECEBER",2); //CONTAS LANÇADAS PELA VENDA
define("CONTAS_RECEBER_MANUAL",3); //CONTAS RECEBER MANUAL



define("CR_ANTECIPADO_SIM",0);
define("CR_ANTECIPADO_NAO",1);



//Tipo de Movimentacao
define("ADD_MOV", 1);
define("REMOVER_MOV", 2);

define("SAIDA",2);
define("ENTRADA",1);

//tipos de cartÃ£p de crÃ©dito
define("CARTAO_PARCELADO", 1);
define("CARTAO_VISTA", 2);



//formas de recebimentos
define("RECEB_DINHEIRO", 1); //USADA
define("RECEB_BOLETO", 2); 
define("RECEB_CHEQUE", 3); //USADA
define("RECEB_TRANSFERENCIA", 4); 
define("RECEB_DEPOSITO", 5);
define("RECEB_CARTAO_CREDITO",6); //USADA
define("RECEB_CARTAO_DEBITO",7); //USADA


//RELAÃ‡ÃƒO AOS MENUS

//PÃ�GINAS DO MENU - TEM QUE SER IGUAL AO CODIGO DA TABELA "ADM_MODULO_PAGINA"
//MENU DE CADASTRO
define("MENU_CADASTRO", 1);
define("MENU_CLIENTES", 2);
define("MENU_FORNECEDORES",3);
define("MENU_FUNCIONARIOS", 4);
define("MENU_CONTAS_BANCARIAS", 5);
define("MENU_RELATORIO_CADASTRO", 6);

//MENU DE PAGAMENTOS
define("MENU_PAGAMENTOS", 7);
define("MENU_NOVO_PAGAMENTO", 8);

//MENU DE RECEBIMENTOS
define("MENU_RECEBIMENTOS", 9);
define("MENU_NOVO_PEDIDO", 10);

//MENU DE ESTOQUE
define("MENU_ESTOQUE", 11);
define("MENU_CADASTRAR_PRODUTO", 12);

//MENU DE PEDIDOS
define("MENU_PEDIDOS", 13);
define("MENU_CADASTRAR_PEDIDO", 14);

//MENU DE CONFIGURAÃ‡Ã•ES
define("MENU_CONFIGURACOES", 15);
define("MENU_CATEGORIAS", 16);
define("MENU_UNIDADE_MEDIDA", 17);
define("MENU_CARGOS", 18);
define("MENU_FORMAS_PAGAMENTO", 19);
define("MENU_FILIAIS",20);

//MENU ACESSO
define("MENU_ACESSO", 21);
define("MENU_PERFIL", 22);
define("MENU_USUARIO", 23);


//CONST LOCAÇÕES

//STATUS DE ENTREGUE ITEM PEDIDO
define("LOC_ENTREGUE", 1);

//PERMISSOES MODULOS

//MÓDULOS
define("MOD_COMERCIAL", 1);
define("MOD_VENDAS", 2);
define("MOD_FINANCEIRO", 3);
define("MOD_CAIXA", 4);
define("MOD_ESTOQUE", 5);
define("MOD_COMPRA", 6);
define("MOD_RH", 7);
define("MOD_RELATORIO", 8);
define("MOD_CONFIGURACAO", 9);


//OPERACOES COMERCIAL
define("COM_CLIENTE_CADASTRAR", 1);
define("COM_CLIENTE_PESQUISAR", 2);
define("COM_CLIENTE_EDITAR", 3);
define("COM_CLIENTE_EXCLUIR", 4);
define("COM_CLIENTE_VISUALIZAR", 5);

define("COM_FORNECEDOR_CADASTRAR", 6);
define("COM_FORNECEDOR_PESQUISAR", 7);
define("COM_FORNECEDOR_EDITAR", 8);
define("COM_FORNECEDOR_EXCLUIR", 9);
define("COM_FORNECEDOR_VISUALIZAR", 10);
// FINAL COMERCIAL

// VENDAS E ORÇAMENTOS

//Vendas
define("COM_VENDA_CADASTRAR", 11);
define("COM_VENDA_EXCLUIR", 12);

//Orçamentos
define("COM_ORCAMENTO_CADASTRAR", 13);
define("COM_ORCAMENTO_EXCLUIR", 14);
// FINAL VENDAS E ORÇAMENTOS

//OPERACOES FINANCEIRO

//Contas Pagar
define("FIN_CP_CADASTRAR", 15);
define("FIN_CP_PESQUISAR", 16);
define("FIN_CP_EDITAR", 17);
define("FIN_CP_EXCLUIR", 18);
define("FIN_CP_VISUALIZAR", 19);

//Contas Receber
define("FIN_CR_CADASTRAR", 20);
define("FIN_CR_PESQUISAR", 21);
define("FIN_CR_EDITAR", 22);
define("FIN_CR_EXCLUIR", 23);
define("FIN_CR_VISUALIZAR", 24);

//Abertura de Caixa
define("CX_ABERTURA_CADASTRAR", 25);
define("CX_ABERTURA_PESQUISAR", 26);
define("CX_ABERTURA_EDITAR", 27);
define("CX_ABERTURA_EXCLUIR", 28);
define("CX_ABERTURA_VISUALIZAR", 29);

//Retirada de Caixa
define("CX_RETIRADA_CADASTRAR",30);
define("CX_RETIRADA_PESQUISAR", 31);
define("CX_RETIRADA_EDITAR", 32);
define("CX_RETIRADA_EXCLUIR", 33);
define("CX_RETIRADA_VISUALIZAR", 34);

//Reforço Caixa
define("CX_REFORCO_CADASTRAR",35);
define("CX_REFORCO_PESQUISAR", 36);
define("CX_REFORCO_EDITAR", 37);
define("CX_REFORCO_EXCLUIR", 38);
define("CX_REFORCO_VISUALIZAR", 39);


//ESTOQUE

//PRODUTOS
define("PRODUTO_CADASTRAR",40);
define("PRODUTO_PESQUISAR", 41);
define("PRODUTO_EDITAR", 42);
define("PRODUTO_EXCLUIR", 43);
define("PRODUTO_VISUALIZAR", 44);
define("PRODUTO_MOVIMENTAR", 45);

//COMPRAS
define("COMPRA_CADASTRAR",46);
define("COMPRA_PESQUISAR", 47);
define("COMPRA_EDITAR", 48);
define("COMPRA_EXCLUIR", 49);
define("COMPRA_VISUALIZAR", 50);
define("COMPRA_FATURAR", 51);


//FUNCIONARIO
define("FUNCIONARIO_CADASTRAR",52);
define("FUNCIONARIO_PESQUISAR", 53);
define("FUNCIONARIO_EDITAR", 54);
define("FUNCIONARIO_EXCLUIR", 55);
define("FUNCIONARIO_VISUALIZAR", 56);

//RELATÓRIOS
define("RELATORIO_PESQUISAR",57);

//CONFIGURAÇÕES
define("CONFIGURACAO_PESQUISAR",58);
define("EMPRESA_VISUALIZAR",59);
define("EMPRESA_EDITAR",60);







