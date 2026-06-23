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
    <title>Área do Triângulo</title>
</head>
<body>
        <form method="POST" style="text-align:center;margin:3%; padding:5%">
            <h1>Área do Retângulo<h1>
                <br>
                <div class="mb-3">
                    <label for="lbase" class="form-label">Informe a base do triângulo</label>
                    <input type="text" class="form-control" id="base" name="base">
                </div>
                <div class="mb-3">
                    <label for="lbase" class="form-label">Informe a altura do triângulo</label>
                    <input type="text" class="form-control" id="base" name="altura">
                </div>
                <br>
            <button type="submit" class="btn btn-primary">Calcular
                <?php
                   if(isset($_POST['base']) || isset($_POST['altura'])){
                    $base = $_POST['base'];
                    $altura = $_POST['altura'];
                    //Chamo a variável que representa a classe Funcao
                    $funcao->triangulo($base, $altura);
                }
                ?>
            </button>
            <h2>
                <?php
                   if(isset($_POST['base']) || isset($_POST['altura'])){
                    echo $funcao->triangulo($base, $altura);
                }else{
                    echo "Preencha os campos!";
                }
                ?>
            <h2>
        <form>
</body>
</html>