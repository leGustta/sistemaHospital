function enviardados() {

if (document.valida.NomeCompleto.value == ""||
    document.valida.NomeCompleto.value.length <8) {
    alert("Preencha campo NOMECOMPLETO corretamente!");
    document.valida.NomeCompleto.focus();
    return false;
}

if (document.valida.MedicoResponsavel.value == "" ||
    document.valida.email.value.indexOf('.') == -1) {
    alert("Preencha o campo MEDICORESPONSÁVEL corretamente!");
    document.valida.tx_MedicoResponsavel.focus();
    return false;
}

if (document.valida.sintomas.value == "") {
    alert("Preencha o campo SINTOMAS!");
    Document.valida.tx_sintomas.focus();
    return false;
}

if (document.valida.cpf.value == "" ||
    document.valida.cpf.value.indexOf('.')
    == -1) {
    alert("Preencha o campo CPF corretamente!");
    document.valida.tx_cpf.focus();
    return false;
}

if (document.valida.idade.value == ""|| document.valida.idade.value.length <8) {
    alert("Preencha campo IDADE corretamente!");
    document.valida.idade.focus();
    return false;
}

return true
}