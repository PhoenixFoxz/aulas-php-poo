<?php 
 class Cliente {
    // Propriedades (ou atributos)
    public string $nome;
    private string $email;
    private string $senha;

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
 }