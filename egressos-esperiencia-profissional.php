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
            // $sqlTeste = "SELECT *
            //             FROM tblexpprofissional
            //             WHERE idConta = '$ID'";

            // $q1 = mysqli_query($conn,$sqlTeste);
            // if(mysqli_num_rows($q1) > 0){
            //   $Flag += 1;
            // }

            // $sql = "SELECT *
            //         FROM tblformacao
            //         INNER JOIN tblareaprofissional ON tblformacao.idConta = tblareaprofissional.idConta
            //         WHERE tblformacao.idConta = '$ID'";

            // $q2 = mysqli_query($conn,$sql);

            // $data = mysqli_fetch_array($q2);
        ?>
    <title> Experiência Profissional </title>
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
        .border{
            padding: 2%;
        }
</style>
</head>
<script type="text/javascript"src="scripts/javascript.js"></script>
<body onload="ExpProfissionalCampos()">
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
                    <a class="nav-link active link-secondary" href="egressos-empresa.php">Cadastro de Empresa</a>
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
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page"><a href="egressos-dados-pessoais.php"> Dados pessoais </a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="egressos-endereço.php">Endereço</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="egressos-formacao-academica.php">Formação Academica</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="egressos-area-profissional.php">Area profissional</a></li>
          <li class="breadcrumb-item active" aria-current="page">Experiência profissional</li>
        </ol>
      </nav>
        <div>
          <br><h3>Experiência Profissional</h3>
        </div>
        <form action="insereExpProf.php" method="post">
          <input type="hidden" name="idConta" value="<?php echo $ID; ?>">
          <input type="hidden" name="flag-control" value="<?php echo $Flag; ?>">
          <input type="hidden" name="qnt_expProf" id="qnt_expProf">
          <input type="hidden" name="qnt_curso" id="qnt_curso">
          <div class="border">
            <!-- ATVD PROFISSIONAL "SIM" -->
            <div id="" class="border">
              <div>
                <div id="ExpProfissionalExerce" class="container">
                  <label for="atuacaoProfissionalAtual" class="h5"> Trabalha em: </label>
                  <?php if($data != null){ if($data['exerce'] == "SimExerce"){ echo $data['empresaExerce']; }else{ echo ''; } }else{ echo ''; } ?>
                </div>
              </div>
              <div>
                <div id="ExpProfissionalExerceData" class="container">
                  <label for="atuacaoProfissionalAtual" class="h5"> Périodo de início: </label>
                  <?php if($data != null){ if($data['exerce'] == "SimExerce"){ echo $data['dataInicioExerce']; }else{ echo ''; } }else{ echo ''; } ?>
                </div>
              </div><br>
              <!-- <button type="button" class="btn btn-warning" onclick="limpaExperiencia()" id="limpa">Limpar</button><br> -->
            </div><br>
            <!-- ATVD PROFISSIONAL "NÃO" -->
            <div id="expProfissionalExerceu" class="border">
              <div id="copia">
                <div>
                  <div id="ExpProfissionalExerceu" class="container">
                    <label for="atuacaoProfissionalExerceu" class="h5"> Trabalhou em: </label>
                    <?php if($data != null){ if($data['exercia'] == "Exerceu"){ echo $data['empresaExercia']; }else{ echo ''; } }else{ echo ''; } ?>
                  </div>
                </div>
                <div>
                  <div id="ExpProfissionalExerceuDataIni" class="container">
                    <label for="atuacaoProfissionalExerceu" class="h5"> Périodo de início: </label>
                    <?php if($data != null){ if($data['exercia'] == "Exerceu"){ echo $data['dataInicioExercia']; }else{ echo ''; } }else{ echo ''; } ?>
                  </div>
                </div>
                <div>
                  <div id="ExpProfissionalExerceuDataTerm" class="container">
                    <label for="atuacaoProfissionalExerceu" class="h5"> Périodo de término </label>
                    <?php if($data != null){ if($data['exercia'] == "Exerceu"){ echo $data['dataFimExercia']; }else{ echo ''; } }else{ echo ''; } ?>
                  </div>
                </div>
              </div><br>
              <!-- <button type="button" class="btn btn-warning" onclick="limpaExperiencia3()" id="Limpa3">Limpar</button><br> -->
            </div><br>
            <!-- <div id="NaoPossuiExp">
              <p>Não possui experiência profissional.</p>
            </div> -->
      
            <div id="expProfissional">
            </div>
            <div class="text-center">
              <div>
                <div>
                  <button type="button" class="btn btn-success" onclick="AddExperiencia()">Adicionar Experiência</button>
                </div>
              </div>
            </div>
          </div><br>
          <div>
            <h3>Objetivos</h3>
          </div>
          <div class="border">
            <textarea id="CurriculoObjetivos" name="CurriculoObjetivos" onkeydown="autoResize()" cols="100" rows="10" style="height: 20%; width: 100%;" placeholder="Ex.: Pretendo entrar para o quadro de funcionários da empresa ABC." maxlength="2000"></textarea>
            <div><br>
              <button type="button" class="btn btn-warning" onclick="limpaObjetivos()">Limpar</button>
            </div>
          </div><br>
          <div>
            <h3>Cursos</h3>
          </div>
          <div class="border">
            <div id="cursos">
          </div>
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with dropdown button" maxlength="100" id="CurriculoHabilidades" name="CurriculoHabilidades">
            <select class="form-select" id="CurriculoHabilidadesNivel" name="CurriculoHabilidadesNivel">
              <option selected value="nd"></option>
              <option value="Basico">Básico</option>
              <option value="Pre-Intermediario">Pré-Intermediário</option>
              <option value="Intermediario">Intermediário</option>
              <option value="Avançado">Avançado</option>
            </select>
          </div><br>
          <div>
            <button type="button" class="btn btn-warning" onclick="limpaHabilidades()">Limpar</button>
            <button type="button" class="btn btn-success" onclick="addCurso()">Adicionar Curso</button>
          </div><br>
          <div id="cursos">
        </div>
          </div>
    </div><br>
    <div>
        <h3>Certificações</h3>
    </div>
    <div class="border">
        <textarea id="CurriculoCertificacoesTitulo" name="CurriculoCertificacoesTitulo" onkeydown="autoResize2()" style="width: 100%;" placeholder="Ex.: Design Gráfico e Impressões." maxlength="1000"><?php
          if($data != null){
            switch($data['escolaridadeConcl']) {
              case "Med":
                echo "Ensino Médio completo em: ".$data['instituicao']."\n";
                $anoInic = explode("-",$data['anoInic']);
                $anoFim = explode("-",$data['anoConcl']);
                echo "Ano Início: ".$anoInic[2]."/".$anoInic[1]."/".$anoInic[0]."\n";
                echo "Ano Fim: ".$anoFim[2]."/".$anoFim[1]."/".$anoFim[0]."\n";
                break;

              case "Sup":
                echo "Ensino Médio completo em: ".$data['instituicao']."\n";
                echo "Ensino Superior completo em: ".$data['universidade']."\n";
                $anoInic = explode("-",$data['anoInic']);
                $anoFim = explode("-",$data['anoConcl']);
                echo "Ano Início: ".$anoInic[2]."/".$anoInic[1]."/".$anoInic[0]."\n";
                echo "Ano Fim: ".$anoFim[2]."/".$anoFim[1]."/".$anoFim[0]."\n";
                break;
            }
          }
        ?></textarea>
        <div><br>
            <button type="button" class="btn btn-warning" onclick="limpaCertificacoes()">Limpar</button>
        </div>
        <!-- <input type="file" name="CurriculoCertificado" id="CurriculoCertificado"> -->
    </div><br>
    <div>
      <input type="button" id="btn-expProf" value="Finalizar" class="btn btn-primary" onclick="validaExperienciaProfissional()">
    </div>
  </form>
  <?php
      mysqli_close($conn);
    ?>
    </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>