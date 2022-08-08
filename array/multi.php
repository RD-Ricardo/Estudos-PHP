<div class="titulo">Array Muldimensionais</div>


<?php
    $dados = [
        [
            "nome" => "Roberto",
            "idade" => 18,
            "naturalidade" => "São Paulo"
        ],
        [
            "nome" => "Ricardo",
            "idade" => 16,
            "naturalidade" => "Bahia"
        ]    
    ];

    print_r($dados);
    echo '<br>' .  $dados[0]['idade'];
    
    $dados[] = [
        "nome" => "Rosi",
        "idade" => 20,
        "naturalidade" => "Santos"
    ];
    
    print_r($dados);
    
    $dados[2]["Vizinho"] = "Chaves";
    echo "<br>";
    print_r($dados);
    
    unset($dados[1]);
    echo "<br>";    
    print_r($dados);
?>