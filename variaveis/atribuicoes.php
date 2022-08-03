<div class="titulo">Atribuicoes</div>

<?php
$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--;
--$numero;
echo '<br>'. $numero;
$numero++;
++$numero;
echo '<br>' .$numero;
$numero -=5;
echo '<br>' .$numero;
$numero +=5;
echo '<br>' .$numero;
$numero *=10;
echo '<br>' .$numero;
$numero /=10;
echo '<br>' .$numero;
$numero %=6;
echo '<br>' .$numero;


// $variavelInexistente = 'valor existente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default';
echo '<br>'. $valor;