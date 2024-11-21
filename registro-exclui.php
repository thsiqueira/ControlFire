<?php 
include 'cabecalho-menu.php';
include 'conexao.php';
include 'registro-banco.php';

$id = $_POST['id'];  

$conexao->begin_transaction();

try {
    
    $query1 = "DELETE FROM meusregistros WHERE id = ?";
    $stmt1 = $conexao->prepare($query1);
    $stmt1->bind_param('i', $id);
    $stmt1->execute();

    
    $query2 = "DELETE FROM queimadas WHERE id = (SELECT queimada_id FROM meusregistros WHERE id = ?)";
    $stmt2 = $conexao->prepare($query2);
    $stmt2->bind_param('i', $id);
    $stmt2->execute();

    
    $conexao->commit();

    
    header("Location: registro-lista.php");
    exit;
} catch (Exception $e) {
    
    $conexao->rollback();
    echo "<p class='text-danger'>Erro ao tentar remover o registro: " . $e->getMessage() . "</p>";
}

?>

<?php 
include 'rodape.php';
?>
