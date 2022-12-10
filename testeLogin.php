<?php
    session_start();
    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //se existir um submit ele ira acessar
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Email ' . $email);
        //print_r('<br>');
        //print_r('Senha ' . $senha);

        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            //para destruir qualquer dado da sessão
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: Login.php');
        }
        else if($email == 'adm@gmail.com' && $senha == 'adm123' ){
            header('Location: adm.php');
        }
        else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: home.php');
        }
    }
    else{
        //se não tiver um submit ele ira ficar na pag de login mesmo
        header('Location: Login.php');
    }
?>
