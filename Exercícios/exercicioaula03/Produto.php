<?php

declare(strict_types=1);

class Produto {
    private string $nome;
    private float $valor; 

    public function __construct(string $novoNome, float $novoValor)
    {
        $this->nome = $novoNome;
        $this->valor = $novoValor;

        if ($novoValor <0) {
            die('Valor não pode ser negativo');
        }
    }
    
    
}



