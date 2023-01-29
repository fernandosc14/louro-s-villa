<?php
    session_start();
    if(!isset($_SESSION['id_users']))
    {
        header("location: login.php");
        exit;
    }
?>


Seja Bem Vindo

<a href="sair.php">Sair</a>
<a href="index.php">Voltar</a>