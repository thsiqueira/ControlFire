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
    <title>Lista de Queimadas</title>
    <link rel="stylesheet" href="css/lista.css"> 
    <link href="css/inicial.css" rel="stylesheet" />
</head>
<body>
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Data e Hora</th>
                <th>Alterar</th>
                <th>Remover</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $queimadas = listaQueimada($conexao);

            
            foreach ($queimadas as $queimada) {
            ?>
                <tr>
                    <td><?=$queimada['cidade']?></td>
                    <td><?=$queimada['estado']?></td>
                    <td><?=$queimada['nome_tipo']?></td>
                    <td><?=$queimada['descricao']?></td>
                    <td><?= date('d/m/Y H:i:s', strtotime($queimada['data_hora'])) ?></td>
                    
                    
                    <td>
                        <form name="form-altera" method="post" action="queimada-form-edita.php">
                            <input type="hidden" name="id" value="<?=$queimada['id']?>" />
                            <button class="btn btn-primary">Alterar</button>
                        </form>
                    </td>
                    
                    
                    <td>
                        <form name="form-remove" method="post" action="queimada-prepara-exclui.php">
                            <input type="hidden" name="id" value="<?=$queimada['id']?>" />
                            <button class="btn btn-danger">Remover</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

<?php 
include 'rodape.php';
?>

</body>
</html>
