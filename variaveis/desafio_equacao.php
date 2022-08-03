<div class="titulo">Desafio Equação</div>

<?php

$numeradoA = (6 * (3 + 2)) ** 2;
$denominadorA = 3 * 2;

$numeradoB = (1 - 5) * (2 - 7);
$denominadorB = 2;

$superiorA = $numeradoA / $denominadorA;
$superiorB = ($numeradoB  / $denominadorB) ** 2;


$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;
echo "Resultado é " . $final;