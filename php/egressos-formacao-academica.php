<!DOCTYPE html>
<html>
    <head>
        <?php
            // session_start();
            // if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
            //     header('location: index.php');
            // }

            // $ID = $_SESSION['id'];

            // include_once 'conectaDB.php';

            // $Flag = 0;
            // $sql = "SELECT *
            //         FROM tblformacao
            //         WHERE idConta = '$ID'";

            // $query = mysqli_query($conn,$sql);

            // if(mysqli_num_rows($query) > 0) {
            //   $Flag += 1;
            // }

            // $data = mysqli_fetch_array($query);
        ?>
        <title> Formação Academica </title>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <link rel="icon" type="image/x-icon" href="imagens/graduation-hat-material-design-png_131387.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      </head>
      
      <style>
        main, footer{
        padding: 10%;
        padding-top: 5%;
        }
        .logo{
          margin-top: -10%;
        }
        .border{
          padding: 2%;
        }
        box{
          padding: 2%;
        }
      </style>
      <script type="text/javascript"src="scripts/javascript1.js"></script>
      <!-- <script type="text/javascript"src="javascript.js"></script> -->
      <body>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="indexlogin.php"><img class="logo" src="imagens/graduation-hat-material-design-png_131387-removebg-preview (1).png" width="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                  </svg></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="egressos-cadastro.php">Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="egressos-empresa.php">Cadastro de Empresa</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link active link-secondary" href="#">Curriculo</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link ">Disabled</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
</header>
<main>
  <div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><a href="egressos-dados-pessoais.php">Dados pessoais</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="egressos-endereco.php">Endereço</a></li>
        <li class="breadcrumb-item active" aria-current="page">Formação Academica</li>
        <li class="breadcrumb-item active" aria-current="page">Area profissional</li>
        <li class="breadcrumb-item active" aria-current="page">Experiência profissional</li>
      </ol>
    </nav>
  </div>
    <br><h3> Formação Academica </h3><br>
  <form action="insereFormacaoAcad.php" method="post">
      <input type="hidden" name="idConta" value="<?php echo $ID; ?>">
      <input type="hidden" name="flag-control" value="<?php echo $Flag; ?>">
      <div class="border">
        Concluída<br><br>
        <label for="nivelEducacionalConcl">Nível Educacional</label><br>
        <select class="form-select" id="formacaoConclEgresso" name="formacaoConclEgresso" aria-label="Default select example">
          <option value="nd" selected></option>
            <option value="Med">Médio</option>
            <option value="Tec">Técnico</option>
            <option value="Sup">Superior</option>
            <option value="Mes">Mestrado</option>
            <option value="Dou">Doutorado</option>
          </select><br>
            <select class="form-select" id="formacaoBolsaConclEgresso" name="formacaoBolsaConclEgresso" aria-label="Default select example">
            <option value="nd" selected></option>
              <option value="Sem">Sem Bolsa</option>
              <option value="Com">Com Bolsa</option>
            </select><br>
        <div class="form-group">
          <label for="inputAddress"> Instituição </label><br>
          <input type="text" class="form-control" id="formacaoEscolaEgresso" name="formacaoEscolaEgresso" placeholder="Ex.: Colégio Estadual Ferreira Goulart" value="<?php if($data != null){ if($data['formacao']=="concl"){ echo $data['instituicao']; }else{ echo ''; } }else echo ''; ?>">
        </div>
        <div class="col">
            <label for="inputEmail4" class="form-label">Ano de Inicio</label><br>
            <input type="date" class="form-control" min="1922-12-09" max="2022-12-09" id="formacaoInicioEscolaEgresso" name="formacaoInicioEscolaEgresso" value="<?php if($data != null){ if($data['formacao']=="concl"){ echo $data['anoInicio']; }else echo ''; }else echo ''; ?>">
        </div>
        <div class="col">
            <label for="inputEmail4" class="form-label">Ano de Conclusão</label><br>
            <input type="date" class="form-control" min="1922-12-09" max="2022-12-09" id="formacaoConclusaoEscolaEgresso" name="formacaoConclusaoEscolaEgresso" value="<?php if($data != null){ if($data['formacao']=="concl"){ echo $data['anoConclusao']; }else echo ''; }else echo ''; ?>">
        </div>
        <div class="form-group">
          <label for="inputAddress"> Universidade </label><br>
          <input type="text" class="form-control" id="formaocaoUniversidadeEgresso" name="formaocaoUniversidadeEgresso" placeholder="Ex.: Universidade Estacio de Sa" value="<?php if($data != null){ if($data['formacao']=="concl"){ echo $data['universidade']; }else echo ''; }else echo ''; ?>">
        </div>
        <div class="form-group">
            <label for="inputAddress"> Titulo da Monografia </label><br>
            <input type="text" class="form-control" id="formacaoMonografiaEgresso" name="formacaoMonografiaEgresso" placeholder="Ex.: A aplicação da Lei Maria da Penha" value="<?php if($data != null){ if($data['formacao']=="concl"){ echo $data['monografia']; }else echo ''; }else echo ''; ?>">
          </div>
          <div class="form-group">
            <label for="inputAddress"> Nome completo do orientador </label><br>
            <input type="text" class="form-control" id="formacaoOrientadorEgresso" name="formacaoOrientadorEgresso" placeholder="Ex.: José Ramalho de Castro" value="<?php if($data != null){ if($data['formacao']=="concl"){ echo $data['orientador']; }else echo ''; }else echo ''; ?>">
          </div>
        <!-- <div class="form-group">
          <label for="inputAddress"> Diploma </label><br>
          <input type="file" class="form-control" id="formacaoDiplomaEgresso" name="formacaoDiplomaEgresso">
        </div> -->
      </div><br>
      </div>
    <div class="border">
    Em andamento<br><br>
    <label for="nivelEducacionalEmAndamento">Nível Educacional</label><br>
        <select class="form-select" name="formacaoEmAndamentoEgresso" id="formacaoEmAndamentoEgresso" aria-label="Default select example">
        <option value="nd" selected></option>
          <option value="Med">Médio</option>
          <option value="Tec">Técnico</option>
          <option value="Sup">Superior</option>
          <option value="Mes">Mestrado</option>
          <option value="Dou">Doutorado</option>
        </select><br>
          <div class="form-group">
            <label for="inputAddress"> Nome do polo, centro ou unidade </label><br>
            <input type="text" class="form-control" id="formacaoInstituicaoEgresso" name="formacaoInstituicaoEgresso" placeholder="Ex.: São Luís (Centro)" value="<?php if($data != null){ if($data['formacao']=="EmAndamento"){ echo $data['instituicao']; }else{ echo ''; } }else echo ''; ?>">
            <p class="fst-italic">*Caso seja EAD (Ensino à Distância), preencha com (EAD) no campo acima.</p>
          </div>
          <div class="col">
            <label for="inputEmail4" class="form-label">Ano de Inicio dos Estudos</label><br>
            <input type="date" class="form-control" min="1922-12-09" max="2022-12-09" id="formacaoInicioEmAndamentoEscolaEgresso" name="formacaoInicioEmAndamentoEscolaEgresso" value="<?php if($data != null){ if($data['formacao']=="EmAndamento"){ echo $data['anoInicio']; }else echo ''; }else echo ''; ?>">
        </div>
          </div><br>
          <div>
            <input type="button" id="btn-formAcademica" value="Continuar" class="btn btn-primary" onclick="validaFormacao()">
          </div>
    </form>
    <?php mysqli_close($conn); ?>
</main>
      </body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>