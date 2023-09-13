<?php

include "conexao.php";
$f = $_POST['fornecedor'];
$c = $_POST['codigo'];

$sql = "insert into tblfornecedor(fornecedor,codigo) values ('$f','$c')";
$qry = mysqli_query($con, $sql);

if($qry){
    header("Location:busca.php");
}
