<html>
    <head>
        <title>Cadastre-se</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="config/function.php" method="POST">
                <label>Nome</label>
                <input class="form-control" type="text" name="nome" required placeholder="Nome"/>

                <label>Email</label>
                <input class="form-control" type="email" name="email" required placeholder="Email"/>

                <label>Telefone</label>
                <input class="form-control" type="text" name="telefone" required placeholder="Telefone"/>

                <label>Dia</label>
                <input class="form-control" type="number" name="dia" required placeholder="Dia"/>

                <label>Mês</label>
                <input class="form-control" type="number" name="mes" required placeholder="Mês"/>

                <label>Ano</label>
                <input class="form-control" type="number" name="ano" required placeholder="Ano"/>

                <label>Senha</label>
                <input class="form-control" type="password" name="senha" required placeholder="Senha"/>


                <button class="btn btn-primary" name="cadastrar">Cadastrar</button>

            </form>
        </div>
    </body>
</html>