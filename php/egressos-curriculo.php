<!DOCTYPE html>
<html>
<head>
        <?php
            // session_start();
            // if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
            //     header('location: index.php');
            // }

            // $ID = $_SESSION['id'];
            // $email = $_SESSION['login'];
        ?>
    <title> Curriculo </title>
    <meta charset='utf-8'>
    <meta lang="pt-br">
    <link rel="icon" type="image/x-icon" href="imagens/graduation-hat-material-design-png_131387.jpg">
    <meta name='viewport' content='width=device-width, initial-scale=1,  user-scalable=yes, maximum-scale=10, minimum-scale=1.0'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  @media print {
        #noprint { display:none; } 
        #print { display:block; }
        body { background: #fff; }
        }
  main{
        padding: 10%;
        padding-top: 5%;
        }
        .logo{
          margin-top: -3%;
        }
        img#imgPhoto {
            cursor: pointer;
        }
        input#flImage {
            display: none;
        }
        textarea{
          overflow-y:auto;
          }
        p.mensagem {
            display: none;
        }
        .default{
          border-radius: 5%;
          margin-right: 75%;
          margin-bottom: -25%;
          position: relative;
        }
        .dadospessoais{
          margin-left: 20%;
          padding-left: 2%;
          padding: 3%;
        }
        .dadospessoais1{
          margin-top: -5%;
          margin-left: 20%;
          padding-left: 2%;
          padding: 3%;
        }
        .borda{
          padding: 2%;
        }
        .curriculo{
          margin-top: -5%;
          display: none;
        }
