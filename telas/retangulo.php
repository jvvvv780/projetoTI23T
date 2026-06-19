<?php
    namespace Projeto\ti23t\telas;
    include('cabecalho.php');
    require_once('../php/funcoes.php'); //acessando o arquivo
    use Projeto\ti23t\php\Funcao; //acessando a classe que esta no arquivo funcoes.php
    $funcao = new Funcao(); //Construtor da classe funcao ->conectando a index e funcoes
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Retângulo</title>
</head>
<body>
        <form method="POST" style="text-align:center;margin:3%; padding:5%">
            <h1>Área do Retângulo<h1>
                <br>
                <div class="mb-3">
                    <label for="lbase" class="form-label">Informe o primeiro numero</label>
                    <input type="number" class="form-control" id="base" name="base">
                </div>
                <div class="mb-3">
                    <label for="lbase" class="form-label">Informe o segundo numero</label>
                    <input type="number" class="form-control" id="base" name="base">
                </div>
                <br>
            <button type="submit" class="btn btn-primary">Calcular
                <?php
                    $base = $_POST['base'];
                    $altura = $_POST['altura'];
                    //chamando a variavel que representa a classe funcao
                    $resultado = $funcao->retangulo($area, $base, $altura);
                ?>
            </button>
            <h2>
                <?php
                    echo $funcao->retangulo();
                ?>
            <h2>
        <form>
</body>
</html>