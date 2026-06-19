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
    <title>IMC</title>
</head>
<body>
        <form method="POST" style="text-align:center;margin:3%; padding:5% background: #3A434A">
            <h1>IMC<h1>
                <br>
                <div class="mb-3">
                    <label for="lpeso" class="form-label">Informe o peso</label>
                    <input type="text" class="form-control" id="peso" name="peso">
                </div>
                <div class="mb-3">
                    <label for="laltura" class="form-label">Informe a altura</label>
                    <input type="text" class="form-control" id="altura" name="altura">
                </div>
                <br>
            <button type="submit" class="btn btn-primary">Calcular
                <?php
                    $peso = $_POST['peso'];
                    $altura = $_POST['altura'];
                    //chamando a variavel que representa a classe funcao
                    $resultado = $funcao->imc($peso, $altura);
                ?>
            </button>
            <h2>
                <?php
                    echo $funcao->imc($peso, $altura);
                ?>
            <h2>
        <form>
</body>
</html>