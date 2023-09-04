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

    <!-- Navbar Lateral -->
    <nav class="nav-lateral" >
        <a class="text-nav-lateral" href="listaprodut.php"><i class="bi bi-bag-fill"></i> Produtos</a>
        <a class="text-nav-lateral" href="#"><i class="bi bi-truck"></i> Fornecedores</a>
        <a class="text-nav-lateral" href="#"><i class="bi bi-share"></i> Indicar essa pagina</a>
        <a class="text-nav-lateral" href="#"><i class="bi bi-question-square"></i> Duvidas</a>
        <a class="text-nav-lateral" href="#"><i class="bi bi-file-text"></i> Termos de Uso</a>
        <a class="text-nav-lateral" href="#"><i class="bi bi-file-person-fill"></i> Contatos</a>
    </nav>
<!-- /Navbar Lateral -->

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
    
    <!-- <form class="form-pesquesa" action="">
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

    </form> -->

    <table class="table">
        <thead>
            <div class="title-table">
            <tr >
                <th scope="col">Razão Social</th>
                <th scope="col">Tipo</th>
                <th scope="col">Cidade</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Telefone</th>
               
            </tr>
            </div>
        </thead>
        <tbody>
        <?php
         while($linha = mysqli_fetch_array($qry)){
        ?>
        <tr>
            <?php  $id = $linha['id'];?>
            <td><?php echo $linha['razaosocial'] ?></td>
            <td><?php echo $linha['prod'] ?></td>
            <td><?php echo $linha['cidadeforn']?></td>
            <td><?php echo $linha['cnpj']?></td>
            <td><?php echo $linha['telforn']?></td>
            <td><button type="button" class="btn view_data"  id="<?php echo $id = $linha['id'];?>"><i class="bi bi-plus-square"></i></button></td>
        </tr>
        <?php
         }?>

         </tbody>
     </table>

       <!-- Modal 
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
    </div> -->
        </main>


    <!-- Footer -->
    <footer class="p-5 bg-success text-white text-center position-relative">
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

















