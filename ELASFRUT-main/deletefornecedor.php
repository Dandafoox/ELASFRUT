<?php
include "conexao.php";
$id=$_GET['id'];
$sql= "delete from tblcadfornecedor where id=". $id;

mysqli_query ($con,$sql);
header ('Location:configlistafornecedor.php');