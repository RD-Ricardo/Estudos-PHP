<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos-PHP</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
           <nav class="modulos">
                <div class="modulo verde">
                    <h3>Modulos 01 - Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Modulos 01 - Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritimeticas">Op. Aritimeticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio">Desasfiao Precedencia</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Modulos 03 - Variavies</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variaveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolacao</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis">Variáveis Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referencia</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Modulos 04 - Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">If -/Else</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Modulos 05 - Array</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=array&file=basico">Basíco Array</a></li>
                        <li><a href="exercicio.php?dir=array&file=mapa">Mapa Array</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_indice">Desafio Indice</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_meses">Desafio Meses</a></li>
                        <li><a href="exercicio.php?dir=array&file=operacoes_array">Operações Array</a></li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>Modulos 01 - Básico</h3>
                    <ul>
                        <li><a href="#">Ex-01</a></li>
                        <li><a href="#">Ex-01</a></li>
                        <li><a href="#">Ex-01</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>Modulos 01 - Básico</h3>
                    <ul>
                        <li><a href="#">Ex-01</a></li>
                        <li><a href="#">Ex-01</a></li>
                        <li><a href="#">Ex-01</a></li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>Modulos 01 - Básico</h3>
                    <ul>
                        <li><a href="#">Ex-01</a></li>
                        <li><a href="#">Ex-01</a></li>
                        <li><a href="#">Ex-01</a></li>
                    </ul>
                </div>
                <div class="modulo roxo-escuro">
                    <h3>Modulos 01 - Básico</h3>
                    <ul>
                        <li><a href="#">Ex-01</a></li>
                        <li><a href="#">Ex-01</a></li>
                        <li><a href="#">Ex-01</a></li>
                    </ul>
                </div>
           </nav>
        </div>
    </main>
    <footer  class="rodape">
        RD-Ricardo <?= date('Y');?>
    </footer>
</body>
</html>