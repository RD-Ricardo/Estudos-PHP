<div class="titulo">Tipo String</div>

<?php
echo 'isso é uma string';
echo '<br>';
var_dump("EU também"); 
echo '<br>';

//Concatenação
echo "Nós Também" . ' somos';
echo '<br>', "Também aceito", " virgulas";
echo '<br>';
echo "'Teste'" . '"Teste" ' . '\'Teste\' '. "\"teste\" ". "\\";

print("<br> Também exites a funcao print");
print "<br> Também exites a funcao print sem parenteses";

//Algumas funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('minizado');
echo '<br>' . ucfirst(' só a primeiro letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas Letras?');
echo '<br>' . mb_strlen("EU também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7,6);
echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso isso');
