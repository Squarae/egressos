function autoResize()
    {
        objTextArea = document.getElementById('CurriculoObjetivos');
        while (objTextArea.scrollHeight > objTextArea.offsetHeight)
        {
            objTextArea.rows += 2;
        }
    }
    
function autoResize2()
{
    objTextArea = document.getElementById('CurriculoCertificacoesTitulo');
    while (objTextArea.scrollHeight > objTextArea.offsetHeight)
    {
        objTextArea.rows += 2;
    }
}

function validaDadosPessoais(){
    var DadosPessoaisNomeEgresso = document.getElementById("DadosPessoaisNomeEgresso");
    var DadosPessoaisGeneroEgresso = document.getElementById("DadosPessoaisGeneroEgresso");
    var DadosPessoaisCorRacaEgresso = document.getElementById("DadosPessoaisCorRacaEgresso");
    var DadosPessoaisCPFEgresso = document.getElementById("DadosPessoaisCPFEgresso");
    var DadosPessoaisNumRGEgresso = document.getElementById("DadosPessoaisNumRGEgresso");
    var DadosPessoaisOrgEmissorEgresso = document.getElementById("DadosPessoaisOrgEmissorEgresso");
    var DadosPessoaisCelularEgresso = document.getElementById("DadosPessoaisCelularEgresso");

    if(DadosPessoaisNomeEgresso.value == "" || DadosPessoaisCPFEgresso.value == "" || DadosPessoaisNumRGEgresso.value == "" || DadosPessoaisOrgEmissorEgresso.value == "" || DadosPessoaisCelularEgresso.value == "" || DadosPessoaisCorRacaEgresso.value == "nd" || DadosPessoaisGeneroEgresso.value == "nd" || typeof DadosPessoaisNomeEgresso.value !=="string" || typeof DadosPessoaisOrgEmissorEgresso.value !=="string"){
        alert("Preencha todos os campos em corretamente!");
        window.location.href="egressos-dados-pessoais.php";
        return;
    } else if(validacpf(DadosPessoaisCPFEgresso.value) !== true) {
        alert('CPF inválido');
        window.location.href="egressos-dados-pessoais.php";
        return;
    } else {
        document.getElementById("btn-dadosPessoais").type = "submit";
        return;
    }


}

function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") return false;
    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11))  Resto = 0;
        if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

    Soma = 0;
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11))  Resto = 0;
        if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
        return true;
}

function validacpf(res){
    // var res = DadosPessoaisCPFEgresso.value;
    var strCPF = res.replace(".", '')
    var strCPF = strCPF.replace(".", '')
    var strCPF = strCPF.replace("-",'')

    if (TestaCPF(strCPF) !== true){
        // alert('CPF inválido')

        return false;
    } else {
        return true;
    }
}

