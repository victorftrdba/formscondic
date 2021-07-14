function valida() {
    let nome = form.nome;
    let anoServico = form.anos;

    if (nome.value == '' || anoServico.value == '') {
        alert("Preencha corretamente os itens!");
    }
}