<?php
require_once "conexao.php";
$sql = mysql_query("SELECT * FROM users WHERE username='".addslashes($_POST['username'])."'") or die("O nome de Utilizador está incorrecto. MySQL erro:".mysql_error());
$result = mysql_fetch_array($sql);

if($result[’password’] == sha1($_POST[’password’])) {
session_start(); // start the session
header(”Cache-control: private”);
$_SESSION[”sessioname”] = $_POST[’username’];
header(”location: seguranca.php”);
}else{
echo “Dados Errados, tente de novo”;
}
?>