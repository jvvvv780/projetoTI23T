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
    <title>Preço do pro</title>
</head>
<body>
        <form method="POST" style="text-align:center;margin:3%; padding:5%">
            <h1>Valor do produto com +18% de imposto<h1>
                <br>
                <div class="mb-3">
                    <label for="lbase" class="form-label">Informe o valor do produto</label>
                    <input type="text" class="form-control" id="preco" name="preco">
                </div>
                <br>
            <button type="submit" class="btn btn-primary">Calcular
                <?php
                   if(isset($_POST['preco'])){
                    $preco = $_POST['preco'];
                    //Chamo a variável que representa a classe Funcao
                    $funcao->imposto($preco);
                }
                ?>
            </button>
            <h2>
                <?php
                   if(isset($_POST['preco'])){
                    echo $funcao->imposto($preco);
                }else{
                    echo "Preencha os campos!";
                }
                ?>
            <h2>
        <form>
</body>
</html>