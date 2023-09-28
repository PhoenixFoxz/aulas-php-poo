<?php 
require_once "Cliente.php";

class PessoaJuridica extends Cliente {
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;


    public function __construct(){
        // Acessando o método setter PROTEGIDO (existente em Cliente)
        $this->setSituacao("em análise");
    }
    
    public function exibirDados():void {
        // parent::recursos
        // Permite o acesso aos recursos da classe Pai (superclasse)
        parent::exibirDados();
        echo "<p>Nome Fantasia: $this->nomeFantasia</p>";
    }

    public function getAnoFundacao(): int {
        return $this->anoFundacao;
    }

    public function setAnoFundacao(int $anoFundacao): void {
        $this->anoFundacao = $anoFundacao;
    }

    public function getCnpj(): string {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): void {
        $this->cnpj = $cnpj;
    }

    public function getNomeFantasia(): string {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia(string $nomeFantasia): void {
        $this->nomeFantasia = $nomeFantasia;
    }
}