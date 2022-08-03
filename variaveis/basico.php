<div class="titulo">Variaveis</div>
<?php
$numeroA = 14;
echo $numeroA . '<br>';
var_dump($numeroA);

echo '<br>';
$a = 4;
$b = 16;
$somaDeNumeros = $a + $b;
echo $somaDeNumeros;
$somaDeNumeros = 0;

echo '<br>';
echo isset($somaDeNumeros);

echo '<br>';
unset($somaDeNumeros);
var_dump($somaDeNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "agora sou string";
echo '<br>' . $variavel;

// Nomes de variavel 
// nome variavel (identificador)
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$varQuarto = 'valida';
$var_valida = 'valida';


echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);