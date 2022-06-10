<?php

declare(strict_types=1);

class Marcas {
    private string $nome;
    
    public function __construct(string $novoNome)
    {
        $this->nome = $novoNome;

        if ($novoNome <> 'string') {
            die('Valor deve conter texto');
        }
    }

}