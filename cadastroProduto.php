<?php
    if(isset($_POST['submit'])){
        include_once('conexao.php');

        $nome = $_POST['nome'];
        $tamanho = $_POST['tamanho'];
        $categoria = $_POST['categoria'];
        $valor = $_POST['valor'];
        $imagem = $_POST['imagem'];

        $result = mysqli_query($conexao, "INSERT INTO produto(nome,tamanho,categoria,valor,imagem) 
        VALUES ('$nome','$tamanho','$categoria', '$valor','$imagem')");

        header('Location: home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/CadastroProduto.css">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <!--nav bar-->
    <header>
        <nav class="navigation">
            <img src="img/logo.png" alt="logo" class="imagem-logo">
            <img src="img/bioconcept.png" alt="nome-img" class="nome-img">

            <ul class="nav-menu">
                <li class="nav-item"><a href="home.php">Home</a></li>
    
            </ul>
            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <!--/nav bar-->

    <!--começo do form-->
    <fieldset class="fieldset">
    <form action="cadastroProduto.php" method="POST">
        <div class="form">
            <h1 class="titulo">Cadastro de Produtos</h1>
            <div class="inputbox">
                <label for="text" class="labelInput">Nome</label>
                <input type="text" autocomplete="off" name= "nome" id="nome" class="inputUser" required>
                <span class="span-required">Digite um nome com mais de 3 caracteres</span>
            </div>
            <br> <br>
            <div class="inputbox">
                <label for="text" class="labelInput">Tamanho</label>
                <input type="text" autocomplete="off" name="tamanho" id="tamanho" class="inputUser" required>
                <span class="span-required">Digite um tamanho</span>
            </div>
            <br><br>
            <div class="inputbox">
                <label for="ships" class="labelInput">Categoria</label>
                <select name="categoria" id="categoria" required>
                    <option value="select">Selecione</option>
                    <option value="camisas">Camisas</option>
                    <option value="camisetas">Camisetas</option>
                    <option value="casacos">Casacos</option>
                    <option value="calcas">Calças</option>
                    <option value="chapeu">Chapéu</option>
                    <option value="macacoes">Macacões</option>
                    <option value="saias">Saias</option>
                    <option value="sapatos">Sapatos</option>
                    <option value="shorts">Shorts/Bermudas</option>
                    <option value="vestidos">Vestidos</option>
                    <span class="span-required">Selecione uma Categoria</span>
                </select>
            </div>
            <br><br>
            <div class="inputbox">
                <label for="text" class="labelInput">Valor</label>
                <input type="text" autocomplete="off" name="valor" id="valor" class="inputUser" required>
                <span class="span-required">Adicione um valor</span>
            </div>
            <br><br>
            <div class="inputbox">
            <input type="file" name="imagem" id="imagem">
            </div>
            <br><br>
            <div class="inputbox">
            <input type="submit" name="submit" id="submit">
            </div>
        </div>
    </form>
    <!--/form-->
    
    </fieldset>
</body>
</html>