<div class="titulo">Desafio String</div>

<div>
    <form action="#" method="get">
        <label for="nome">Digite seu nome:</label><br>
        <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>
</div>
<?php
if(isset($_GET["nome"])){

    $name = $_GET["nome"];
    $name = str_replace(" de ", " ", $name);
    $name = str_replace(" da ", " ", $name);
    $name = str_replace(" das ", " ", $name);
    $name = str_replace(" do ", " ", $name);
    $name = str_replace(" dos ", " ", $name);
    $name = str_replace(" e ", " ", $name);
    $nameUpper = strtoupper($name);
    $lengthName = mb_strlen($nameUpper, "utf-8");
    $listIndexSpaceName =  [];
    $resultName = "";

    /*
        --Trecho de codigo Responsavel por guardar 
        a posição dos espaços vazio da String no Array--
    */
    for ($i=0; $i < $lengthName; $i++) { 
        if($nameUpper[$i] == " ")
            $listIndexSpaceName[] = $i;    
    }

    /*
        --Trecho responsavel por obter o 
        sobrenome e armazenar na variavel de resultado--
    */
    for ($i=0; $i < count($listIndexSpaceName); $i++) { 
        if($i == (count($listIndexSpaceName) - 1))
            $resultName = substr($nameUpper, $listIndexSpaceName[$i], ($lengthName - $listIndexSpaceName[$i]));
    }

    /*
        --Trecho responsavel por concatenar o 
        ultimo sobrenome com todos os outros 
        obtendo apenas o primeiro caracter--
    */
    for ($i=0; $i < count($listIndexSpaceName); $i++) { 
        if($i == 0)
            $resultName.= ", " . substr($nameUpper,0,1);
        if($i != count($listIndexSpaceName) - 1) 
            $resultName.= "." . substr($nameUpper, $listIndexSpaceName[$i],2);
    }

    echo $resultName;
}