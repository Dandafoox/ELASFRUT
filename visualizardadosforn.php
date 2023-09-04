<?php
if(isset($_POST["user_id"])){
    include_once "conexao.php";

    $query_user = "SELECT * FROM tblcadfornecedor WHERE id = '".$_POST["user_id"] ."' LIMIT 1 "; 
   $resultado_user = mysqli_query($con,$query_user);
   $row_user = mysqli_fetch_assoc($resultado_user);
   echo $row['razaosocial'];
}