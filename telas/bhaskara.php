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
    <title>Bhaskara</title>
</head>
<body>
        <form method="POST" style="text-align:center;margin:3%; padding:5%">
            <h1>Bhaskara<h1>
                <br>
                <div class="mb-3">
                    <label for="lx1" class="form-label">Informe o primeiro numero</label>
                    <input type="number" class="form-control" id="x1" name="x1">
                </div>
                <div class="mb-3">
                    <label for="lx2" class="form-label">Informe o segundo numero</label>
                    <input type="number" class="form-control" id="x2" name="x2">
                </div>
                <div class="mb-3">
                    <label for="lx3" class="form-label">Informe o terceiro numero</label>
                    <input type="number" class="form-control" id="x3" name="x3">
                </div>
                <br>
            <button type="submit" class="btn btn-primary">Calcular
                <?php
                if(isset($_POST['valorA']) || isset($_POST['valorB']) || isset($_POST['valorC'])){
                    $a = $_POST['valorA'];
                    $b = $_POST['valorB'];
                    $c = $_POST['valorC'];
                    //chamando a variavel que representa a classe funcao
                    $resultado = $funcao->bhaskara($a, $b, $c);

                }
                ?>
            </button>
            <h2>
                <?php
                    echo $funcao->bhaskara();
                ?>
            <h2>
        <form>
</body>
</html>