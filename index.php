<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Elas Frut</title>

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
                        <a href="#facaparte" class="nav-link">Faça Parte</a>
                    </li>

                    <li class="nav-item">
                        <a href="#noticias" class="nav-link">Notícias</a>
                    </li>

                    <li class="nav-item">
                        <a href="#quemsomos" class="nav-link">Quem Somos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /navbar -->


    <!-- carrossel -->
    <div id="carrosselAnuncios" class="carousel slide">

        <!-- indicadores para navegar no slide do carrossel  -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carrosselAnuncios" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carrosselAnuncios" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carrosselAnuncios" data-bs-slide-to="2"></button>
        </div>
        <!-- /indicadores para navegar no slide do carrossel  -->

        <!-- Slide carrossel  -->
        <div class="carousel-inner" style="height: 400px">
            <div class="carousel-item active">
                <img src="img/imgindex/farming.jpg" width="752" height="501" class="d-block w-100">
                <!-- AJUSTAR ESSA PARTE DO CODIGO, REDIMENSIONAR IMAGEM PRA APARECER POR COMPLETO NO CARROSSEL -->
                <div class="carousel-caption">
                    <h2> Verifique Nossos Forcenedores</h2>
                    <p>Melhor seleção de orgânicos do país </p>
                </div>
                <!-- AJUSTAR CÓDIGO -->
            </div>

            <div class="carousel-item">
                <img src="img/imgindex/7.jpg" width="1024" height="680" class="d-block w-100">
                <!-- AJUSTAR ESSA PARTE DO CODIGO, REDIMENSIONAR IMAGEM PRA APARECER POR COMPLETO NO CARROSSEL -->
                <div class="carousel-caption">
                    <h2> Verifique Nossos Forcenedores</h2>
                    <p>Melhor seleção de orgânicos do país </p>
                </div>
                <!-- AJUSTAR CODIGO -->
            </div>

            <div class="carousel-item">
                <img src="img/imgindex/5.jpg" width="400" height="400" class="d-block w-100">
            </div>
        </div>
        <!-- /Slide carrossel  -->

        <!-- botão anterior e proximo do slide -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carrosselAnuncios" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carrosselAnuncios" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        <!-- botão anterior e proximo do slide -->
    </div> 
    <!-- /carrossel -->

    <!-- Contacte-nos -->
    <section class="bg-success text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Nos Mande Uma Mensagem</h3>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Escreva sua mensagem" aria-label="mensagem">
                    <button class="btn btn-dark btn-lg" type="button">Enviar Mensagem</button>
                </div>

            </div>
        </div>
    </section>
    <!-- /Contacte-nos -->

    <!-- Quem somos nós -->
    <section class="bg-success text-light-p-5 text-center">
        <div class="container p-2">
            <h1 class="my-5">Quem somos nós</h1>
            <img src="img/imgindex/tomates.jpg" alt="" class="float-end w-25 rounded"/>
            <p>Somos uma empresa que aproxima produtores, principalmente produtores de orgânicos com o seu negócio. 
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
        </div>
    </section>
    <!-- /Quem somos nós -->

    <!-- Faça parte -->
    <section class="bg-dark text-light p-5 text-center text-sm-start" id="facaparte">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1> <span class="text-warning">Faça parte</span> da nossa lista de fornecedores</h1>
                    <p class="lead my-4">
                        Seja também um de nossos fornecedores e apareça para milhares de compradores por dia, na maior vitrine de orgânicos do Brasil. 
                    </p>
                    <a href="cadfo.php"><button class="btn btn-faca-parte btn-primary btn-lg">Faça Parte</button></a>
                </div>
                <img class="img-fluid w-50" src="imagens/2.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- /Faça parte -->

    <!-- Boxes -->
    <section class= "p-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md">
                    <div class="card bg-success text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>

                            <h3 class="card-title mb-3">
                                Virtual
                            </h3>

                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero tempora dolores, sequi praesentium fugit quibusdam.
                            </p>
                            <a href="#" class="btn btn-info">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-success text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person-square"></i>
                            </div>

                            <h3 class="card-title mb-3">
                                Hybrid
                            </h3>

                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero tempora dolores, sequi praesentium fugit quibusdam.
                            </p>
                            <a href="#" class="btn btn-info">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-success text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-people"></i>
                            </div>

                            <h3 class="card-title mb-3">
                                In person
                            </h3>

                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero tempora dolores, sequi praesentium fugit quibusdam.
                            </p>
                            <a href="#" class="btn btn-info">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Boxes -->

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
</body>
</html>