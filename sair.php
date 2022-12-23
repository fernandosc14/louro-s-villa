<?php
session_start();
unset($_SESSION['id_users']);
header("location:index.php");
?>