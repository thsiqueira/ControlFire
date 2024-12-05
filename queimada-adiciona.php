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
$data = $_POST['data'];
$hora = $_POST['hora'];

$data_hora = $data . ' ' . $hora;

$cidade = $_POST['cidade'];  
$estado = $_POST['estado'];  
$descricao = $_POST['descricao']; 
$tipo_id = $_POST['tipo_id']; 



$adicionou = adicionaQueimada($conexao, $cidade, $estado, $descricao, $tipo_id, $data_hora);

if ($adicionou) {
    ?>
    <p class="text-success">Queimada alertada com sucesso.</p>
    <?php
} else {
    ?>
    <p class="text-danger">Erro ao tentar alertar nova queimada.</p>
<?php
}
?>

<?php 
include 'rodape.php';
?>

</body>
</html>