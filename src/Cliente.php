<?php 
 class Cliente {
    // Propriedades (ou atributos)
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;

    // Métodos (ou comportamento)
    public function exibirDados(){
        echo "<section>";
        echo "<h2> $this->nome </h2>";
        echo "<p> $this->email <p>";
        echo "</section>"; 
    }
 }