<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>



        form{
            width: 250px;
            margin: 50px auto 0;
            font-family: sans-serif;
        }


    </style>
</head>
<body>
    <main>
        <form method="post" action="conexao.php">

            <div>
                <label for="user">Digite seu Usuário</label>
                <input type="text" id="user" name="user" autofocus>
            </div>
            
            <div>
                <label for="senha">Digite sua Senha</label>
                <input type="password" id="senha" name="senha">
            </div>
            
            <div>
                <input type="submit" value="login" class="btn">
            </div>
            
        </form>
    </main>
</body>
</html>