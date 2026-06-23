<?php namespace Projeto\ti23t; //: comentario dentro do php
    include('telas/cabecalho.php');//reaproveitando o boostrap pelo cabelhaço
?>
<!--comentario em html -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
</head>
    <body>
    <form method="POST" style="text-align:center; margin:3%; padding:5%; background: #3A434A">
        <h1>Boas Vindas</h1>
        <a href= "telas/somar.php" class="btn btn-primary">Somar</a>
        <a href= "telas/subtrair.php" class="btn btn-primary">Subtrair</a>
        <a href= "telas/multiplicar.php" class="btn btn-primary">Multiplicar</a>
        <a href= "telas/dividir.php" class="btn btn-primary">Dividir</a>
        <a href= "telas/bhaskara.php" class="btn btn-primary">Bhaskara</a>
        <a href= "telas/imc.php" class="btn btn-primary">IMC</a>
        <a href= "telas/retangulo.php" class="btn btn-primary">Área do Retângulo</a>
        <a href= "telas/triangulo.php" class="btn btn-primary">Área do Triângulo</a>
         <br><br>
        <a href= "telas/18imposto.php" class="btn btn-primary">Valor do produto com +18% de imposto</a>
        <a href= "telas/idadeemdias.php" class="btn btn-primary">Idade convertida em dias</a>
        <a href= "telas/dobro.php" class="btn btn-primary">Dobro de um número</a>
    </form>
    </body>
</html>