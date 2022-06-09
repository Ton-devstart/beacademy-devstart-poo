<?php

declare(strict_types=1);

class Professor {
    private string $nome;
    private string $cpf;
    private string $salario;
    
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
            die('Valor deve ser números');
        }
       
        $this->cpf = $novoCPF; 
        
    }
      
    public function getsalario(): float
    {
        return $this->salario;
    }

    public function setSalario(string $novoSalario): void
    {
        if ($novoSalario <>'float') {
            die('Valor deve ser números');
        }
        
        $this->salario = $novoSalario;
    }

}