</style>
</head>
<script type="text/javascript"src="scripts/javascript.js"></script>
<body>
    <header id="noprint">
    <div>
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
                </ul>
              </div>
            </div>
          </nav>
          </div>
    </header>
    <?php
      // include_once 'conectaDB.php';

      // $sql = "SELECT *
      //         FROM (((tblconta
      //         INNER JOIN tblaluno ON tblconta.idConta = tblaluno.idConta)
      //         INNER JOIN tblendereco ON tblconta.idConta = tblendereco.idConta)
      //         INNER JOIN tblexpprofissional ON tblconta.idConta = tblexpprofissional.idConta)
      //         WHERE tblconta.idConta = '$ID' AND tblconta.email = '$email';";

      // $query = mysqli_query($conn,$sql);

      // $data = mysqli_fetch_array($query);
      
    ?>
    <main id="noprint">
    <div class="border">
        <!-- <div class="print"> -->
      <abbr title="Trocar foto do usuário"><img src="imagens/unknown (4).png" id="imgPhoto" onclick="clicar()" class="default" style="width: 20%;"></abbr>
          <br><br>
          <input type="file" name="fImage" id="flImage" accept="image/*" onchange="change()"> 
            <!-- </div> -->
            <div class="dadospessoais">
              <div class="row">
              <div class="col align-self-start">
                <div>Nome</div>
                <div>
                  <?php
                    echo "<p class='mb-0'>".$data['nome']."</p>";
                  ?>
                </div>
              </div>
              <div class="row">
              <div class="col align-self-start">
                <div>Data de nascimento</div>
                <div>
                  <?php
                    $dataDeNasc = explode("-",$data['dataNasc']);
                    echo "<p class='mb-0'>".$dataDeNasc[2]."/".$dataDeNasc[1]."/".$dataDeNasc[0]."</p>";
                  ?>
                </div>
            </div>
            <div class="col align-self-center">
              <div>Gênero</div>
              <div>
                    <?php
                      switch($data['genero']) {
                        case "M":
                          echo "<p class='mb-0'>Masculino</p>";
                          break;

                        case "F":
                          echo "<p class='mb-0'>Feminino</p>";
                          break;

                        default:
                          echo "<p class='mb-0'>Não declarado</p>";
                      }
                    ?>
              </div> 
            </div>
          </div>
          <div class="row">
          <div class="col align-self-start">
            <div>Bairro</div>
            <div>
              <?php
                echo "<p class='mb-0'>".$data['bairro']."</p>";
              ?>
            </div>
            </div>
            <div class="col align-self-center">
            <div>Rua</div>
            <div>
              <?php
                echo "<p class='mb-0'>".$data['logradouro']."</p>";
              ?>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col align-self-start">
            <div>Cidade</div>
            <div>
              <?php
                echo "<p class='mb-0'>".$data['cidade']."</p>";
              ?>
            </div>
            </div>
        <div class="col align-self-center">
        <div>Numero</div>
        <div>
          <?php
            echo "<p class='mb-0'>".$data['numero']."</p>";
          ?>
        </div>
      </div>
        <div class="col align-self-center">
        <div>CEP</div>
        <div>
          <?php
            echo "<p class='mb-0'>".$data['cep']."</p>";
          ?>
        </div>
        </div>
        <div class="col align-self-end">
        <div>Estado</div>
        <div>
                <?php
                  switch($data['estado']) {
                    case "MA":
                      echo '<p class="mb-0"> Maranhão </p>';
                      break;

                    case "SP":
                      echo '<p class="mb-0"> São Paulo </p>';
                      break;

                    case "RJ":
                      echo '<p class="mb-0"> Rio de Janeiro </p>';
                      break;

                    case "MG":
                      echo '<p class="mb-0"> Minas Gerais </p>';
                      break;

                    case "ES":
                      echo '<p class="mb-0"> Espírito Santo </p>';
                      break;

                    case "GO":
                      echo '<p class="mb-0"> Goiás </p>';
                      break;

                    case "MT":
                      echo '<p class="mb-0"> Mato Grosso </p>';
                      break;

                    case "MS":
                      echo '<p class="mb-0"> Mato Grosso do Sul </p>';
                      break;

                    case "AP":
                      echo '<p class="mb-0"> Amapá </p>';
                      break;

                    case "PA":
                      echo '<p class="mb-0"> Pará </p>';
                      break;

                    case "AM":
                      echo '<p class="mb-0"> Amazonas </p>';
                      break;

                    case "AC":
                      echo '<p class="mb-0"> Acre </p>';
                      break;

                    case "PR":
                      echo '<p class="mb-0"> Paraná </p>';
                      break;

                    case "RS":
                      echo '<p class="mb-0"> Rio Grande do Sul </p>';
                      break;

                    case "RN":
                      echo '<p class="mb-0"> Rio Grande do Norte </p>';
                      break;

                    case "CE":
                      echo '<p class="mb-0"> Ceará </p>';
                      break;

                    case "PI":
                      echo '<p class="mb-0"> Piauí </p>';
                      break;

                    case "RS":
                      echo '<p class="mb-0"> Paraíba </p>';
                      break;
                  }
                ?>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col align-self-start">
          <div>Email</div>
          <div>
            <?php
              echo "<p class='mb-0'>".$data['email']."</p>";
            ?>
          </div>
        </div>
        <div class="col align-self-center">
          <div>Celular</div>
          <div>
            <?php
              echo "<p class='mb-0'>".$data['celular']."</p>";
            ?>
          </div>
        </div>
    </div>
