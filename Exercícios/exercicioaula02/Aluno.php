<?php

declare(strict_types=1);

class Aluno {
    private string $nome;
    private string $cpf;
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function getCPF(): string
    {
        return $this->cpf;
    }
    
    public function setCPF(string $novoCPF): void
    {
        if ($novoCPF <>'string') {
            die('Valor deve colocar números');
        }
       
        $this->cpf = $novoCPF; 
        
    }

}