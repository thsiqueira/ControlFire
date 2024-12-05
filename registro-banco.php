<?php

function listaRegistro($conexao): array {
    $registros = array();

    $query = "select c.id, c.cidade, c.estado, c.descricao, c.tipo_id, t.nome as tipo_nome, c.data_hora
          from meusregistros c
          inner join tipo t on c.tipo_id = t.id";
    $instrucao = $conexao->prepare($query);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    
    while ($registro = $resultado->fetch_assoc()) {
        array_push($registros, $registro);
    }

    return $registros;
}




function removeRegistro($conexao, $id){
    $query = "delete from meusregistros where id = ?";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('i', $id);
    return $instrucao->execute();
}



