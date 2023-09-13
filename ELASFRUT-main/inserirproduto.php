<?php

include "conexao.php";
$idf = $_POST['idfornecedor'];
$tprod = $_POST['tipoproduto'];
$prod = $_POST['produto'];
$foto= $_POST['foto'];
$preco = $_POST['preco'];

$sql = "insert into tblregprod(idfornecedor,tipoproduto,produto,foto,preco) 
values ('$idf','$tprod','$prod','$foto','$preco')";
$qry = mysqli_query($con, $sql);

if($qry){
    header("Location:busca.php");
}
