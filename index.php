<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 2</h1>  
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Acesso direto às propriedades</li>
        <li>Atribuição e leitura de dados</li>
        <li>Chamada de métodos</li>
        <li>Uso <code>$this</code> para acessar recursos dentro da própria classe</li>
    </ul>

<?php
// Importando a Classe
require_once "src/Cliente.php";

// Criando instâncias da Classe (Objetos)
$clienteA = new Cliente;
$clienteB = new Cliente;

// Acesso e Atribuição
$clienteA->nome = "Tiago";
$clienteB->nome = "Bernardo";
$clienteA->telefones = ["11-2135-0300", "11-96666-5555"];
$clienteA->email = "tiago@gmail.com";
$clienteA->senha = password_hash("123abc", PASSWORD_DEFAULT);
?>

<hr>

<h2>Dados dos objetos</h2>
<h3> <?= $clienteA->nome ?> </h3>
<p>E-mail: <?= $clienteA->email ?></p>
<p>Telefones: (Acesso um por um) 
    <?= $clienteA->telefones[0] ?>,
    <?= $clienteA->telefones[1] ?>
</p>
<p> Telefones: (Convertendo para string)
    <?=implode(", ", $clienteA->telefones)?>
</p>
<p>
    Telefones: (Usando loop)
</p>
<ul>
    <?php foreach($clienteA->telefones as $telefone){
    ?>
    <li><?=$telefone?></li>
    <?php    
    }
    ?>
</ul>

<h2>Acessando os dados através de um método</h2>
<?=$clienteA->exibirDados()?>
<?=$clienteB->exibirDados()?>

<h3> <?= $clienteB->nome ?> </h3>

<pre><?=var_dump($clienteA, $clienteB)?></pre>
</body>
</html>