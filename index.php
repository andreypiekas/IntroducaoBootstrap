<html>
    <head>
        <title>Twitter</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="config/function.php" method="POST">
                <label>Login</label>
                <input class="form-control" type="email" name="email" required placeholder="Email"/>
                <label>Senha</label>
                <input class="form-control" type="password" name="senha" required placeholder="Senha"/>
                <button class="btn btn-primary" name="entrar">Entrar</button>
                <a class="btn btn-success" href="cadastro.php">Cadastre-se</a>

            </form>
        </div>
    </body>
</html>