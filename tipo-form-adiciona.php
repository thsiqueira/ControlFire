<?php 
include 'cabecalho-menu.php';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
</head>

<h1>Adicionar Tipo</h1>
<form action="tipo-adiciona.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value="" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Salvar</button> </td>
        </tr>
    </table>
</form>



<?php 
include 'rodape.php';
?>