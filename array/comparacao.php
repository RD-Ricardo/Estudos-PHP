<div class="titulo">Comparação Array</div>

<?php

    $arr1 =  ['nome' => 'maria', 'idade' => 18];
    $arr2 =  ['nome' => 'maria', 'idade' => 18];
    var_dump($arr1 == $arr2);
    var_dump($arr1 === $arr2);
    
    $arr3 = ['idade' => 18, 'nome' => 'maria'];
    echo "<br>";
    var_dump($arr1 == $arr3);
    var_dump($arr1 === $arr3);
?>