// function para a validação dos campos da página de cadastro dos egressos.
function validaCadastro(){
    var emailEgresso = document.getElementById("emailEgresso");
    var emailConfirmEgresso = document.getElementById("emailConfirmEgresso");
    var senhaEgresso = document.getElementById("senhaEgresso");
    var senhaConfirmEgresso = document.getElementById("senhaConfirmEgresso");
    var num = /[0-9]/g;
    var mai = /[A-Z]/g;
    var min = /[a-z]/g;
    var char = /[@#$%]/g;

if(emailEgresso.value == "" || emailConfirmEgresso.value == "" || senhaEgresso.value == "" || senhaConfirmEgresso.value == ""){
    alert("Preencha todos os campos em corretamente!");
    return;
    // verificando se as senhas dos campos de registro de senha na página de cadastro dos egressos é a mesma.
}else if (senhaEgresso.value != senhaConfirmEgresso.value || emailEgresso.value != emailConfirmEgresso.value){
    alert("As senhas e/ou os email's informados não conferem!")
    return;
}else if(senhaEgresso.value.length < 8 && senhaConfirmEgresso.value.length <8){
    alert("Insira uma senha com mais caracteres!");
    return;
}else if(senhaEgresso.value.search(char) == -1 && senhaConfirmEgresso.value.search(char) == -1){
    alert("Insira ao menos um desses caracteres: @, #, $, %");
    return;
}else if(senhaEgresso.value.search(num) == -1 && senhaConfirmEgresso.value.search(num) == -1){
    alert("Insira ao menos um número");
    return;
}else if(senhaEgresso.value.search(mai) == -1 && senhaConfirmEgresso.value.search(mai) == -1){
    alert("Insira ao menos uma letra maiúscula");
    return;
}else if(senhaEgresso.value.search(min) == -1 && senhaConfirmEgresso.value.search(min) == -1){
    alert("Insira ao menos uma letra minúscula");
    return;
}else{
    // window.location.href="egressos-login.php"
    document.getElementById('btn-envia').type = "submit";
    return;
}
}

// function de validação dos campos da página de login.
function validaLogin(){
    var loginEmail = document.getElementById("loginEmail");
    var loginSenha = document.getElementById("loginSenha");
    var num = /[0-9]/g;
    var mai = /[A-Z]/g;
    var min = /[a-z]/g;
    var char = /[@#$%]/g;

if(loginEmail.value == "" || loginSenha.value == ""){
    alert("Preencha todos os campos em corretamente!");
    window.location.href="egressos-login.php";
    return;
}else if(loginSenha.value.length < 8){
    alert("Insira uma senha com mais caracteres!");
    return;
}else if(loginSenha.value.search(char) == -1){
    alert("Insira ao menos um desses caracteres: @, #, $, %");
    return;
}else if(loginSenha.value.search(num) == -1){
    alert("Insira ao menos um número");
    return;
}else if(loginSenha.value.search(mai) == -1){
    alert("Insira ao menos uma letra maiúscula");
    return;
}else if(loginSenha.value.search(min) == -1){
    alert("Insira ao menos uma letra minúscula");
    return;
}else{
    document.getElementById('btn-login').type = "submit";
    return;
}

return;
}

// function de validação dos campos da página de enderço dos egressos.
function validaEndereco(){
    var EnderecoRuaEgresso = document.getElementById("EnderecoRuaEgresso");
    var EnderecoNumeroEgresso = document.getElementById("EnderecoNumeroEgresso");
    var EnderecoBairroEgresso = document.getElementById("EnderecoBairroEgresso");
    var EnderecoCidadeEgresso = document.getElementById("EnderecoCidadeEgresso");
    var EnderecoEstadoEgresso = document.getElementById("EnderecoEstadoEgresso");
    var EnderecoCEPEgresso = document.getElementById("EnderecoCEPEgresso");

if(EnderecoRuaEgresso.value == "" || EnderecoNumeroEgresso.value == "" || EnderecoBairroEgresso.value == "" || EnderecoCidadeEgresso.value == "" || EnderecoEstadoEgresso.value == "" || EnderecoCEPEgresso.value == ""){
    alert("Preencha todos os campos em corretamente!");
    return;
}else if(IsCEP(EnderecoCEPEgresso.value) !== true){
    alert('CEP inválido');
    window.location.href="egressos-endereco.php";
}else{
    document.getElementById('btn-endereco').type = "submit";
    return;
}
    return;
}

// Função para retirar os espaços em branco do início e do fim da string.
function Trim(strTexto)
{
    // Substitúi os espaços vazios no inicio e no fim da string por vazio.
    return strTexto.replace(/^\s+|\s+$/g, '');
}

// Função para validação de CEP.
function IsCEP(strCEP)
{
    // strCEP = document.getElementById("EnderecoCEPEgresso").value;
    // blnVazio = '0'
    // Caso o CEP não esteja nesse formato ele é inválido!
    var objER = /^[0-9]{2}\.[0-9]{3}-[0-9]{3}$/;

    strCEP = Trim(strCEP)
    if(strCEP.length > 0)
        {
            if(objER.test(strCEP)){
                return true;
            }else{
                // alert('CEP inválido');
                // window.location.href="egressos-endereco.php";
                return false;
            }
        } else {
            return false;
        }

}

// function de validação dos campos da página de recuperção de senha(email).
function validaRecuperacaoEmail(){
    var emailDeRecuperacao = document.getElementById("emailDeRecuperacao");
    
if(emailDeRecuperacao.value == ""){
    alert("Preencha todos os campos em corretamente!");
    return;
}else{
    document.getElementById('btn-recuperacaoEmail').type = "submit";
    return;
}
return;
}

// function de validação dos campos da página de recuperação de senha(senha).
function validaRecuperacaoSenha(){
    var recuperacaoSenha = document.getElementById("recuperacaoSenha");
    var recuperacaoSenhaConfirm = document.getElementById("recuperacaoSenhaConfirm");
    var num = /[0-9]/g;
    var mai = /[A-Z]/g;
    var min = /[a-z]/g;
    var char = /[@#$%]/g;

if(recuperacaoSenha.value == "" || recuperacaoSenhaConfirm.value == ""){
    alert("Preencha todos os campos em corretamente!");
    window.location.href="egressos-recuperacao-de-senha-validacao.php"
    return;
}else if(recuperacaoSenha.value != recuperacaoSenhaConfirm.value){
    alert("As senhas não conferem!");
}else if(recuperacaoSenhaConfirm.value.length < 8 && recuperacaoSenha.value.length < 8){
    alert("Insira uma senha com mais caracteres!");
    return;
}else if(recuperacaoSenha.value.search(char) == -1 && recuperacaoSenhaConfirm.value.search(char) == -1){
    alert("Insira ao menos um desses caracteres: @, #, $, %");
    return;
}else if(recuperacaoSenha.value.search(num) == -1 && recuperacaoSenhaConfirm.value.search(num) == -1 ){
    alert("Insira ao menos um número");
    return;
}else if(recuperacaoSenha.value.search(mai) == -1 && recuperacaoSenhaConfirm.value.search(mai) == -1){
    alert("Insira ao menos uma letra maiúscula");
    return;
}else if(recuperacaoSenha.value.search(min) == -1 && recuperacaoSenhaConfirm.value.search(min) == -1){
    alert("Insira ao menos uma letra minúscula");
    return;
}else{
    document.getElementById('btn-recuperacaoEmailSenha').type = "submit";
    return;
}
return;
}

// redirecionamento da página de login para a página de cadastro.
function cadastro(){
    window.location.href="egressos-cadastro.php"
}

// redirecionamento da página de cadastro para a página de login.
function login(){
    window.location.href="egressos-login.php"
}


//                  EXPERIÊNCIA PROFISSIONAL


// function para validação dos unicos tres campos da página de experiência profissional.
function validaExperienciaProfissional(){
    var CurriculoObjetivos = document.getElementById("CurriculoObjetivos");
    var CurriculoHabilidades = document.getElementById("CurriculoHabilidades");
    var CurriculoHabilidadesNivel = document.getElementById("CurriculoHabilidadesNivel");

if(CurriculoObjetivos.value =="" || CurriculoHabilidades.value =="" || CurriculoHabilidadesNivel.value =="nd"){
    alert("Prencha ao menos os campos de Objetivos e de Cursos!");
        return;
} else {
    document.getElementById('btn-expProf').type = "submit";
    return;
}

}

function validaExperiencias(idCampo){
    var CurriculoEsperienciaProfissionalExerceu = document.getElementById("CurriculoEsperienciaProfissionalExerceu"+idCampo);
    var CurriculoEsperienciaProfissionalExerceuDataIni = document.getElementById("CurriculoEsperienciaProfissionalExerceuDataIni"+idCampo);
    var CurriculoEsperienciaProfissionalDataFinal = document.getElementById("CurriculoEsperienciaProfissionalDataFinal"+idCampo);

    if((idCampo >= 1) && (CurriculoEsperienciaProfissionalExerceu.value == "" || CurriculoEsperienciaProfissionalExerceuDataIni.value == "" || CurriculoEsperienciaProfissionalDataFinal.value == "")){
        alert("Preencha os campos de onde você trabalhou, e os períodos de início e termino");
        return;
    }
}

function validaCursos(idCampos){
    var CurriculoHabilidades = document.getElementById("CurriculoHabilidades"+idCampos);
    var CurriculoHabilidadesNivel = document.getElementById("CurriculoHabilidadesNivel"+idCampos);

    if((idCampos>=1) && (CurriculoHabilidades || CurriculoHabilidadesNivel)){
        alert("Preencha todos os campos de cursos");
        return;
    }
}

// function para limpar a area de experiencia profissional
function limpaExperiencia(){
    var CurriculoEsperienciaProfissional = document.getElementById("CurriculoEsperienciaProfissional");
    var CurriculoEsperienciaProfissionalDataIni = document.getElementById("CurriculoEsperienciaProfissionalDataIni");
    // var CurriculoEsperienciaProfissionalExerceu = document.getElementById("CurriculoEsperienciaProfissionalExerceu");
    // var CurriculoEsperienciaProfissionalExerceuDataIni = document.getElementById("CurriculoEsperienciaProfissionalExerceuDataIni");
    // var CurriculoEsperienciaProfissionalDataFinal = document.getElementById("CurriculoEsperienciaProfissionalDataFinal");

    CurriculoEsperienciaProfissional.value = "";
    CurriculoEsperienciaProfissionalDataIni.value = "";
    // CurriculoEsperienciaProfissionalExerceu.value = "";
    // CurriculoEsperienciaProfissionalExerceuDataIni.value = "";
    // CurriculoEsperienciaProfissionalDataFinal.value = "";

}

function limpaExperiencia3(){
    var CurriculoEsperienciaProfissionalExerceu = document.getElementById("CurriculoEsperienciaProfissionalExerceu");
    var CurriculoEsperienciaProfissionalExerceuDataIni = document.getElementById("CurriculoEsperienciaProfissionalExerceuDataIni");
    var CurriculoEsperienciaProfissionalDataFinal = document.getElementById("CurriculoEsperienciaProfissionalDataFinal");
    var CurriculoEsperienciaProfissionalExerceuDataIni = document.getElementById("CurriculoEsperienciaProfissionalExerceuDataIni");

    CurriculoEsperienciaProfissionalExerceu.value = "";
    CurriculoEsperienciaProfissionalExerceuDataIni.value = "";
    CurriculoEsperienciaProfissionalDataFinal.value = "";
}

// function para limpar a area de Objetivos
function limpaObjetivos(){
    var CurriculoObjetivos = document.getElementById("CurriculoObjetivos");
    CurriculoObjetivos.value = "";
}
// function para limpar a area de Habilidades
function limpaHabilidades(){
    var CurriculoHabilidades = document.getElementById("CurriculoHabilidades");
    CurriculoHabilidades.value = "";
    var CurriculoHabilidadesNivel = document.getElementById("CurriculoHabilidadesNivel");
    CurriculoHabilidadesNivel.value = "nd";
}
// function para limpar a area de Certificações
function limpaCertificacoes(){
    var CurriculoCertificacoesTitulo = document.getElementById("CurriculoCertificacoesTitulo");
    CurriculoCertificacoesTitulo.value = "";
}

function ExpProfissionalCampos(){
    var atvdProfissionalSim = document.getElementById("atvdProfissionalSim");
    var atvdProfissionalNaoExerce = document.getElementById("atvdProfissionalNaoExerce");
    var atvdProfissionalExercia = document.getElementById("atvdProfissionalExercia");
    var atvdProfissionalNaoExerceu = document.getElementById("atvdProfissionalNaoExerceu");
    
    var ExpProfissionalExerce = document.getElementById("ExpProfissionalExerce");
    var ExpProfissionalExerceData = document.getElementById("ExpProfissionalExerceData");

    var ExpProfissionalExerceu = document.getElementById("ExpProfissionalExerceu");
    var ExpProfissionalExerceuDataIni = document.getElementById("ExpProfissionalExerceuDataIni");
    var ExpProfissionalExerceuDataTerm = document.getElementById("ExpProfissionalExerceuDataTerm");

    var expExerce = document.getElementById("expExerce");
    var expExerceu = document.getElementById("expExerceu");
    var naoPossuiExperiencia = document.getElementById("naoPossuiExperiencia");

    var naoPossuiExperiencia = document.getElementById("naoPossuiExperiencia");

    var limpa = document.getElementById("limpa");
    var Limpa3 = document.getElementById("Limpa3");

    if(atvdProfissionalSim.checked == true && atvdProfissionalNaoExerceu.checked == true){
        ExpProfissionalExerceu.parentNode.removeChild(ExpProfissionalExerceu);
        ExpProfissionalExerceuDataIni.parentNode.removeChild(ExpProfissionalExerceuDataIni);
        ExpProfissionalExerceuDataTerm.parentNode.removeChild(ExpProfissionalExerceuDataTerm);
        expExerceu.parentNode.removeChild(expExerceu);
        naoPossuiExperiencia.parentNode.removeChild(naoPossuiExperiencia);
        limpa.parentNode.removeChild(limpa);

        return;
    }else if(atvdProfissionalNaoExerce.checked == true && atvdProfissionalExercia.checked == true){
        ExpProfissionalExerce.parentNode.removeChild(ExpProfissionalExerce);
        ExpProfissionalExerceData.parentNode.removeChild(ExpProfissionalExerceData);
        expExerce.parentNode.removeChild(expExerce);
        naoPossuiExperiencia.parentNode.removeChild(naoPossuiExperiencia);
        Limpa3.parentNode.removeChild(Limpa3);

        return;
    }else if(atvdProfissionalSim.checked == true && atvdProfissionalExercia.checked == true){
        naoPossuiExp.parentNode.removeChild(naoPossuiExp);
        naoPossuiExperiencia.parentNode.removeChild(naoPossuiExperiencia);
        limpa.parentNode.removeChild(limpa);
        Limpa3.parentNode.removeChild(Limpa3);

        return;
    }else if(atvdProfissionalNaoExerce.checked == true && atvdProfissionalNaoExerceu.checked == true){
        ExpProfissionalExerce.parentNode.removeChild(ExpProfissionalExerce);
        ExpProfissionalExerceData.parentNode.removeChild(ExpProfissionalExerceData);

        ExpProfissionalExerceu.parentNode.removeChild(ExpProfissionalExerceu);
        ExpProfissionalExerceuDataIni.parentNode.removeChild(ExpProfissionalExerceuDataIni);
        ExpProfissionalExerceuDataTerm.parentNode.removeChild(ExpProfissionalExerceuDataTerm);

        return;
    }
    return;
}

var controle = 0
function AddExperiencia(){
    controle++;

    // if(controle < 6){
    document.getElementById("expProfissional").insertAdjacentHTML('beforeend','<div id="expProfissionalExerceu'+ controle +'"><div id="copia" class="border"><div id="ExpProfissionalExerceu"><label for="atuacaoProfissionalExerceu'+ controle +'" class="h5"> Trabalha ou trabalhou em: </label><input type="text" class="form-control" name="CurriculoEsperienciaProfissionalExerceu'+ controle +'" id="CurriculoEsperienciaProfissionalExerceu'+ controle +'" aria-label="Text input with checkbox" maxlength="100" placeholder="Ex.: Empresa ABC." onblur="validaExperiencias('+ controle +')"><br><div id="ExpProfissionalExerceuDataIni"><label for="atuacaoProfissionalExerceu'+ controle +'" class="h5"> Périodo de início: </label><input type="date" min="" max="2022-06-20" name="CurriculoEsperienciaProfissionalExerceuDataIni'+ controle +'" id="CurriculoEsperienciaProfissionalExerceuDataIni'+ controle +'" class="form-control" onblur="validaExperiencias('+ controle +')"><br></div><div id="ExpProfissionalExerceuDataTerm"><label for="atuacaoProfissionalExerceu'+ controle +'" class="h5"> Périodo de término </label><input type="date" min="" max="2022-06-20" name="CurriculoEsperienciaProfissionalDataFinal'+ controle +'" id="CurriculoEsperienciaProfissionalDataFinal'+ controle +'" class="form-control" onblur="validaExperiencias('+ controle +')"></div></div><br><p>*Caso você queira adicionar um lugar que você trabalha atualmente, deixe o período de término em branco</p><br><div class="row"><div class="col"><div class="text-start"><button type="button" class="btn btn-danger" onclick="removerExp('+ controle +')">Remover</button></div></div><div class="col"><div class="text-end"><button type="button" class="btn btn-warning" onclick="LimparExp('+ controle +')">Limpar</button></div></div></div><br></div></div><br>');
    // }else{
    //     alert("Você só pode adicionar até 5 experiencias profissionais no seu curriculo");
    //     return;
    // }
    // var clone = document.getElementById('copia').cloneNode(true);
	// var destino = document.getElementById('expProfissional');
    
	// destino.appendChild (clone);

	// var camposClonados = clone.getElementsByTagName('input');
	// for(i=0; i<camposClonados.length;i++){
    // camposClonados[i].value = "";
    // }
    document.getElementById("qnt_expProf").value = controle;
}


var controle2 = 0
function addCurso(){
    controle2++;

    // if(controle2 < 11){
    document.getElementById("cursos").insertAdjacentHTML('afterend','<div id="Cursos'+ controle2 +'"><div class="input-group mb-3"><input type="text" class="form-control" maxlength="100" aria-label="Text input with dropdown button" name="CurriculoHabilidades'+ controle2 +'" id="CurriculoHabilidades'+ controle2 +'" onblur="validaCursos('+ controle2 +')"><select class="form-select" name="CurriculoHabilidadesNivel'+ controle2 +'" id="CurriculoHabilidadesNivel'+ controle2 +'" onblur="validaCursos('+ controle2 +')"><option selected value="nd"></option><option value="Basico">Básico</option><option value="Pre-Intermediario">Pré-Intermediário</option><option value="Intermediario">Intermediário</option><option value="Avançado">Avançado</option></select></div><div class="row"><div class="col"><button type="button" class="btn btn-warning" onclick="LimparCurso('+ controle2 +')">Limpar</button></div><div class="col"><button type="button" class="btn btn-danger" onclick="removerCurso('+ controle2 +')">Remover</button></div></div><br>');
    // }else{
    //     alert("Você só pode adicionar até 10 cursos no seu curriculo");
    //     return;
    // }
    document.getElementById("qnt_curso").value = controle2;
}

function removerExp(idCampo){
    document.getElementById('expProfissionalExerceu'+ idCampo).remove();
	// node1.removeChild(node1.childNodes[0]);
}

function LimparExp(idCampo){
    document.getElementById('CurriculoEsperienciaProfissionalExerceu'+ idCampo).value="";
    document.getElementById('CurriculoEsperienciaProfissionalExerceuDataIni'+ idCampo).value="";
    document.getElementById('CurriculoEsperienciaProfissionalDataFinal'+ idCampo).value="";
}

function removerCurso(idCampos){
    document.getElementById('Cursos'+ idCampos).remove();
}

function LimparCurso(idCampos){
    document.getElementById('CurriculoHabilidades'+ idCampos).value="";
    document.getElementById('CurriculoHabilidadesNivel'+ idCampos).value="nd";

}

// function para cópia do link do curriculo.
// function copiarLinkCurriculo(){
//     var matricula = document.getElementById("loginEmail");
//     var url ="egressos-curriculo-clone"+matricula+".php";

//     navigator.clipboard.writeText(url);
// }



//              CURRICULO
/*
function clicar(){
    alert('teste')
    return;
    var nome = document.getElementById('nome')
    var sobrenome = document.getElementById('sobrenome')
    var data = document.getElementById('DadosPessoaisDataNascEgresso')
    var genero = document.getElementById('DadosPessoaisGeneroEgresso')
    var bairro = document.getElementById('EnderecoBairroEgresso')
    var rua = document.getElementById('EnderecoRuaEgresso')
    var cidade = document.getElementById('EnderecoCidadeEgresso')
    var numcasa = document.getElementById('EnderecoNumeroEgresso')
    var cep = document.getElementById('EnderecoCEPEgresso')
    var EnderecoEstado = document.getElementById('EnderecoEstado')
    var email = document.getElementById('emailEgresso')
    var celular = document.getElementById('DadosPessoaisCelularEgresso')
    var exPro = document.getElementById('"CurriculoEsperienciaProfissional')
    var objetivos = document.getElementById('CurriculoObjetivos')
    var skills = document.getElementById('CurriculoHabilidades')
    var nivel_skills = document.getElementById("CurriculoHabilidadesNivel");

}
*/
