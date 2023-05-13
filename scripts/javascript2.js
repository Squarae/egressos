function exerce(){
    var atvdProfissionalSim = document.getElementById('atvdProfissionalSim');
    var atvdProfissionalSimInstituicao = document.getElementById('atvdProfissionalSimInstituicao');
    var atvdProfissionalSimData = document.getElementById("atvdProfissionalSimData");
    var atvdProfissionalExercia = document.getElementById("atvdProfissionalExercia");
    var atvdProfissionalExerciaInstituicao = document.getElementById("atvdProfissionalExerciaInstituicao");
    var atvdProfissionalExerciaDataDeInicio = document.getElementById("atvdProfissionalExerciaDataDeInicio");
    var atvdProfissionalExerciaDataDeFinal = document.getElementById("atvdProfissionalExerciaDataDeFinal");
    var atvdProfissionalNaoExerce = document.getElementById("atvdProfissionalNaoExerce");
    var atvdProfissionalNaoExerceu = document.getElementById("atvdProfissionalNaoExerceu");

    atvdProfissionalSim.disabled = false;
    atvdProfissionalSimInstituicao.disabled = false;
    atvdProfissionalSimData.disabled = false;

    atvdProfissionalNaoExerce.disabled = false;

}

function naoExerce(){
    var atvdProfissionalSim = document.getElementById('atvdProfissionalSim');
    var atvdProfissionalSimInstituicao = document.getElementById('atvdProfissionalSimInstituicao');
    var atvdProfissionalSimData = document.getElementById("atvdProfissionalSimData");
    var atvdProfissionalExercia = document.getElementById("atvdProfissionalExercia");
    var atvdProfissionalExerciaInstituicao = document.getElementById("atvdProfissionalExerciaInstituicao");
    var atvdProfissionalExerciaDataDeInicio = document.getElementById("atvdProfissionalExerciaDataDeInicio");
    var atvdProfissionalExerciaDataDeFinal = document.getElementById("atvdProfissionalExerciaDataDeFinal");
    var atvdProfissionalNaoExerce = document.getElementById("atvdProfissionalNaoExerce");
    var atvdProfissionalNaoExerceu = document.getElementById("atvdProfissionalNaoExerceu");

    atvdProfissionalSim.disabled = false;
    atvdProfissionalSimInstituicao.disabled = true;
    atvdProfissionalSimData.disabled = true;

    atvdProfissionalNaoExerce.disabled = false;
    atvdProfissionalSimInstituicao.value = "";
    atvdProfissionalSimData.value = "";

}

function exerceu(){
    var atvdProfissionalSim = document.getElementById('atvdProfissionalSim');
    var atvdProfissionalSimInstituicao = document.getElementById('atvdProfissionalSimInstituicao');
    var atvdProfissionalSimData = document.getElementById("atvdProfissionalSimData");
    var atvdProfissionalExercia = document.getElementById("atvdProfissionalExercia");
    var atvdProfissionalExerciaInstituicao = document.getElementById("atvdProfissionalExerciaInstituicao");
    var atvdProfissionalExerciaDataDeInicio = document.getElementById("atvdProfissionalExerciaDataDeInicio");
    var atvdProfissionalExerciaDataDeFinal = document.getElementById("atvdProfissionalExerciaDataDeFinal");
    var atvdProfissionalNaoExerce = document.getElementById("atvdProfissionalNaoExerce");
    var atvdProfissionalNaoExerceu = document.getElementById("atvdProfissionalNaoExerceu");


    atvdProfissionalExercia.disabled = false;
    atvdProfissionalExerciaInstituicao.disabled = false;
    atvdProfissionalExerciaDataDeInicio.disabled = false;
    atvdProfissionalExerciaDataDeFinal.disabled = false;

    atvdProfissionalNaoExerceu.disabled = false;
}

