function validaForm() {
    let msg = "* Preencha os campos obrigatórios.";
    let vazio = 0;

   
    document.getElementById('msg-erro').innerHTML = '';

    
    let cidade = document.getElementById('cidade').value;
    let estado = document.getElementById('estado').value;
    let descricao = document.getElementById('descricao').value;
    let tipo = document.getElementById('tipo_id').value;

    
    if (cidade === '') vazio++;
    if (estado === '') vazio++;
    if (descricao === '') vazio++;
    if (tipo === '') vazio++;

    
    if (vazio > 0) {
        document.getElementById('msg-erro').innerHTML = msg;
        return false; 
    }
    
    document.formqueimada.action = destino;
    document.formqueimada.submit(); 
}