</div>
</div>
<div class="borda">
    <div><br>
        <br><h3>Experiência Profissional</h3>
    </div>
    <hr class="border border-dark">
    <div class="container">
      <?php
        if($data['empresaTrabalha'] != null || $data['empresaTrabalha'] != "") {
          $empresaTrabalha = explode("\n",trim($data['empresaTrabalha']));
          $texto1 = <<<HTML
            <div id="expExerce">
              <h5>Empresa</h5>
              <div><p class="mb-1">$empresaTrabalha[0]</p></div>
              <h5>Período de início</h5>
              <div><p class="mb-1">$empresaTrabalha[1]</p></div>
            </div>
          HTML;
          echo $texto1;
        }

        if($data['empresaTrabalhou'] != null || $data['empresaTrabalhou'] != "") {
          $empresaTrabalhou = explode("\n",trim($data['empresaTrabalhou']));
          for($i = 0; $i < count($empresaTrabalhou); $i += 3) {
            $periodoInic = $empresaTrabalhou[$i+1];
            $periodoFim = $empresaTrabalhou[$i+2];
            $texto2 = <<<HTML
              <div id="expExerceu">
                <h5>Empresa</h5>
                <div><p class="mb-1">$empresaTrabalhou[$i]</p></div>
                <h5>Período de início</h5>
                <div><p class="mb-1">$periodoInic</p></div>
                <h5>Período de término</h5>
                <div><p class="mb-1">$periodoFim</p></div>
              </div>
            HTML;
            echo $texto2;
          }
        }

        if(($data['empresaTrabalha'] == null || $data['empresaTrabalha'] == "")&&($data['empresaTrabalhou'] == null || $data['empresaTrabalhou'] == "")) {
          $texto3 = <<<HTML
            <div id="naoPossuiExperiencia">
              Não possui Experiência profissional
            </div>
          HTML;
          echo $texto3;
        }
      ?>
      <!-- <div id="expExerce">
        <h5>Empresa</h5>
          <div>

          </div>
        <h5>Período de início</h5>
          <div>

          </div>
      </div> -->
      <!-- <div id="expExerceu">
        <h5>Empresa</h5>
          <div>

          </div>
        <h5>Período de início</h5>
          <div>

          </div>
        <h5>Período de término</h5>
          <div>

          </div>
      </div>
    </div>
    <div id="naoPossuiExperiencia">
      Não possui Experiência profissional
    </div> -->
    <div><br>
        <h3>Objetivos</h3>
    </div>
    <hr class="border border-dark">
    <div class="container">
    <?php echo $data['objetivo']; ?>
    </div>
    <div><br>
        <h3>Cursos</h3>
    </div>
    <hr class="border border-dark">
    <div class="container">  
      <div class="row">
    <div id="CurriculoHabilidades" class="col">
          <?php
            if($data['cursos'] != null || $data['cursos'] != "") {
              $cursos = explode("\n",trim($data['cursos']));
              for($i = 0; $i < count($cursos); $i += 2) {
                echo $cursos[$i];
          ?>
      </div>
      <div id="CurriculoHabilidadesNivel" class="col">
      <?php
          switch($cursos[$i+1]) {
                case "Basico":
                  echo 'Básico';
                  break;

                case "Pre-Intermediario":
                  echo 'Pré-Intermediário';
                  break;

                case "Intermediario":
                  echo 'Intermediário';
                  break;

                case "Avançado":
                  echo 'Avançado';
                  break;
          }
        }
        }
      ?>
      </div>
      </div>
    </div>

    <div><br>
        <h3>Certificações</h3>
    </div>
    <hr class="border border-dark">
    <div class="container">
        <?php
          $certificacao = explode("\n",trim($data['certificacao']));
          foreach($certificacao as $value) {
            echo "$value<br>";
          }
        ?>
        
    </div>
        <!-- <input type="file" name="CurriculoCertificado" id="CurriculoCertificado"> -->
              </div>
      </div><br>
    <div>
        <div id="noprint">
          <div class="text-center">
          <div class="row"><br>
              <!-- <div class="col"><br>
              <button type="button" class="btn btn-primary" id="copy" onclick="copiarLinkCurriculo()">Copiar Link</button>
              </div> -->
                <div class="col">
                <input href="egressos-curriculo.php" type="button" value="Imprimir curriculo" onclick="window.print()" class="btn btn-primary" id="imprimir">
                </div>
                <div class="col"><br>
              <a href="egressos-esperiencia-profissional.php" class="btn btn-primary" >Alterar Dados</a>
              </div>
              </div><br>
          </div>
        </div> 
        </main>
        <!-- currículo de impressão -->
        <footer id="print" class="curriculo">
          <!-- <div class="noprint"> -->
          <abbr title="Trocar foto do usuário"><img src="imagens/unknown (4).png" id="imgPhoto" onclick="clicar()" class="default" style="width: 20%;"></abbr>
          <br><br>
            <input type="file" name="fImage" id="flImage" accept="image/*" onchange="change()">
            <!-- </div> -->
            <div class="dadospessoais1">
              <div class="row">
              <div class="col align-self-start">
                <div>Nome</div>
                <div>
                <?php
                    echo "<p class='mb-0'>".$data['nome']."</p>";
                  ?>
              </div>
              </div>
              <div class="row">
              <div class="col align-self-start">
                <div>Data de nascimento</div>
                <div>
                <?php
                    $dataDeNasc = explode("-",$data['dataNasc']);
                    echo "<p class='mb-0'>".$dataDeNasc[2]."/".$dataDeNasc[1]."/".$dataDeNasc[0]."</p>";
                  ?>
              </div>
            </div>
            <div class="col align-self-center">
              <div>Gênero</div>
              <div>
                    <?php
                      switch($data['genero']) {
                        case "M":
                          echo "<p class='mb-0'>Masculino</p>";
                          break;

                        case "F":
                          echo "<p class='mb-0'>Feminino</p>";
                          break;

                        default:
                          echo "<p class='mb-0'>Não declarado</p>";
                      }
                    ?>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col align-self-start">
            <div>Bairro</div>
            <div>
            <?php
                echo "<p class='mb-0'>".$data['bairro']."</p>";
              ?>
            </div>
            </div>
            <div class="col align-self-center">
            <div>Rua</div>
            <div>
            <?php
                echo "<p class='mb-0'>".$data['logradouro']."</p>";
              ?>
            </div>
            </div>
            </div>
              <div class="row">
            <div class="col align-self-start">
            <div>Cidade</div>
            <div>
            <?php
                echo "<p class='mb-0'>".$data['cidade']."</p>";
              ?>
            </div>
            </div>
        <div class="col align-self-center">
        <div>Numero</div>
        <div>
        <?php
            echo "<p class='mb-0'>".$data['numero']."</p>";
          ?>
        </div>
      </div>
        <div class="col align-self-center">
        <div>CEP</div>
        <div>
        <?php
            echo "<p class='mb-0'>".$data['cep']."</p>";
          ?>
        </div>
        </div>
        <div class="col align-self-end">
        <div>Estado</div>
        <div>
        <?php
                  switch($data['estado']) {
                    case "MA":
                      echo '<p class="mb-0"> Maranhão </p>';
                      break;

                    case "SP":
                      echo '<p class="mb-0"> São Paulo </p>';
                      break;

                    case "RJ":
                      echo '<p class="mb-0"> Rio de Janeiro </p>';
                      break;

                    case "MG":
                      echo '<p class="mb-0"> Minas Gerais </p>';
                      break;

                    case "ES":
                      echo '<p class="mb-0"> Espírito Santo </p>';
                      break;

                    case "GO":
                      echo '<p class="mb-0"> Goiás </p>';
                      break;

                    case "MT":
                      echo '<p class="mb-0"> Mato Grosso </p>';
                      break;

                    case "MS":
                      echo '<p class="mb-0"> Mato Grosso do Sul </p>';
                      break;

                    case "AP":
                      echo '<p class="mb-0"> Amapá </p>';
                      break;

                    case "PA":
                      echo '<p class="mb-0"> Pará </p>';
                      break;

                    case "AM":
                      echo '<p class="mb-0"> Amazonas </p>';
                      break;

                    case "AC":
                      echo '<p class="mb-0"> Acre </p>';
                      break;

                    case "PR":
                      echo '<p class="mb-0"> Paraná </p>';
                      break;

                    case "RS":
                      echo '<p class="mb-0"> Rio Grande do Sul </p>';
                      break;

                    case "RN":
                      echo '<p class="mb-0"> Rio Grande do Norte </p>';
                      break;

                    case "CE":
                      echo '<p class="mb-0"> Ceará </p>';
                      break;

                    case "PI":
                      echo '<p class="mb-0"> Piauí </p>';
                      break;

                    case "RS":
                      echo '<p class="mb-0"> Paraíba </p>';
                      break;
                  }
                ?>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col align-self-start">
          <div>Email</div>
          <div>
          <?php
              echo "<p class='mb-0'>".$data['email']."</p>";
            ?>
          </div>
        </div>
        <div class="col align-self-center">
          <div>Celular</div>
          <div>
          <?php
              echo "<p class='mb-0'>".$data['celular']."</p>";
            ?>
          </div>
        </div>
    </div>
