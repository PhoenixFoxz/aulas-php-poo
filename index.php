<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 10</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 10</h1>  
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Composer: gerenciador de dependência PHP</li>
        <li>Configurar o projeto com Composer usando <code>composer.json</code></li>
        <li>Autoload de classes evitando muitos requires e/ou require manuais</li>
    </ul>

<?php 
use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;
use Tabajara\{MEI, PessoaFisica as PF, PessoaJuridica as PJ};

require_once "vendor/autoload.php";

$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;
?>

<pre><?=var_dump($pagamentoFornecedor)?></pre>
<pre><?=var_dump($pagamentoPrestador)?></pre>

<hr>

<?php

$clientePF = new PF;
$clientePJ = new PJ;
$clienteMEI = new MEI;

$clientePF->setNome("Jumento");
$clientePF->setIdade(30);
$clientePF->setCpf("123.456.789-00");

$clientePJ->setAnoFundacao(2005);
$clientePJ->setCnpj("89.086.144/0001-16");
$clientePJ->setNomeFantasia("RANDON SA IMPLEMENTOS E PARTICIPACOES");

$clienteMEI->setNome("Jeremias");
$clienteMEI->setAreaDeAtuacao("Vendedor de Picolé");

?>

<h2>Cliente PF</h2>
<p>Nome: <?=$clientePF->getNome()?></p>
<p>Idade: <?=$clientePF->getIdade()?></p>
<p>CPF: <?=$clientePF->getCpf()?></p>

<h2>Cliente PJ</h2>
<p>Nome Fantasia: <?=$clientePJ->getNomeFantasia()?></p>
<p>Ano: <?=$clientePJ->getAnoFundacao()?></p>
<p>CNPJ: <?=$clientePJ->getCnpj()?></p>

<h2>Cliente MEI</h2>
<p>Nome: <?=$clienteMEI->getNome()?></p>
<p>Área de Atuação: <?=$clienteMEI->getAreaDeAtuacao()?></p>
</body>
</html>