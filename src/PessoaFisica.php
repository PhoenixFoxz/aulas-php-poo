<?php
require_once "Cliente.php"; 
class PessoaFisica extends Cliente {
    private int $idade;
    private string $cpf;
    
    public function getIdade(): int {
        return $this->idade;
    }
          
    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void {
        $this->cpf = $cpf;
    }
}