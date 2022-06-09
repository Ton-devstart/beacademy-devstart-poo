<?php

declare(strict_types=1);

class Curso {
    private string $nome;
    private int $CargaHoraria;
    private string $descricao;
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function getCargaHoraria(): int
    {
        return $this->CargaHoraria;
    }
    
    public function setCargaHoraria(int $novoCargaHoraria): void
    {
        if ($novoCargaHoraria <>'int') {
            die('Valor deve ser números');
        }
       
        $this->cpf = $novoCargaHoraria; 
        
    }
      
    public function getdescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $novoDescricao): void
    {
        if ($novoDescricao <>'string') {
            die('Valor deve ser texto');
        }
        
        $this->descricao = $novoDescricao;
    }

}