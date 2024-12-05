<?php

function adicionaQueimada($conexao, $cidade, $estado, $descricao, $tipo_id, $data_hora) {
   
    $query1 = "insert into queimadas (cidade, estado, descricao, tipo_id, data_hora) values (?, ?, ?, ?, ?)";
    $instrucao1 = $conexao->prepare($query1);
    $instrucao1->bind_param('sssis', $cidade, $estado, $descricao, $tipo_id, $data_hora);
    $instrucao1->execute();
    
    $queimada_id = $conexao->insert_id;

    $query2 = "insert into meusregistros (cidade, estado, descricao, tipo_id, data_hora, queimada_id) values (?, ?, ?, ?, ?, ?)";
    $instrucao2 = $conexao->prepare($query2);
    $instrucao2->bind_param('sssisi', $cidade, $estado, $descricao, $tipo_id, $data_hora, $queimada_id);
    return $instrucao2->execute(); 
}


function listaQueimada($conexao): array {
    $queimadas = array();
    
    
    $query = "select c.id, c.cidade as cidade, c.estado as estado, c.descricao, t.nome as nome_tipo, c.data_hora
              from queimadas c
              inner join tipo t ON c.tipo_id = t.id";  
    
    $instrucao = $conexao->prepare($query);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    
    while ($queimada = $resultado->fetch_assoc()) {
        array_push($queimadas, $queimada);
    }

    return $queimadas;
}
function removeQueimada($conexao, $id){
    $query = "delete from queimadas where id = ?";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('i', $id);
    return $instrucao->execute();
}


function buscaQueimadaPorId($conexao, $id){
    $query = "select id, cidade, estado, descricao, tipo_id from queimadas where id = ?";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('i', $id);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    return $resultado->fetch_assoc();
}
function alteraQueimada($conexao, $id, $cidade, $estado, $descricao, $tipo_id) {
   
    $query = "UPDATE queimadas SET cidade = ?, estado = ?, descricao = ?, tipo_id = ? WHERE id = ?";

    
    $instrucao = $conexao->prepare($query);

    
    $instrucao->bind_param('ssssi', $cidade, $estado, $descricao, $tipo_id, $id);

    
    return $instrucao->execute();
}


?>
