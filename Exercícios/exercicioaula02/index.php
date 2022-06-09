<?php

include 'Produto.php';
include 'Professor.php';
include 'Aluno.php';
include 'Curso.php';


$p1 = new Produto();
$p1->setNome('sapato social');
$p1->setValor(299);

$cursoPHP = new Professor();
$cursoPHP->setNome('Joao da Silva');
$cursoPHP->setCPF('212.212.212-25');
$cursoPHP->setSalario(1800);

$a1 = new Aluno();
$a1->setNome('ton');
$a1->setCPF('123.258.125-25');

$cursoPHP = new Curso();
$cursoPHP->setNome('Introdução ao PHP');
$cursoPHP->setCargaHoraria(88);
$cursoPHP->setdescricao('Básico');


