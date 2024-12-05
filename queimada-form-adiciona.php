<?php 
include 'cabecalho-menu.php';
include 'conexao.php';
include 'queimada-banco.php';
include 'tipo-banco.php';

$tipos = listaTipo($conexao);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/inicial.css">

</head>

<h1>Alertar Queimada ou Incêndio</h1>
<form action="queimada-adiciona.php" method="post" name="formqueimada">
    <table class="table">
        <tr>
            <td>Data</td>
            <td><input class="form-control" type="date" name="data" /></td>
        </tr>
        <tr>
            <td>Hora</td>
            <td><input class="form-control" type="time" name="hora" /></td>
        </tr>
        <tr>
            <td>Cidade *</td>
            <td><input class="form-control" type="text" name="cidade" id="nome" value="" /></td>
        </tr>
        <tr>
            <td>Estado *</td>
            <td><input class="form-control" type="text" name="estado" id="nome" value="" /></td>
        </tr>
        <tr>
            <td>Descrição *</td>
            <td><textarea class="form-control" name="descricao" id="descricao" ></textarea></td>
        </tr>
        <tr>
            <td>Tipo *</td>
            <td>
                <select class="form-control" name="tipo_id">
                    <?php
                    foreach($tipos as $tipo)
                    {
                        $opcaoSelecionada = ($queimada['tipo_id'] == $tipo['id']) ? "selected='selected'" : "";
                    ?>
                    <option value="<?=$tipo['id']?>">  <?=$tipo['nome']?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Salvar</button></td>
        </tr>
    </table>
</form>

<div id="msg-erro"><p class="text-danger"></p></div>



<?php 
include 'rodape.php';
?>

<script src="js/funcoes/queimada.js"></script>