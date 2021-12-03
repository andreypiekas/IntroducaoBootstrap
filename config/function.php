<?php
include("conexao.php");


if(isset($_POST["cadastrar"])){


$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$telefone = htmlspecialchars($_POST['telefone']);
$dia = htmlspecialchars($_POST['dia']);
$mes = htmlspecialchars($_POST['mes']);
$ano = htmlspecialchars($_POST['ano']);
$senha = htmlspecialchars($_POST['senha']);
$senha = md5($senha);


    $res = mysqli_query($link, "INSERT into users (nome,email,telefone,dia,mes,ano,avatar,senha) values ('$nome','$email', '$telefone', '$dia', '$mes', '$ano','Imagem','$senha')")or die(mysqli_error($link));

    if($res){
        header("Location:../index.php");
    }

}
if(isset($_POST["entrar"])){
    
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);
    $senha = md5($senha);

    $query =mysqli_query($link, "SELECT email from users where email = '$email'")or die(mysqli_error($link));
    $total = mysqli_num_rows($query);

    if($total == 1){
        $querySenha =mysqli_query($link, "SELECT senha from users where email = '$email' and senha = '$senha'")or die(mysqli_error($link));
        $totalSenha = mysqli_num_rows($querySenha);

        if($totalSenha == 1){
            header("Location:../home.php");
        }else{
            header("Location:../index.php?error=1");
        }
    } else{
        header("Location:../index.php?error=1");
    }

}

?>