<?php 
include 'cabecalho-menu.php'; 
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
</head>

<div class="container">
    <h1>Login</h1>

    <form action="login-processo.php" method="POST">
        <table class="table">
            <tr>
            <td>Email *</td>
                <td><input class="form-control" type="email" name="email" placeholder="Digite seu e-mail" required /></td>
            </tr>
            <tr>
                <td>Senha *</td> 
                <td><input class="form-control" type="password" name="senha" placeholder="Digite sua senha" required /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label>
                        <input type="checkbox" name="lembrar" /> Lembrar-me
                    </label>
                </td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Entrar</button></td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="redefinir-senha.php" class="link-redefinir">Esqueci minha senha</a>
                </td>
            </tr>
        </table>
    </form>
</div>


<?php 
include 'rodape.php'; // Inclua seu rodapé conforme necessário
?>
