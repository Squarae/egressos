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
            //         FROM tblareaprofissional
            //         WHERE idConta = '$ID'";

            // $query = mysqli_query($conn,$sql);

            // if(mysqli_num_rows($query) > 0) {
            //   $Flag += 1;
            // }

            // $data = mysqli_fetch_array($query);
        ?>
    <title> Area profissional </title>
    <meta charset='utf-8'>
    <meta lang="pt-br">
    <link rel="icon" type="image/x-icon" href="imagens/graduation-hat-material-design-png_131387.jpg">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
        main{
        padding: 10%;
        padding-top: 5%;
        }
        .logo{
          margin-top: -10%;
        }
        .box,.nav{
            padding: 2%;
        }
        /* .final{
          text-align: right;
          margin-right: 10%;
        } */
</style>
</head>
<script type="text/javascript"src="scripts/javascript.js"></script>
<script type="text/javascript"src="scripts/javascript2.js"></script>
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
                    <a class="nav-link" href="#">Curriculo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="egressos-empresa.php">Cadastro de Empresa</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link active link-secondary" href="egressos-curriculo.php">Curriculo</a>
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
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="egressos-dados-pessoais.php">Dados pessoais</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="egressos-endereço.php">Endereço</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="egressos-formacao-academica.php"> Formação Academica</a></li>
            <li class="breadcrumb-item active" aria-current="page">Area profissional</li>
            <li class="breadcrumb-item active" aria-current="page">Experiência profissional</li>
          </ol>
        </nav>
        <form action="insereAreaProf.php" method="post">
          <input type="hidden" name="idConta" value="<?php echo $ID; ?>">
          <input type="hidden" name="flag-control" value="<?php echo $Flag; ?>">
          <br><h3> Area profissional </h3><br>
          <div class="border box">
          <label for="atuacaoProfissionalAtual" class="h4">Você exerce alguma atividade profissional?</label><br>
            <div class="border box">
            <label for="atvdProfissional">Sim</label>
            <input class="form-check-input" type="radio" name="flexRadioDefault" value="SimExerce" id="atvdProfissionalSim" onchange="exerce()">
            <div class="text-end">Período de início</div> 
            <div class="input-group mb-2">
            <input type="text" class="form-control" name="atvdProfissionalSimInstituicao" id="atvdProfissionalSimInstituicao" aria-label="Text input with checkbox" placeholder="Ex.: Empresa ABC." maxlength="100" value="<?php if($data != null){ if($data['exerce'] == "SimExerce"){ echo $data['empresaExerce']; }else{ echo ''; } }else{ echo ''; } ?>">
            <input type="date" min="" max="2022-06-20" name="atvdProfissionalSimData" id="atvdProfissionalSimData" class="form-control" value="<?php if($data != null){ if($data['exerce'] == "SimExerce"){ echo $data['dataInicioExerce']; }else{ echo ''; } }else{ echo ''; } ?>">
            </div>
          </div><br>
          <div class="border box">
            Não
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="atvdProfissionalNaoExerce" value="NaoExerce" onchange="naoExerce()">
        </div> 
      </div><br>
      <div class="border box">
      <label for="atuacaoProfissionalPassadas" class="h4">Você já exerceu alguma atividade profissional?</label><br>
      <div class="border box">
            <label for="atvdProfissionalExercia">Sim</label>
              <input class="form-check-input" type="radio" name="flexRadioDefault-1" value="Exerceu" id="atvdProfissionalExercia" onchange="exerceu()">
            <div class="row">
              <div class="text-start col"></div>
            <div class="text-center col">Período de inicio</div>
            <div class="text-end col">Período de término</div>
            </div>
            <div class="input-group mb-2">
            <input type="text" class="form-control" name="atvdProfissionalExerciaInstituicao" id="atvdProfissionalExerciaInstituicao" aria-label="Text input with checkbox" maxlength="100" placeholder="Ex.: Empresa ABC." value="<?php if($data != null){ if($data['exercia'] == "Exerceu"){ echo $data['empresaExercia']; }else{ echo ''; } }else{ echo ''; } ?>">
            <input type="date" min="" max="2022-06-20" name="atvdProfissionalExerciaDataDeInicio" id="atvdProfissionalExerciaDataDeInicio" class="form-control" value="<?php if($data != null){ if($data['exercia'] == "Exerceu"){ echo $data['dataInicioExercia']; }else{ echo ''; } }else{ echo ''; } ?>">
            <input type="date" min="" max="2022-06-20" name="atvdProfissionalExerciaDataDeFinal" id="atvdProfissionalExerciaDataDeFinal" class="form-control" value="<?php if($data != null){ if($data['exercia'] == "Exerceu"){ echo $data['dataFimExercia']; }else{ echo ''; } }else{ echo ''; } ?>">
            </div>
      </div><br>
            <div class="border box">
            Não
            <input class="form-check-input" type="radio" name="flexRadioDefault-1" id="atvdProfissionalNaoExerceu" value="NaoExerceu" onchange="naoExerceu()">
        </div> 
          </div>
      </div><br>
        <div>
        <label for="linguaEstrangeira" class="form-label">Fala alguma Lingua Estrangeira?</label><br>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="atvdProfissionalLingEstrangEgresso" name="atvdProfissionalLingEstrangEgresso">
            <option value="nd" selected></option>
            <option value="Fran">Francês</option>
            <option value="Ing">Inglês</option>
            <option value="Esp">Espanhol</option>
          </select>
        </div>
        <div>
            <label for="linguaEstrangeira" class="form-label">Desempenho no Idioma</label><br>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="atvdProfissionalLingEstrangEgressoDesemp" name="atvdProfissionalLingEstrangEgressoDesemp">
                <option value="nd" selected></option>  
                <option value="Fluente">Fluênte</option>
                <option value="Bom">Bom</option>
                <option value="Regular">Regular</option>
              </select>
            </div><br>
            <input type="button" id="btn-atvProf" value="Continuar" class="btn btn-primary" onclick="validaAtvdProfissional()">
    </form>
    <?php mysqli_close($conn); ?>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>