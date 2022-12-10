<?php
  session_start();
  include_once('conexao.php');
  
  $sql = "SELECT * FROM usuario";

  $result = $conexao->query($sql);

  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/Adm.css">
    <title>Document</title>
  </head>
  <body>
    <!--começo nav bar-->
    <header>
      <nav class="navigation">
        <img src="img/logo.png" alt="logo" class="imagem" />
        <img src="img/bioconcept.png" alt="nome" class="nome-img" />

        <ul class="nav-menu">
          <img src="img/sair.png" alt="sair" class="sair" />
          <li class="nav-item"><a href="sair.php">Sair</a></li>
        </ul>
        <div class="menu">
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
    </header>
    <!--fim nav bar-->
    <div>
      <table class="table">
          <tr>
            <td>Código</td>
            <td>Email</td>
            <td>Senha</td>
            <td>Nome</td>
            <td>Cpf</td>
            <td>Celular</td>
          </tr>
        <?php while($dado = $result->fetch_array()){ ?>
          <tr>
            <td><?php echo $dado["cod"]; ?></td>
            <td><?php echo $dado["email"]; ?></td>
            <td><?php echo $dado["senha"]; ?></td>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["cpf"]; ?></td>
            <td><?php echo $dado["celular"]; ?></td>
          </tr>  
        <?php } ?>
      </table>
    </div>
  </body>
</html>
