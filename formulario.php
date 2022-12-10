<?php

    if(isset($_POST['submit']))
    {
        include_once('conexao.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $celular = $_POST['celular'];
        

        $result = mysqli_query($conexao, "INSERT INTO usuario(email,senha,nome,cpf,celular) 
        VALUES ('$email','$senha','$nome','$cpf','$celular')");

        header('Location: Login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="css/Cadastro.css">
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <!--começo do form-->
                <legend><b>Cadastre-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" autocomplete="off" name="nome" id="nome" class="inputUser" oninput="nameValidate()" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                    <span class="span-required">Digite um nome com mais de 3 caracteres</span>
                </div>
                
                <br><br>
                <div class="inputBox">
                    <input type="text" autocomplete="off" name="email" id="email" class="inputUser" oninput="emailValidate()" required>
                    <label for="email" class="labelInput">Email</label>
                    <span class="span-required">Digite um email válido</span>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" autocomplete="off"  name="celular" id="celular" class="inputUser" oninput="telefoneValidate()" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                    <span class="span-required">Digite um telefone válido</span>
                </div>    
                <br> <br>
                <div class ="inputBox">
                <input type="text" autocomplete="off" name="cpf" id="cpf" class="inputUser" required>
                    <label for="telefone" class="labelInput">Cpf</label>
                    <span class="span-required">Digite um Cpf válido</span>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="password" autocomplete="off" name="senha" id="senha" class="inputUser" oninput="mainPasswordValidate()" required>
                    <label for="senha" class="labelInput">Senha</label>
                    <span class="span-required">A senha deve conter entre 5 a 8 caracteres</span>
                    
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="password" autocomplete="off" name="senha" id="senha" class="inputUser" oninput="comparePassword()" required>
                    <label for="senha" class="labelInput">Repita a senha</label>
                    <span class="span-required"><b>As senhas devem ser iguais</span>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
            <!--/form-->
        </form>
    </div>
</body>
<script>

    /*validações */
    const form = document.getElementById("form");
    const campos = document.querySelectorAll(".inputUser");
    const spans = document.querySelectorAll(".span-required");
    const emailRegex =  /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    const telefoneRegex = "\\(?\\d{2}\\)?\\s?)(\\d{4}\\-\\d{4}";

    /*enquanto o campo estiver errado ele ficara na cor vermelha */
    function setError(index) {
        campos[index].style.border = '2px solid #B8001C'
        spans[index].style.display = 'block';
    }

    /*quando o campo já estiver certo ele ira remover a cor vermelha*/
    function removeError(index){
        campos[index].style.border = ''
        spans[index].style.display = 'none';
    }

    /*validação do nome */
    function nameValidate(){
        if(campos[0].value.length < 3){
            setError(0);
        }
        else{
            removeError(0);
        }
    }

    /*validação do email */
    function emailValidate(){
        if(!emailRegex.test(campos[1].value)){
            setError(1);
        }
        else{
            removeError(1);
        }
    }
    
    /*validação do telefone */
    function telefoneValidate(){
        if(telefoneRegex.test(campos[3].value)){
            removeError(3);
        }
        else{
            setError(3);
        }
    }

    /*validação da senha */
    function mainPasswordValidate(){
        if(campos[4].value.length > 8){
            setError(4);
        }
        else if(campos[4].value.length < 5){
            setError(4);
        }
        else{
            removeError(4);
            comparePassword();
        }
    }
    
    /*comparação das senhas*/
    function comparePassword(){
        if(campos[4].value == campos[5].value){
            removeError(5);
        }
        else{
            setError(5);
        }
    }
</script>
</html>