</div>
                  </div>
<div class="borda">
    <div><br>
        <br><h3>Experiência Profissional</h3>
    </div>
    <div class="container">
    <div id="expExerce">
      <h5>Empresa</h5>
    <div>
    <?php
        if($data['empresaTrabalha'] != null || $data['empresaTrabalha'] != "") {
          $empresaTrabalha = explode("\n",trim($data['empresaTrabalha']));
          $texto1 = <<<HTML
            <div id="expExerce">
              <h5>Empresa</h5>
              <div><p class="mb-1">$empresaTrabalha[0]</p></div>
              <h5>Período de início</h5>
              <div><p class="mb-1">$empresaTrabalha[1]</p></div>
            </div>
          HTML;
          echo $texto1;
        }

        if($data['empresaTrabalhou'] != null || $data['empresaTrabalhou'] != "") {
          $empresaTrabalhou = explode("\n",trim($data['empresaTrabalhou']));
          for($i = 0; $i < count($empresaTrabalhou); $i += 3) {
            $periodoInic = $empresaTrabalhou[$i+1];
            $periodoFim = $empresaTrabalhou[$i+2];
            $texto2 = <<<HTML
              <div id="expExerceu">
                <h5>Empresa</h5>
                <div><p class="mb-1">$empresaTrabalhou[$i]</p></div>
                <h5>Período de início</h5>
                <div><p class="mb-1">$periodoInic</p></div>
                <h5>Período de término</h5>
                <div><p class="mb-1">$periodoFim</p></div>
              </div>
            HTML;
            echo $texto2;
          }
        }

        if(($data['empresaTrabalha'] == null || $data['empresaTrabalha'] == "")&&($data['empresaTrabalhou'] == null || $data['empresaTrabalhou'] == "")) {
          $texto3 = <<<HTML
            <div id="naoPossuiExperiencia">
              Não possui Experiência profissional
            </div>
          HTML;
          echo $texto3;
        }
      ?>
      <!-- <div id="expExerce">
        <h5>Empresa</h5>
          <div>

          </div>
        <h5>Período de início</h5>
          <div>

          </div>
      </div> -->
      <!-- <div id="expExerceu">
        <h5>Empresa</h5>
          <div>

          </div>
        <h5>Período de início</h5>
          <div>

          </div>
        <h5>Período de término</h5>
          <div>

          </div>
      </div>
    </div>
    <div id="naoPossuiExperiencia">
      Não possui Experiência profissional
    </div> -->
    <div><br>
        <h3>Objetivos</h3>
    </div>
    <div class="container">
    <?php echo $data['objetivo']; ?>
    </div>
    <div><br>
        <h3>Cursos</h3>
    </div>
    <div class="container">
    <div class="row">
    <div id="CurriculoHabilidades" class="col">
    <?php
            if($data['cursos'] != null || $data['cursos'] != "") {
              $cursos = explode("\n",trim($data['cursos']));
              for($i = 0; $i < count($cursos); $i += 2) {
                echo $cursos[$i];
          ?>
      </div>
      <div id="CurriculoHabilidadesNivel" class="col">
      <?php
          switch($cursos[$i+1]) {
                case "Basico":
                  echo 'Básico';
                  break;

                case "Pre-Intermediario":
                  echo 'Pré-Intermediário';
                  break;

                case "Intermediario":
                  echo 'Intermediário';
                  break;

                case "Avançado":
                  echo 'Avançado';
                  break;
          }
        }
        }
      ?>
      </div>
      </div>
    </div>
            <?php
              // switch($data['nivelHabilidade']) {
              //   case "Básico":
              //     echo '<option value="Básico">Básico</option>';
              //     break;

              //   case "Pré-Intermediário":
              //     echo '<option value="Pré-Intermediário">Pré-Intermediário</option>';
              //     break;

              //   case "Intermediário":
              //     echo '<option value="Intermediário">Intermediário</option>';
              //     break;

              //   case "Avançado":
              //     echo '<option value="Avançado">Avançado</option>';
              //     break;
              // }
            ?>
            <!--
            <option value="Básico">Básico</option>
            <option value="Pré-Intermediário">Pré-Intermediário</option>
            <option value="Intermediário">Intermediário</option>
            <option value="Avançado">Avançado</option> -->

    <div><br>
        <h3>Certificações</h3>
    </div>
    <div class="container">
    <?php
          $certificacao = explode("\n",trim($data['certificacao']));
          foreach($certificacao as $value) {
            echo "$value<br>";
          }
        ?>
    </div>
        <!-- <input type="file" name="CurriculoCertificado" id="CurriculoCertificado"> -->
              </div>
      </div><br>
      <?php
            mysqli_close($conn);
      ?>  
      </footer>
    </body>
    <script>
        //              VIZUALIZAR IMAGEM


        let photo = document.getElementById('imgPhoto')
        let file = document.getElementById('flImage')

        function clicar(){
          file.click();
        }

        function change(){
            let reader = new FileReader();

            reader.onload = () => {
                photo.src = reader.result;
            }

            reader.readAsDataURL(file.files[0]);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>