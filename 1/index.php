<?php

require('Carro.php');

$veiculo = new Carro;

$veiculo->setModelo('fusca');
$veiculo->setMarca('vw');
$veiculo->setAno('2019');
$veiculo->setAlarme('sim');
$veiculo->setCor('azul');

$veiculo->getModelo();
$veiculo->getMarca();
$veiculo->getAno();
$veiculo->getAlarme();
$veiculo->getCor();

?>