function naoExerceu(){
    var atvdProfissionalSim = document.getElementById('atvdProfissionalSim');
    var atvdProfissionalSimInstituicao = document.getElementById('atvdProfissionalSimInstituicao');
    var atvdProfissionalSimData = document.getElementById("atvdProfissionalSimData");
    var atvdProfissionalExercia = document.getElementById("atvdProfissionalExercia");
    var atvdProfissionalExerciaInstituicao = document.getElementById("atvdProfissionalExerciaInstituicao");
    var atvdProfissionalExerciaDataDeInicio = document.getElementById("atvdProfissionalExerciaDataDeInicio");
    var atvdProfissionalExerciaDataDeFinal = document.getElementById("atvdProfissionalExerciaDataDeFinal");
    var atvdProfissionalNaoExerce = document.getElementById("atvdProfissionalNaoExerce");
    var atvdProfissionalNaoExerceu = document.getElementById("atvdProfissionalNaoExerceu");


    atvdProfissionalExercia.disabled = false;
    atvdProfissionalExerciaInstituicao.disabled = true;
    atvdProfissionalExerciaDataDeInicio.disabled = true;
    atvdProfissionalExerciaDataDeFinal.disabled = true;

    atvdProfissionalNaoExerceu.disabled = false;
    atvdProfissionalExerciaInstituicao.value = "";
    atvdProfissionalExerciaDataDeInicio.value = "";
    atvdProfissionalExerciaDataDeFinal.value = "";

}

// function validaAtvdProfissional(){
//     var radios = document.getElementsByName("flexRadioDefault").value;
//     var radios1 = document.getElementsByName("flexRadioDefault-1").value;
//     var atvdProfissionalSimInstituicao = document.getElementById("atvdProfissionalSimInstituicao");
//     var atvdProfissionalSimData = document.getElementById("atvdProfissionalSimData");
//     var atvdProfissionalExerciaInstituicao = document.getElementById("atvdProfissionalExerciaInstituicao");
//     var atvdProfissionalExerciaDataDeInicio = document.getElementById("atvdProfissionalExerciaDataDeInicio");
//     var atvdProfissionalExerciaDataDeFinal = document.getElementById("atvdProfissionalExerciaDataDeFinal");

//     if(radios.checked == "SimExerce" && (atvdProfissionalSimInstituicao.value == "" || atvdProfissionalSimData.value == "")){
//         alert("Por favor, informe o nome da instituição e a data de início!");
//         window.location.href="egressos-area-profissional.php";
//         return;
//     }else if(radios1.checked == "Exerceu" && (atvdProfissionalExerciaInstituicao.value == "" || atvdProfissionalExerciaDataDeInicio.value == "" || atvdProfissionalExerciaDataDeFinal.value == "")){
//         alert("Por favor, informe o nome da instituição, a data de início e a data fim");
//         window.location.href="egressos-area-profissional.php";
//         return;
//     }

    
// }

function validaAtvdProfissional(){
    var sim = document.getElementById('atvdProfissionalSim');
    var simInstituicao = document.getElementById('atvdProfissionalSimInstituicao');
    var simData = document.getElementById("atvdProfissionalSimData");
    var exercia = document.getElementById("atvdProfissionalExercia");
    var exerciaInstituicao = document.getElementById("atvdProfissionalExerciaInstituicao");
    var exerciaDataDeInicio = document.getElementById("atvdProfissionalExerciaDataDeInicio");
    var exerciaDataFinal = document.getElementById("atvdProfissionalExerciaDataDeFinal");
    var atvdProfissionalNaoExerce = document.getElementById("atvdProfissionalNaoExerce");
    var atvdProfissionalNaoExerceu = document.getElementById("atvdProfissionalNaoExerceu");

    if ((!sim.checked && !atvdProfissionalNaoExerce.checked) || (!atvdProfissionalNaoExerceu.checked &&!exercia.checked)){
            alert('Selecione pelo menos duas das quatro opções.');
            return;
    }else if((sim.checked && exercia.checked) && (exerciaInstituicao.value == '' || simData.value == '' || simInstituicao.value == '' || exerciaDataDeInicio.value == '' || exerciaDataFinal.value == '')){
            alert("Preencha todos os campos que estão em branco se você exerce e execeu alguma atividade profissional.");
            return;
    }else if ((sim.checked && atvdProfissionalNaoExerceu.checked) && (simInstituicao.value == '' || simData.value == '')){
            alert('Preencha todos os campos em branco se você exerce alguma atividade profissional.');
            return;
    }else if ((exercia.checked && atvdProfissionalNaoExerce.checked) && (exerciaInstituicao.value == '' || exerciaDataDeInicio.value == '' || exerciaDataFinal.value == '')){
            alert('Preencha todos os campos em branco se você exerceu alguma atividade profissional.');
            return;
    } else {
            document.getElementById('btn-atvProf').type = "submit";
            return;
    }
//     }else{
//         document.getElementById('btn-atvProf').type = "submit";
//         return;
//     }

//     }else{
//         document.getElementById('btn-atvProf').type = "submit";
//         return;
//     }
// } else {
//     document.getElementById('btn-atvProf').type = "submit";
//     return;
// }
}