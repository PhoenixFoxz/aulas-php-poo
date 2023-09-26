<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 5</h1>  
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança (Super Classe e Sub Classe)</li>
        <li>Método/propriedades protegidos (acessíveis apenas pela classe em que foram definidos e pelas subclasses)</li>
        <li>Classe Abstrata: não permite instâncias/objetos, serve apenas de modelo para subclasse</li>
        <li>Classe final: não permite herança, ou seja, não aceita a criação de subclasses.</li>
    </ul>

<?php
require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";

$clientePF = new PessoaFisica; 
$clientePJ = new PessoaJuridica; 

// Colocar um nome no Cliente PF
$clientePF->setNome("Fulano");
$clientePF->setEmail("fulano@gmail.com");
$clientePF->setIdade(40);
$clientePF->setCpf("123.456.789-00");

$clientePJ->setNome("Beltrano S/A");
$clientePJ->setEmail("blablabla@gmail.com");
$clientePJ->setAnoFundacao(2000);
$clientePJ->setCnpj("32.088.0001/000.41");
$clientePJ->setNomeFantasia("Bla Bla Bla Informática")
?>


<h3>ClientePJ</h3>
<ul>
    <li><b>Nome:</b> <?=$clientePJ->getNome()?></li>
    <li><b>E-mail:</b> <?=$clientePJ->getEmail()?></li>
    <li><b>Ano:</b> <?=$clientePJ->getAnoFundacao()?></li>
    <li><b>CNPJ:</b> <?=$clientePJ->getCnpj()?></li>
    <li><b>Nome Fantasia:</b> <?=$clientePJ->getNomeFantasia()?></li>
</ul>

<pre><?=var_dump($clientePJ)?></pre>

<hr>

<?php 
require_once "src/MEI.php";
$clienteMei = new MEI;
$clienteMei->setNome("Maria Tanaka");
$clienteMei->setAnoFundacao(2023);
$clienteMei->setNomeFantasia("Tanaka Empreendimento");
$clienteMei->setAreaDeAtuacao("Ervas Medicinais");
?>

<pre><?=var_dump($clienteMei)?></pre>

<?php
require_once "src/Cliente.php";
$clienteGenerico = new Cliente;
?>
<pre><?=var_dump($clienteGenerico)?></pre>
</body>
</html>