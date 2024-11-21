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

function listaConsumoCafe($conexao): array {
    $consumos = array();

    $query = "
        SELECT ca.nome AS cafe_nome, SUM(co.quantidade) AS quantidade_total
        FROM consumo co
        INNER JOIN cafe ca ON ca.id = co.cafe_id
        GROUP BY co.cafe_id
    ";

    $instrucao = $conexao->prepare($query);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    
    while ($consumo = $resultado->fetch_assoc()) {
        array_push($consumos, $consumo);
    }

    return $consumos;
}




function removeRegistro($conexao, $id){
    $query = "delete from meusregistros where id = ?";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('i', $id);
    return $instrucao->execute();
}



