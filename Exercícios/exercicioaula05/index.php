<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'Validar.php';


$c1 = new Cliente('well@gmail.com', '123456');
$c1->setNome('well');
$c1->setDataCadastro('01/01/2019');


$cpf = "12345678910";
Validar::validarCPF($cpf);
$c1->setCPF($cpf);

$g1 = new Gestor('rei@gmail.com', '123125', 6000, '15:00');
$g1->setNome('rei');

$gg1 = new GestorGeral('maria@gmail.com', '123125', 9000, '15:00');
$gg1->setNome('maria');

//$us = new Usuario('sergio@gmail.com', '123125');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
var_dump($cpf);