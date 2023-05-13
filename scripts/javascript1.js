function validaFormacao(){
    var radios = document.getElementsByName("exampleRadios");
    var formacaoConclEgresso = document.getElementById("formacaoConclEgresso");
    var formacaoBolsaConclEgresso = document.getElementById("formacaoBolsaConclEgresso");
    var formacaoEscolaEgresso = document.getElementById("formacaoEscolaEgresso");
    var formacaoInicioEscolaEgresso = document.getElementById("formacaoInicioEscolaEgresso");
    var formacaoConclusaoEscolaEgresso = document.getElementById("formacaoConclusaoEscolaEgresso");
    // var formaocaoUniversidadeEgresso = document.getElementById("formaocaoUniversidadeEgresso");
    // var formacaoMonografiaEgresso = document.getElementById("formacaoMonografiaEgresso");
    // var formacaoOrientadorEgresso = document.getElementById("formacaoOrientadorEgresso");
    var formacaoEmAndamentoEgresso = document.getElementById("formacaoEmAndamentoEgresso");
    var formacaoInstituicaoEgresso = document.getElementById("formacaoInstituicaoEgresso");
    var formacaoInicioEmAndamentoEscolaEgresso = document.getElementById("formacaoInicioEmAndamentoEscolaEgresso");
    
    // var controle = 0;
    // var posicaoRadio = 0;

    // for(var i = 0; i < radios.length; i++) {
    //     if(radios[i].checked) {
    //         controle += 1;
    //         posicaoRadio = i;
    //     }
    // }


// if(formacaoConclEgresso.value == "nd" || formacaoBolsaConclEgresso.value == "nd" || formacaoEscolaEgresso == "" || formacaoEmAndamentoEgresso.value == "nd" || formacaoInstituicaoEgresso.value == ""){
//     alert("Preencha todos os campos em corretamente!");
//     window.location.href="egressos-formacao-academica.php";
//     return;
// } else {
//     document.getElementById('btn-formAcademica').type = "submit";
//     return;
// }

    if(formacaoConclEgresso.value == "nd" || formacaoBolsaConclEgresso.value == "nd" || formacaoEscolaEgresso.value == "" || formacaoInicioEscolaEgresso == "" || formacaoConclusaoEscolaEgresso == "" || formacaoEmAndamentoEgresso.value == "nd" || formacaoInstituicaoEgresso.value == "" || formacaoInicioEmAndamentoEscolaEgresso == "") {
        alert("Preencha todos os campos corretamente!");
        return;
    } else {
        document.getElementById('btn-formAcademica').type = "submit";
        return;
    }
}

// }

// function formConcluida(){
//     var formacaoConclEgresso = document.getElementById("formacaoConclEgresso");
//     var formacaoBolsaConclEgresso = document.getElementById("formacaoBolsaConclEgresso");
//     var formacaoEscolaEgresso = document.getElementById("formacaoEscolaEgresso");
//     var formacaoInicioEscolaEgresso = document.getElementById("formacaoInicioEscolaEgresso");
//     var formacaoConclusaoEscolaEgresso = document.getElementById("formacaoConclusaoEscolaEgresso");
//     var formaocaoUniversidadeEgresso = document.getElementById("formaocaoUniversidadeEgresso");
//     var formacaoMonografiaEgresso = document.getElementById("formacaoMonografiaEgresso");
//     var formacaoOrientadorEgresso = document.getElementById("formacaoOrientadorEgresso");
//     var formacaoEmAndamentoEgresso = document.getElementById("formacaoEmAndamentoEgresso");
//     var formacaoInstituicaoEgresso = document.getElementById("formacaoInstituicaoEgresso");
//     var formacaoInicioEmAndamentoEscolaEgresso = document.getElementById("formacaoInicioEmAndamentoEscolaEgresso");


//     formacaoConclEgresso.disabled = false;
//     formacaoBolsaConclEgresso.disabled = false;
//     formacaoEscolaEgresso.disabled = false;
//     formacaoInicioEscolaEgresso.disabled = false;
//     formacaoConclusaoEscolaEgresso.disabled = false;
//     formaocaoUniversidadeEgresso.disabled = false;
//     formacaoMonografiaEgresso.disabled = false;
//     formacaoOrientadorEgresso.disabled = false;
//     formacaoEmAndamentoEgresso.disabled = true;
//     formacaoInstituicaoEgresso.disabled = true;
//     formacaoInicioEmAndamentoEscolaEgresso.disabled = true;
//     formacaoInicioEmAndamentoEscolaEgresso.value = "";
//     formacaoEmAndamentoEgresso.value = "";
//     formacaoInstituicaoEgresso.value = "";
// }

// function formEmAndamento(){
//     var formacaoConclEgresso = document.getElementById("formacaoConclEgresso");
//     var formacaoBolsaConclEgresso = document.getElementById("formacaoBolsaConclEgresso");
//     var formacaoEscolaEgresso = document.getElementById("formacaoEscolaEgresso");
//     var formacaoInicioEscolaEgresso = document.getElementById("formacaoInicioEscolaEgresso");
//     var formacaoConclusaoEscolaEgresso = document.getElementById("formacaoConclusaoEscolaEgresso");
//     var formaocaoUniversidadeEgresso = document.getElementById("formaocaoUniversidadeEgresso");
//     var formacaoMonografiaEgresso = document.getElementById("formacaoMonografiaEgresso");
//     var formacaoOrientadorEgresso = document.getElementById("formacaoOrientadorEgresso");
//     var formacaoEmAndamentoEgresso = document.getElementById("formacaoEmAndamentoEgresso");
//     var formacaoInstituicaoEgresso = document.getElementById("formacaoInstituicaoEgresso");
//     var formacaoInicioEmAndamentoEscolaEgresso = document.getElementById("formacaoInicioEmAndamentoEscolaEgresso");


//     formacaoConclEgresso.disabled = true;
//     formacaoBolsaConclEgresso.disabled = true;
//     formacaoEscolaEgresso.disabled = true;
//     formacaoInicioEscolaEgresso.disabled = true;
//     formacaoConclusaoEscolaEgresso.disabled = true;
//     formaocaoUniversidadeEgresso.disabled = true;
//     formacaoMonografiaEgresso.disabled = true;
//     formacaoOrientadorEgresso.disabled = true;
//     formacaoEmAndamentoEgresso.disabled = false;
//     formacaoInstituicaoEgresso.disabled = false;
//     formacaoInicioEmAndamentoEscolaEgresso.disabled = false;
//     formacaoConclEgresso.value = "";
//     formacaoBolsaConclEgresso.value = "";
//     formacaoEscolaEgresso.value = "";
//     formacaoInicioEscolaEgresso.value = "";
//     formacaoConclusaoEscolaEgresso.value = "";
//     formacaoMonografiaEgresso.value = "";
//     formaocaoUniversidadeEgresso.value = "";
//     formacaoOrientadorEgresso.value = "";
    
// }
