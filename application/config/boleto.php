<?php
/**
 * CodeIgniter Boleto
 *
 * @package    CodeIgniter Boleto
 * @author     Natan Felles
 * @link       https://github.com/natanfelles/codeigniter-boleto
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 | -------------------------------------------------------------------
 | PADRÃO
 | -------------------------------------------------------------------
 | TRUE = Usar as configurações desse arquivo
 | FALSE = Não usar as configurações desse arquivo
*/
$config['boleto']['padrao'] = TRUE;

/*
 | -------------------------------------------------------------------
 | BANCO
 | -------------------------------------------------------------------
 | bancoob = Banco Cooperativo do Brasil S/A
 | banespa = Banco do Estado de São Paulo
 | banestes =  Banco do Estado do Espírito Santo
 | bb = Banco do Brasil
 | besc = Banco do Estado de Santa Catarina
 | bradesco = Bradesco
 | cef = Caixa Econômica Federal
 | cef_sigcb = Caixa Econômica Federal SIGCB
 | cef_sinco = Caixa Econômica Federal SINCO
 | hsbc = HSBC Bank Brasil
 | itau = Itaú Unibanco
 | nossacaixa = Banco Nossa Caixa
 | real = Banco Real
 | santander_banespa = Santander Banespa
 | sicredi = Banco Cooperativo Sicredi - BANSICREDI
 | sofisa = Banco Sofisa
 | sudameris = Banco Sudameris
 | unibanco = Unibanco
 */
$config['boleto']['banco'] = 'cef';

/*
 | -------------------------------------------------------------------
 | CEDENTE
 | -------------------------------------------------------------------
 */
$config['boleto']['cedente'] = array(
	'nome'    => 'Dados da Empresa',
	'cpf_cnpj'    => '000111222-33',
	'agencia' => '1234-8',
	'conta'  => '56789-10',
	'conta_cedente'  => '987654-5',
	'carteira'  => '5',
	'nosso_numero'  => '12345678',
	'endereco' => 'Av. Tancredo Neves, 755',
	'cidade' => 'Salvador',
	'uf' => 'BA',
);

/*
 | -------------------------------------------------------------------
 | DEMONSTRATIVO
 | -------------------------------------------------------------------
 */
$config['boleto']['demonstrativo'] = array(
	'linha1' => 'Pagamento de serviços de desenvolvimento web',
	'linha2' => 'Taxa bancária: R$ ',
	'linha3' => 'CodeIgniter Boleto - https://github.com/natanfelles/codeigniter-boleto',
);

/*
 | -------------------------------------------------------------------
 | INSTRUÇÕES
 | -------------------------------------------------------------------
 */
$config['boleto']['instrucoes'] = array(
	'linha1' => '<br>- Sr. Caixa, cobrar multa de 5% após o vencimento',
	'linha2' => '- Receber até 5 dias após o vencimento',
	'linha3' => '- Em caso de dúvidas entre em contato conosco: natanfelles@gmail.com',
	'linha4' => '- Desenvolvido por Natan Felles - www.natanfelles.github.io',
);

/*
 | -------------------------------------------------------------------
 | LOCAL DAS IMAGENS
 | -------------------------------------------------------------------
 */
$config['boleto']['imagens'] = 'assets/img/boleto';
