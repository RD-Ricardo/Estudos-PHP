<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);
// echo is_bool()
echo '<br>';  
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
//Conversão esplisita
var_dump((float)3);

// Floa para int 
echo '<p>Float para int </p>';
var_dump((int)2.8);
echo '<br>';
var_dump(intval(2.8));
echo '<br>';
var_dump((int)round(2.8));

//Operações com String 
echo '<p> Operações com string</p>';
var_dump((3 +  "2"));
echo '<br>';
var_dump("3". 2);
echo '<br>', is_string("3". 2);
echo '<br>', is_string("3" + 2);
echo '<br>';
// var_dump(1 + "cinco");
echo '<br>';
var_dump(1 + "5 cinco");
