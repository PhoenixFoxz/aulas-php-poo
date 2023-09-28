<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 6</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 6</h1>  
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Polimorfismo</li>
        <li>Sobreposição de métodos</li>
        <li>Uso do <code>parent</code> para acessar superclasse</li>
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

<hr>

<h2>Saída de dados</h2>

<section>
    <?=$clientePF->exibirDados()?>
    <?=$clientePJ->exibirDados()?>
</section>
</body>
</html>