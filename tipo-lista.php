<?php 
include 'cabecalho-menu.php';
include 'conexao.php';
include 'tipo-banco.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Incluindo o arquivo CSS lista.css que está na pasta css -->
    <link rel="stylesheet" href="css/lista.css">
</head>

<table class="table table-striped table-bordered">
    <?php
    $tipos = listaTipo($conexao);
    foreach ($tipos as $tipo) {
    ?>
        <tr>
            <td><?=$tipo['nome']?></td>
        </tr>
    <?php
    }
    ?>
</table>

<?php 
include 'rodape.php';
?>
