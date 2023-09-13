<?php 
include "conexao.php";
$sql = "select * from tblcadfornecedor";
$qry = mysqli_query($con,$sql);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/listfornecedor.css">
    <title>Lista de Fornecedores</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-success navbar-dark py-3">
        <div class="container">
            <img src="img/logo4.png" alt="" width="50" height="50" class="navbar-right">
            <a href="index.php" class="navbar-brand mx-3">Elas Frut</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="listafornecedores.php" class="nav-link">Fornecedores</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php #facaparte" class="nav-link">Faça Parte</a>
                    </li>

                    <li class="nav-item">
                        <a href="#noticias" class="nav-link">Notícias</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php #quemsomos" class="nav-link">Quem Somos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /navbar -->

<main class="main">

    <div class="btn-pesquisa">
        <input type="text" placeholder="Pesquisar">
        <a class="lupa" href="#"><i class="bi bi-search"></i></a>
    </div> 

    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end">   
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
    </nav>
    
   
    <table class="table">
        <thead>
            <div class="title-table">
            <tr >
                <th scope="col">Razão Social</th>
                <th scope="col">Tipo</th>
                <th scope="col">Cidade</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Telefone</th>
               <th scope="col">Saiba Mais </th> 
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
               
            </tr>
            </div>
        </thead>
        <tbody>
        <?php
         while($linha = mysqli_fetch_array($qry)){
        
            echo "<tr>";
                  "<td>".$linha['id']."</td>";
            echo "<td>".$linha['razaosocial']."</td>";
            echo "<td>".$linha['prod']."</td>";
            echo "<td>".$linha['cidadeforn']."</td>";
            echo "<td>".$linha['cnpj']."</td>";
            echo "<td>".$linha['telforn']."</td>";


            echo "<td>
            <a href='' type='button' class='btn'><i class='bi bi-plus-square'></i></a>
            </td>";
            echo "<td>
            <a href='editecadfo.php?id=$linha[id]' type='button' class='btn'><i class='bi bi-pencil-square'></i></a>
            </td>";
            echo "<td>
            <a href='deletefornecedor.php?id=$linha[id]' type='button' class='btn'><i class='bi bi-trash3-fill'></i></a>
            </td>";
          
           
            echo "</tr>";
      
         }
         ?>

         </tbody>
     </table>

    </main>


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="lead">Copyright &copy; 2023 Elas Frut</p>

            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
            
        </div>
    </footer>
    <!-- /Footer -->
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
  <script src="js/dadosfornecedor.js"></script>
</body>

</html>

















