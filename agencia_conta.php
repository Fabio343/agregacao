<?php

/**
 *
 */
class agencia
{
public $agencia;
public $conta;
}

class conta
{
public $numero;
public $saldo;
public $limite;
}


$conta=new conta();
$conta->numero=173;
$conta->saldo=1000;
$conta->limite=500;

$agencia=new agencia();
$agencia->agencia=178;
$agencia->conta=$conta;

echo "numero da conta:" . $conta->numero . PHP_EOL;
echo "numero da agencia:" . $agencia->agencia . PHP_EOL;
echo "Contas da agencia:" . $agencia->conta->numero . PHP_EOL;
echo "Saldo da conta:" . $agencia->conta->saldo . PHP_EOL;
echo "Limite da conta:" . $agencia->conta->limite . PHP_EOL;




 ?>
