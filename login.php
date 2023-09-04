<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container"> <br>
    <form action = "recebelogin.php" method ="post">
                <h3> Login </h3>

            <div class = "col-4">
                <div class = "form-floating">
                    <input type="email" name ="email" class = "form-control" id ="floatingInput" placeholder ="name@example.com">
                        <label for = "floatingInput"> E-mail </label>
                </div>
            </div>

            <div class="col-4">
                <div class="form-floating">
                    <input type ="password" name ="senha" class ="form-control" id ="floatingInput" placeholder ="password">
                        <label for = "floatingInput"> Senha </label>
                </div>
            </div>

            <div class="col-4">
                <button class = "btn btn-primary  w-100 py-2 mt-3" type ="submit"> Entrar </btn>
            </div>
            <hr>
            <h5> Ainda não tem login? </h5> <a href = "cadfo.php" name = "cadastre-se"> <h5> Cadastre-se </a> </h5> 

<p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
</body>
</html>