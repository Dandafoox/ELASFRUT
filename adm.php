<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Pagina Administrador</title>

    <link rel="stylesheet" href="css/styleAdm.css">
</head>

<body>

    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary"><img src="./img/logo3.png" width="300px" height="300px"></h2>
                <p class="description description-primary">ElasFrut</p>
                <p class="description description-primary">Se alimentar direito também é autocuidado!</p>
                <button id="signin" class="btn btn-primary" type="submit">lOGIN</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Cadastro Adm</h2>
                <div class="social-midia">
                    <ul class="list-social-midia">
                        <a href="#"><img src="./img/facebook.png" width="20px" height="20px"></a>
                        <a href="#"><img class="midia" src="./img/gmail.png" width="20px" height="20px"></a>
                        <a href="#"><img class="midia" src="./img/linkedin.png" width="20px" height="20px"></a>
                    </ul>
                </div>

                <p class="description description-second ">Precisamos só de alguns dados para fazer seu cadastro:</p>

                <form class="form" action="">
                    <label class="label-input">
                         <i class="bi bi-person icon-modify"></i>
                        <input type="text" placeholder= " Nome " name="nomeadm">
                    </label>

                    <label class="label-input">
                        <i class="bi bi-envelope icon-modify"></i>
                        <input type="email"  placeholder=" E-mail " name="emailadm">
                    </label>

                    <label class="label-input">
                         <i class="bi bi-telephone icon-modify"></i>
                        <input type="tel"  placeholder=" Telefone " name="teladm">
                    </label>

                    <label class="label-input">
                        <i class="bi bi-eye icon-modify"></i>
                        <input type="password"  placeholder=" ****** " name="senha">
                    </label>

                    <button class="btn btn-second">CADASTRAR</button>

                    <p class="text-center text-danger">
                        <?php 
                            if(isset($_SESSION['loginErro'])){
                                echo $_SESSION['loginErro'];
                                unset ($_SESSION['loginErro']);
                            }
                        ?>
                    </p>
                    <p class="text-center text-success">
                        <?php 
                            if(isset($_SESSION['loginDeslogado'])){
                                echo $_SESSION['loginDeslogado'];
                                unset ($_SESSION['loginDeslogado']);
                            }
                        ?>
                    </p>

                </form>

            </div>
        </div>

        <div class="content second-content">
        <div class="first-column">
                <h2 class="title title-primary"><img src="./img/logo3.png" width="300px" height="300px"></h2>
                <p class="description description-primary">ElasFrut</p>
                <p class="description description-primary">Se alimentar direito também é autocuidado!</p>
                <button id="signup" class="btn btn-primary">cADASTRO</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Login de Acesso</h2>
                <div class="social-midia">
                    <ul class="list-social-midia">
                        <a class="intem-midia"href="#"><img src="./img/facebook.png" width="20px" height="20px"></a>
                        <a href="#"><img class="midia" src="./img/gmail.png" width="20px" height="20px"></a>
                        <a href="#"><img class="midia" src="./img/linkedin.png" width="20px" height="20px"></a>
                    </ul>
                </div>

                <p class="description description-second">Lorem ipsum dolor sit amet</p>

                <form class="form" action="">

                    <label class="label-input">
                        <i class="bi bi-envelope icon-modify"></i>
                        <input type="email"  placeholder=" E-mail ">
                    </label>

                    <label class="label-input">
                        <i class="bi bi-eye icon-modify"></i>
                        <input type="password"  placeholder=" ****** ">
                    </label>

                    <a class="password" href="#">Esqueceu sua senha?</a>
                    <button class="btn btn-second">ENTRAR</button>
                </form>

            </div>
        </div>
        </div>

    </div>
    <script src="js/app.js"></script>
    
</body>
</html>