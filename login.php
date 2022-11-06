<?php
session_start();
include("conexao.php");

if(empty($_POST['nome']) || empty($_POST['pass'])) {
    header('location: index.php');
    exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$pass = mysqli_real_escape_string($conexao, $_POST['pass']);

$query = "select nome from users where users = '{$nome}' and pass = md5('{$pass}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $user_bd = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $user_bd['nome'];
    header('location: painel.php');
    exit();
}else {
    $_SESSION['offline'] = true;
    header('location: index.php');
    exit();
}
?>
