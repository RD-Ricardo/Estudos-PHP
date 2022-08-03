<div class="titulo">Mapa</div>

<?php
//Array de chave e valor
$dados = array(
    "idade" => 17,
    "cor" => "verde",
    "peso" => 60.2
);

print_r($dados);
echo '<br>';
var_dump($dados[0]);
echo '<br>';
print_r($dados["idade"]);

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

$lista[] ='i';
print_r($lista);

$lista['vinte'] =  'j';
echo '<br>';
print_r($lista);