<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../src/favicon.ico" type="image/x-icon">

    <title>Painel Admin | LOGIN</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../src/components/css/painel_login.css">
</head>
<body>
    <div class="container">
        <form action="" method="post" class="form_login">
            <div>
                <h1>LOGIN</h1>
            </div>
            <div class="campos">
                <div>
                    <div>
                        <label for="codigo_login">Código</label>
                    </div>
                    <div>
                        <input type="text" name="codigo_login" id="codigo_login">
                    </div>
                    <div>
                        <label for="senha_login">Senha</label>
                    </div>
                    <div>
                        <input type="password" name="senha_login" id="senha_login">
                    </div>
                    <div>
                        <input type="submit" value="ENTRAR" class="entrar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>