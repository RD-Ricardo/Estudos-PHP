<div class="titulo">Array</div>

<?php

$lista =  array(1, 2, 3.4, "texto");

echo $lista. '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);
echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>';
var_dump($lista[30]);


$texto = "esse é um texto de teste";

echo "<br>";
echo $texto[11]; //cuidado
echo '<br>'. mb_substr($texto,10,1);