<?php 
include "conexao.php";
$sql = "select * from listarfornecedores";
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="./img/logo3.png" width="200px" height="200px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" >
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              <a class="nav-link" href="#">Produtos</a>
              <a class="nav-link" href="#">Sobre </a>
              <a class="nav-link" href="">Contatos</a>
            </div>
          </div>
        </div>
      </nav>


<div class="navbar-lateral">
        <ul class="pesquisa">
            <li>Inicio</li>
            <li>Produtos</li>
            <li>Pequisar Produtos</li>
            <li>Fornecedores</li>
            <li>Indicar essa pagina</li>
            <li>Duvidas</li>
            <li>Termos de Uso</li>
            <li>Contatos</li>
        </ul>
    </div>

    <div>
        <input type="text">
        <a href=""><i class="bi bi-search"></i></a>
    </div> 

        <nav aria-label="Page navigation example">
         <ul class="pagination justify-content-end">
        <li class="page-item disabled">
        <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#">Next</a>
        </li>
    </ul>
    </nav>
    
    <form class="form-pesquesa" action="">
       <label > Tipo </label>
        Frutas <input  type="checkbox">
        Legumes <input  type="checkbox">
        Hortaliças <input  type="checkbox">
        Verduras <input  type="checkbox">
        Raizes <input  type="checkbox">
        Organicos <input  type="checkbox"><br>
        

       Região <input class="form-control"type="text"><br>
       Fornecedor <input class="form-control" type="text"><br>
       Preço <input class="form-control" type="text"><br>
       <label> Faz entrega </label>
       Sim <input type="checkbox">
       Não <input  type="checkbox"><br>

       <button type="Submit">Procurar</button>
       <button type="Submit">Limpar</button>

    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Razõa Social</th>
                <th scope="col">Tipo</th>
                <th scope="col">Cidade</th>
                <th scope="col">Loja</td>
                <th scope="col">Telefone</th>
                <th scope="col">Saiba mais </th>
            </tr>
        </thead>
        <?php
            while($linha = mysqli_fetch_array($qry)){
                $id = $linha['id'];
                echo '<td>'.$linha['razaosocial'].'</td>';
                echo '<td>'.$linha['prod '].'</td>';
                echo '<td>'.$linha['cidadeforn '].'</td>';
                echo '<td>'.$linha['cidadeforn '].'</td>';
                echo  '<td> <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-square"></i></button></tr>'; 
            
            }
            
        ?>
     </table>

       <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Elas Fruts</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Rita de Kassia Santos 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Entrar em contato</button>
            </div>
            </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
<footer>Rita de Kássia &copy 2023</footer>
</html>

















