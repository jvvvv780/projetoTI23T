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
    <title>Idade convertida em dias</title>
</head>
<body>
        <form method="POST" style="text-align:center;margin:3%; padding:5%">
            <h1>Idade convertidade em dias<h1>
                <br>
                <div class="mb-3">
                    <label for="lbase" class="form-label">Informe a idade</label>
                    <input type="text" class="form-control" id="dias" name="dias">
                </div>
                <br>
            <button type="submit" class="btn btn-primary">Calcular
                <?php
                   if(isset($_POST['dias'])){
                    $dias = $_POST['dias'];
                    //Chamo a variável que representa a classe Funcao
                    $funcao->idadeemdias($dias);
                }
                ?>
            </button>
            <h2>
                <?php
                   if(isset($_POST['dias'])){
                    echo $funcao->idadeemdias($dias);
                }else{
                    echo "Preencha os campos!";
                }
                ?>
            <h2>
        <form>
</body>
</html>