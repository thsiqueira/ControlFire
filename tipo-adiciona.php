<?php 
include 'cabecalho-menu.php';
include 'conexao.php';
include 'tipo-banco.php';
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

$nome = $_POST['nome'];
$existeTipo = tiposPorNome($conexao, $nome);
    if($existeTipo == 0){
        $adicionou = adicionaTipo($conexao, $nome);
        if ($adicionou){
        ?>
        <p class="text-success">Tipo <?=$nome?> inserido com sucesso.</p>
        <?php
        }
        else{
        ?>
        <p class="text-danger">Erro ao tentar inserir o tipo <?=$nome?>.</p>
        <?php
        }
    }
    else {
        ?>
        <p class="text-danger"> "O tipo de café "<?=$nome?>" já existe na lista de tipos.</p>
        <?php
    }

?>

<?php 
include 'rodape.php';
?>

</body>
</html>
