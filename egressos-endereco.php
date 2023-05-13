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
            //         FROM tblendereco
            //         WHERE idConta = '$ID'";

            // $query = mysqli_query($conn,$sql);

            // if(mysqli_num_rows($query) > 0) {
            //   $Flag += 1;
            // }

            // $data = mysqli_fetch_array($query);
        ?>
        <title> Endereço </title>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <link rel="icon" type="image/x-icon" href="imagens/graduation-hat-material-design-png_131387.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
          main,footer{
          padding: 10%;
          padding-top: 5%;
          }
          .logo{
          margin-top: -10%;
        }
        </style>
      </head>
      <script type="text/javascript"src="scripts/javascript.js"></script>
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
                    <li class="breadcrumb-item active" aria-current="page">Endereço</li>
                    <li class="breadcrumb-item active" aria-current="page">Formação Academica</li>
                    <li class="breadcrumb-item active" aria-current="page">Area profissional</li>
                    <li class="breadcrumb-item active" aria-current="page">Experiência profissional</li>
                  </ol>
                </nav>
              </div>
              <br><h3> Endereço </h3><br>
            <form action="insereEndereco.php" method="post">
            <input type="hidden" name="idConta" value="<?php echo $ID; ?>">
            <input type="hidden" name="flag-control" value="<?php echo $Flag; ?>">
        <div class="form-group">
          <label for="inputAddress">Rua</label><br>
          <input type="text" maxlength="80" class="form-control" id="EnderecoRuaEgresso" name="EnderecoRuaEgresso" placeholder="Ex.:Rua Gustavo Guanabara" value="<?php if($data == null){ echo ''; }else{ echo $data['logradouro']; } ?>">
        </div>
        <div class="form-group">
          <label for="inputAddress">Numero</label><br>
          <input type="number" maxlength="80" class="form-control" id="EnderecoNumeroEgresso" name="EnderecoNumeroEgresso" placeholder="Ex.:472" min="0" value="<?php if($data == null){ echo ''; }else{ echo $data['numero']; } ?>">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Bairro</label><br>
          <input type="text" maxlength="80" class="form-control" id="EnderecoBairroEgresso" name="EnderecoBairroEgresso" placeholder="Ex.: Deodoro" value="<?php if($data == null){ echo ''; }else{ echo $data['bairro']; } ?>">
        </div>
        <div>
          <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label><br>
            <input type="text" maxlength="80" class="form-control" id="EnderecoCidadeEgresso" name="EnderecoCidadeEgresso" placeholder="Ex.: Atins" value="<?php if($data == null){ echo ''; }else{ echo $data['cidade']; } ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEstado">Estado</label><br>
            <select id="EnderecoEstadoEgresso" name="EnderecoEstadoEgresso" class="form-control">
            <option value="nd" selected="True"></option>
            <option value="MA"> Maranhão </option>
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
            <option value="PB"> Paraíba </option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputCEP">CEP</label><br>
            <input type="text" maxlength="10" class="form-control" id="EnderecoCEPEgresso" name="EnderecoCEPEgresso" placeholder="Ex.:65.200-000" value="<?php if($data == null){ echo ''; }else{ echo $data['cep']; } ?>">
          </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Complemento</label><br>
            <input type="text" maxlength="40" class="form-control" id="EnderecoComplementoEgresso" name="EnderecoComplementoEgresso" placeholder="Ex.:Bloco:'A',Alameda Sul, Residencial Vila Nova" value="<?php if($data == null){ echo ''; }else{ echo $data['complemento']; } ?>">
          </div><br>
        <!-- <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Clique em mim
            </label>
          </div>
        </div> -->
          <input type="button" id="btn-endereco" value="Continuar" class="btn btn-primary" onclick="validaEndereco()">
          </form>
          <?php mysqli_close($conn); ?>
          </main>
      </body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>