<?php 
// Classe Abstrata 
// Não pode ser instanciada, ou seja, não é possível criar um objeto a partir desta classe. Ele é usada apenas como modelo para subclasses com herança.
namespace Tabajara;
 abstract class Cliente {
    // Propriedades (ou atributos)
    private string $nome;
    private string $email;
    private string $senha;
    private string $situacao = "a definir";

    public function exibirDados():void
    {
      echo "<h4>".$this->getNome()."</h4>";
      echo "<p>Situação: ".$this->getSituacao()." </p>";
    }

    // Métodos getters e setters
    public function setNome(string $nome):void 
    {
      $this->nome = $nome;
   // Propriedade  Parâmetro
    }

    public function getNome():string 
    {
      return $this->nome;
    }

    public function setEmail(string $email) : void
    {
      $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    public function getEmail() : string 
    {
      return $this->email;  
    }

    public function setSenha(string $senha) : void
    {
      $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getSenha() : string 
    {
      return $this->senha;  
    }

    // Visibilidade protected
    // Estes getter e setter poderão ser usados APENAS aqui (classe Cliente) e nas subclasses (PessoaFisica e PessoaJuridica)


    protected function getSituacao(): string {
        return $this->situacao;
    }

    protected function setSituacao(string $situacao): void {
        $this->situacao = $situacao;
    }
 }