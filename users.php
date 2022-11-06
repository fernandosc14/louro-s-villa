<?php
session_start();
include ("conexao.php");

$nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao,trim($_POST['email']));
$pass = mysqli_real_escape_string($conexao,trim(md5($_POST['pass'])));

$sql = "select count(*) as total from users where nome = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['user_existe'] = true;
    header('location: index.php');
    exit;
}

$sql = "INSERT INTO users (nome, email, pass) values ('$nome', '$email','$pass')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_registo'] == true;
}

$conexao->close();

header('location: index.php');
exit;
?>
