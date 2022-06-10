<?php

declare(strict_types=1);

class Categoria {
    private string $nome;
    private string $descricao; 

    public function __construct(string $novoNome, string $novoDescricao)
    {
        $this->nome = $novoNome;
        $this->descricao = $novoDescricao;

        if ($novoDescricao <> 'string') {
            die('Valor deve conter texto');
        }
    }

}
