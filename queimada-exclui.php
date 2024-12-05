<?php 
include 'cabecalho-menu.php';
include 'conexao.php';
include 'queimada-banco.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Tipo</title>
    <style>
        .text-success {
            color: white;
            font-weight: bold;
            background-color: green;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .text-danger {
            color: white;
            font-weight: bold;
            background-color: red;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$id = $_POST['id'];
$descricao = $_POST['descricao'];

$excluiu = removeQueimada($conexao, $id);
if ($excluiu) {
    ?>
    <p class="text-success">Registro "<?=$descricao?>" removido com sucesso.</p>
<?php
} else {
    ?>
    <p class="text-danger">Erro ao tentar remover o registro.</p>
<?php
}
?>

<?php 
include 'rodape.php';
?>

</body>
</html>
