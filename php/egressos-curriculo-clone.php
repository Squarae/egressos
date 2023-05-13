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
              <a class="navbar-brand" href="index.php"><img class="logo" src="imagens/graduation-hat-material-design-png_131387-removebg-preview (1).png" width="100"></a>
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
                    <a class="nav-link" aria-current="page" href="egressos-login.php">Login</a>
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
      <!-- <div class="text-center"> -->
          <abbr title="Trocar foto do usuário"><img src="imagens/unknown (4).png" id="imgPhoto" onclick="clicar()" class="default" style="width: 20%;"></abbr>
          <br><br>
            <input type="file" name="fImage" id="flImage" accept="image/*" onchange="change()"> 
            <!-- </div> -->
            <div class="dadospessoais">
            <div id="print">
              <div class="row">
              <div class="col align-self-start">
                <div>Nome</div>
                aaaaaaaaaaaaaa
              </div>
              <div class="row">
              <div class="col align-self-start">
                <div>Data de nascimento</div>
                aaaaaaaaaaaaaa
            </div>
            <div class="col align-self-center">
              <div>Gênero</div>
              aaaaaaaaaaaaaa
                    <?php
                      // if($data['genero'] == "M") {
                      //   echo '<option value="M"> Masculino </option>';
                      // } else if($data['genero'] == "F") {
                      //   echo '<option value="F"> Feminino </option>';
                      // } else {
                      //   echo '<option value="ND"> Não declarar </option>';
                      // }
                    ?>
                    <!--
                    <option value="M"> Masculino </option>
                    <option value="F"> Feminino </option>
                    <option value="ND"> Não declarar </option> -->
                    
            </div>
            <div class="col align-self-end">
            </div>
          </div>
                      </div>
          <div class="row">
          <div class="col align-self-start">
            <div>Bairro</div>
            aaaaaaaaaaaaaa
            </div>
            <div class="col align-self-center">
            <div>Rua</div>
            aaaaaaaaaaaaaa
            </div>
            <div class="col align-self-end">
            <div>Cidade</div>
            aaaaaaaaaaaaaa
            </div>
          <div class="row">
        <div class="col align-self-start">
        <div>Numero</div>
        aaaaaaaaaaaaaa
      </div>
        <div class="col align-self-center">
        <div>CEP</div>
        aaaaaaaaaaaaaa
        </div>
        <div class="col align-self-end">
        <div>Estado</div>
        aaaaaaaaaaaaaa
                <?php
                  // switch($data['estado']) {
                  //   case "MA":
                  //     echo '<option value="MA"> Maranhão </option>';
                  //     break;

                  //   case "SP":
                  //     echo '<option value="SP"> São Paulo </option>';
                  //     break;

                  //   case "RJ":
                  //     echo '<option value="RJ"> Rio de Janeiro </option>';
                  //     break;

                  //   case "MG":
                  //     echo '<option value="MG"> Minas Gerais </option>';
                  //     break;

                  //   case "ES":
                  //     echo '<option value="ES"> Espírito Santo </option>';
                  //     break;

                  //   case "GO":
                  //     echo '<option value="GO"> Goiás </option>';
                  //     break;

                  //   case "MT":
                  //     echo '<option value="MT"> Mato Grosso </option>';
                  //     break;

                  //   case "MS":
                  //     echo '<option value="MS"> Mato Grosso do Sul </option>';
                  //     break;

                  //   case "AP":
                  //     echo '<option value="AP"> Amapá </option>';
                  //     break;

                  //   case "PA":
                  //     echo '<option value="PA"> Pará </option>';
                  //     break;

                  //   case "AM":
                  //     echo '<option value="AM"> Amazonas </option>';
                  //     break;

                  //   case "AC":
                  //     echo '<option value="AC"> Acre </option>';
                  //     break;

                  //   case "PR":
                  //     echo '<option value="PR"> Paraná </option>';
                  //     break;

                  //   case "RS":
                  //     echo '<option value="RS"> Rio Grande do Sul </option>';
                  //     break;

                  //   case "RN":
                  //     echo '<option value="RN"> Rio Grande do Norte </option>';
                  //     break;

                  //   case "CE":
                  //     echo '<option value="CE"> Ceará </option>';
                  //     break;

                  //   case "PI":
                  //     echo '<option value="PI"> Piauí </option>';
                  //     break;

                  //   case "RS":
                  //     echo '<option value="PB"> Paraíba </option>';
                  //     break;
                  // }
                ?>
                <!--
                <option value="MA" selected="True"> Maranhão </option>
                <option value="SP"> São Paulo </option>
                <option value="RJ"> Rio de Janeiro </option>
                <option value="GO"> Goiás </option>
                <option value="MG"> Minas Gerais </option>
                <option value="MT"> Mato Grosso </option>
                <option value="MS"> Mato Grosso do Sul </option>
                <option value="AP"> Amapá </option>
                <option value="PA"> Pará </option>
                <option value="AM"> Amazonas </option>
                <option value="AC"> Acre </option>
                <option value="ES"> Espirito Santo </option>
                <option value="PR"> Paraná </option>
                <option value="RS"> Rio grande do Sul </option>
                <option value="RN"> Rio Grande do Norte </option>
                <option value="CE"> Ceará </option>
                <option value="PI"> Piauí </option>
                <option value="PB"> Paraíba </option> -->
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col align-self-start">
          <div>Email</div>
          aaaaaaaaaaaaaa
        </div>
        <div class="col align-self-center">
          <div>Celular</div>
          aaaaaaaaaaaaaa
        </div>
        <div class="col align-self-end">
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
      
    </div>
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
    <?php echo $data['habilidade']; ?>
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
    <hr class="border border-dark">
    <div class="container">
    <?php echo $data['certificacao']; ?>
    </div>
        <!-- <input type="file" name="CurriculoCertificado" id="CurriculoCertificado"> -->
              </div>
      </div><br>
      <?php
            // mysqli_close($conn);
      ?> 
        </main>
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