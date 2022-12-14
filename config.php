<?php
include ("conexao.php"); 
/*Moeda*/ 
$result = mysqli_query($conexao, "SELECT moeda from config");
$moeda_sql = mysqli_fetch_object($result);
$moeda = $moeda_sql->moeda;

/*Local*/
$result = mysqli_query($conexao, "SELECT local from config");
$local_sql = mysqli_fetch_object($result);
$local = $local_sql->local;

/*Telefone*/
$result = mysqli_query($conexao, "SELECT telefone from config");
$telefone_sql = mysqli_fetch_object($result);
$telefone = $telefone_sql->telefone;

/*Email*/
$result = mysqli_query($conexao, "SELECT email from config");
$email_sql = mysqli_fetch_object($result);
$email = $email_sql->email;

/*Descricao*/
$result = mysqli_query($conexao, "SELECT descricao from config");
$descricao_sql = mysqli_fetch_object($result);
$descricao = $descricao_sql->descricao;

/*Nossos Produtos*/ 
$result = mysqli_query($conexao, "SELECT destaque1 from config");
$destaque1_sql = mysqli_fetch_object($result); 
$destaque1 = $destaque1_sql->destaque1;

/*Destaque*/
$result = mysqli_query($conexao, "SELECT destaque2 from config");
$destaque2_sql = mysqli_fetch_object($result);
$destaque2 = $destaque2_sql->destaque2;
?>