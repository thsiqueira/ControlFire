<?php 
include 'cabecalho-menu.php';
include 'conexao.php';
include 'queimada-banco.php';

$id = $_POST['id'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$descricao = $_POST['descricao'];
$tipo_id = $_POST['tipo_id'];

$alterou = alteraQueimada($conexao, 
$id, 
$cidade,
$estado,
$descricao, 
$tipo_id);
if ($alterou){
    ?>
    <p class="text-sucess">Queimada alterada com sucesso.</p>
<?php
}
else{
    ?>
    <p class="text-danger">Erro ao tentar alterar o registro.</p>
    <?php
}

?>



<?php 
include 'rodape.php';
?>