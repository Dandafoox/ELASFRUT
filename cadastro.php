<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background:pink;
    }
    .btn{
        text-decoration:none;
    }
</style>

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
<div class="container">
    <div class="row">
    <div class="col">

    <h1>Formulario de cadastro</h1>
<form >
   <h4>Dados Pessoais</h4>
  <div class="mb-3">
    <label class="form-label">Nome Completo:</label>
    <input type="text" class="form-text" >
  
  </div>
  <div class="row">
  <div class="col">
  <div class="mb-3">
    <label class="form-label">CPF :</label>
    <input type="text" class="form-text" >
  </div>
  </div>
  </div>

  <div class="mb-3">
    <label class="form-label">Data de Nascimento :</label>
    <input type="date" class="form-text" >
  </div>
  </div>
  </div>

  <h4>Endereço</h4>

  <div class="mb-3">
    <label class="form-label">CEP :</label>
    <input type="text" class="form-text" >
  </div>

  <div class="mb-3">
    <label class="form-label">Rua:</label>
    <input type="text" class="form-text" >
  </div>

  <div class="mb-3">
    <label class="form-label">Complemento:</label>
    <input type="text" class="form-text" >
  </div>

  <div class="mb-3">
    <label class="form-label">Cidade :</label>
    <input type="text" class="form-text" >
  </div>

  <div class="mb-3">
    <label class="form-label">Estado:</label>
    <input type="text" class="form-text" >
  </div>

   <h4>Conatos</h4>

  <div class="mb-3">
    <label class="form-label">Telefone:</label>
    <input type="tel" class="form-text" >
  </div>

  <div class="mb-3">
    <label class="form-label">Celular :</label>
    <input type="text" class="form-text" >
  </div>

  <div class="mb-3">
    <label class="form-label">E-mail:</label>
    <input type="email" class="form-text" >
  </div>

  <div class="mb-3">
    <label class="form-label">Login :</label>
    <input type="text" class="form-text" >
  </div>

  <div class="mb-3">
    <label class="form-label">Senha:</label>
    <input type="password" class="form-text" >
  </div>



  <button type="submit" class="btn btn-primary">Cadastrar</button>
  <button><a href="index.php">Voltar</a></button>
  <p>Já tenho<a href="login.php">Login</a></p>
  

</form>
<div class="conatainer">

</body>
</html>