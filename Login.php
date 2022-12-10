<?php
  
  if(isset($_POST['submit'])){
    //print_r($_POST['email']);
    //print_r($_POST['senha']);

    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $result = mysqli_query($conexao, "INSERT INTO usuario(email,senha) VALUES ('$email', '$senha')" );

  }
?>
<!DOCTYPE html>
<html lang="pt/br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/Login.css">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <title>Login</title>
  </head>
  <body>
    <div class="box">
      <form action="testeLogin.php" method = "POST">
        <fieldset>
          <legend><b>Login</b></legend>
          <br /><br /><br />
          <div class="inputBox">
            <input
              type="text"
              name="email"
              id="email"
              class="inputUser"
              autocomplete="off"
              required
            />
            <label for="email" class="labelInput">Email</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="password"
              name="senha"
              id="senha"
              class="inputUser"
              required
            />
            <label for="senha" class="labelInput">Senha</label>
          </div>
          <br /><br /><br />
          <input type="submit" name="submit" id="submit" />
          <br /><br />
          <a class="link-externo" href="formulario.php"><b>Crie uma conta</b></a>   
          </fieldset>
      </form>
    </div>
  </body>
</html>
