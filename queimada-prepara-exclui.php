<?php 
include 'cabecalho-menu.php';
include 'conexao.php';
include 'queimada-banco.php';
include 'tipo-banco.php';


$id = $_POST['id'];

$queimada = buscaQueimadaPorID($conexao, $id);
$tipos = listaTipo($conexao);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/inicial.css">

</head>

<h1>Confirma a remoção desta queimada?</h1>
<form action="queimada-exclui.php" method="post">
    <input type="hidden" name="id" value="<?=$queimada['id']?>" />
    <table class="table">
        <tr>
            <td>Cidade</td>
            <td><input class="form-control" type="text" name="cidade" value="<?=$queimada['cidade']?>" readonly /></td>
        </tr>
        <tr>
            <td>Estado</td>
            <td><input class="form-control" type="text" name="estado" value="<?=$queimada['estado']?>" readonly /></td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao" readonly><?=$queimada['descricao']?></textarea></td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td>
                <select class="form-control" name="tipo_id" disabled>
                    <?php
                    foreach($tipos as $tipo)
                    {
                        $opcaoSelecionada = ($queimada['tipo_id'] == $tipo['id']) ? "selected='selected'" : "";
                    ?>
                    <option value="<?=$tipo['id']?>" <?=$opcaoSelecionada?> > <?=$tipo['nome']?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Remover</button> </td>
        </tr>
    </table>
</form>




<?php 
include 'rodape.php';
?>