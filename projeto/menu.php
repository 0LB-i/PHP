<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lista-clientes.php">Lista Clientes<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastro-cidade.php">Cadastro Cidades<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
        if (isset($_SESSION['erro'])) {
            echo "<script>mensagem_erro('" . $_SESSION['erro'] . "')</script>";
            unset($_SESSION['erro']);
        }

        if (isset($_SESSION['sucesso'])) {
            echo "<script>mensagem_sucesso('" . $_SESSION['sucesso'] . "')</script>";
            unset($_SESSION['sucesso']);
        }

?>

