function valida() {
    /*
    AS VARIÁVEIS ABAIXO RECEBERAM
    OS IDs DO FORMULÁRIO
    FORMULÁRIO : id=form
    NOME : id=nome
    ANOS DE SERVIÇO : id=anos
    */
    let nome = form.nome;
    let anoServico = form.anos;
    /*
    O BLOCO DE CÓDIGO ABAIXO
    SERVE PARA VERIFICAR SE HÁ
    OU NÃO DADOS PARA SEREM
    RECEBIDOS NO FORMULÁRIO
    */
    if (nome.value == '') {
        alert("Preencha corretamente os itens!");
    }
    if (anoServico.value == '') {
        alert("Preencha corretamente os itens!");
    }
}