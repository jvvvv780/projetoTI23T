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
    <title>Dobro de um número</title>
</head>
<body>
        <form method="POST" style="text-align:center;margin:3%; padding:5%">
            <h1>Dobro de um número<h1>
                <br>
                <div class="mb-3">
                    <label for="lbase" class="form-label">Informe o número</label>
                    <input type="text" class="form-control" id="num" name="num">
                </div>
                <br>
            <button type="submit" class="btn btn-primary">Calcular
                <?php
                   if(isset($_POST['num'])){
                    $num = $_POST['num'];
                    //Chamo a variável que representa a classe Funcao
                    $funcao->dobroNum($num);
                }
                ?>
            </button>
            <h2>
                <?php
                   if(isset($_POST['num'])){
                    echo $funcao->dobroNum($num);
                }else{
                    echo "Preencha os campos!";
                }
                ?>
            <h2>
        <form>
</body>
</html>