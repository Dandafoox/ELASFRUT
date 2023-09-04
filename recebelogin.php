<?php


$emailCadastrado = "";
$senhaCadastrada = "";

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($email == $emailCadastrado && $senha==$senhaCadastrada) {
    header ('Location:#');
} else
   header ('Location:login.php');
