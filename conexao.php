<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'dbelasfrut';

$mysqli = new mysqli ($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    die ("Falha na conexão com o Banco de Dados"); 
}

// $con = mysqli_connect($servidor,$usuario,$senha,$bd);