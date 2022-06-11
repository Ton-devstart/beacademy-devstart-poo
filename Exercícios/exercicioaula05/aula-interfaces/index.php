<?php

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$cpf = '12312312312';
$docx = '12312312312312';

$br = new ValidarBR();
$br->validarDocumento($cpf);

$us = new ValidarUS();
$us->validarDocumento($docx);


echo 'Funcionou';
