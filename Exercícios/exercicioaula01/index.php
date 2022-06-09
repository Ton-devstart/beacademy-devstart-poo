<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';
include 'Disciplina.php';

$a1 = new Aluno();
$a1->nome = 'ton';
$a1->cpf = '123.258.125-25';

$cursoPHP = new Curso();
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->$cargaHoraria = 88;
$cursoPHP->$descricao = "Básico";

$cursoPHP = new Professor();
$cursoPHP->nome = 'Joao da Silva';
$cursoPHP->$cpf = '212.258.102-36';
$cursoPHP->$salario = 1800;

$cursoPHP = new Disciplina();
$cursoPHP->nome = 'POO';
$cursoPHP->$cargaHoraria = 4;
$cursoPHP->$descricao = "Orientação a Objetos";
$cursoPHP->$professor = "Alessandro";