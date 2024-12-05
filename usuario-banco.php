<?php
function validaUsuario($conexao, $email, $senha){

    $passo1 = false;
    $passo2 = false;


    $query = " select id, email, senha from usuarios where email = ? ";

    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('s', $email);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    
    $passo1 = $resultado->fetch_assoc();
    if ($passo1){
        $passo2 = password_verify($senha, $passo1['senha']);
    }

    return $passo1 && $passo2;

}


?>