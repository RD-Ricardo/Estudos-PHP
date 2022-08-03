<div class="titulo">Valor vs Referencia</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

//Atribuição por Valor
$variavelValor = $variavel;
echo "<br> $variavel";
$variavelValor = "novo valor";
echo "<br> $variavel";
echo "<br> $variavelValor";

//Atribuição por Referencia
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";