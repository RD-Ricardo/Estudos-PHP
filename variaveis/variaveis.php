<div class="titulo">Variáves Variáveis</div>


<?php
$a = 'valorA';
$$a = 'valorAA';

echo "$a {$$a} ${$a} $valorA";

echo "<br>";
$epa = 'opa';
$opa = 'vish';
echo "$epa {$opa}";