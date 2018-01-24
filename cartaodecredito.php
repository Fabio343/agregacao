<?php

//  fazendo associação entre duas classe
require 'lib/Carbon.php';
use Carbon\Carbon;

class cartao
{
  public $numero;
  public $validade;
  public $cliente;
}

class cliente
{
  public $nome;
  public $email;
  public $cartao;
}


 $cartao1=new cartao;
 $cartao1->numero=123;
 $cartao1->validade=Carbon::createFromDate(2018, 12, 12, 'America/Sao_Paulo');


 $cliente1=new cliente();
 $cliente1->nome="Rafael Cosentino";
 $cliente1->email="rafael@email.com";
 $cliente1->cartao=$cartao1;
 $cartao1->cliente=$cliente1;


 echo "Dados do  cartão do cliente 1 numero:" . $cliente1->cartao->numero . PHP_EOL;
  echo "Dados do  cartão do cliente 1 nome:" . $cartao1->cliente->nome . PHP_EOL;

 ?>
