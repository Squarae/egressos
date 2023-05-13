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
            //         FROM tblaluno
            //         WHERE idConta = '$ID'";

            // $query = mysqli_query($conn,$sql);

            // if(mysqli_num_rows($query) > 0) {
            //   $Flag += 1;
            // }

            // $data = mysqli_fetch_array($query);
        ?>
        <title> Dados pessoais </title>
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
        .foto{
          width: 50%;
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
        <li class="breadcrumb-item active" aria-current="page">Dados pessoais</li>
        <li class="breadcrumb-item active" aria-current="page">Endereço</li>
        <li class="breadcrumb-item active" aria-current="page">Formação Academica</li>
        <li class="breadcrumb-item active" aria-current="page">Area profissional</li>
        <li class="breadcrumb-item active" aria-current="page">Experiência profissional</li>
      </ol>
    </nav>
  </div>
  <br><h3> Dados pessoais </h3><br>
    <form action="insereDadosPessoais.php" method="post">
        <input type="hidden" name="idConta" value="<?php echo $ID; ?>">
        <input type="hidden" name="flag-control" value="<?php echo $Flag; ?>">
        <div class="row g-3">
          <label for="inputEmail4" class="form-label">Nome</label><br>
          <div class="col">
            <input type="text" maxlength="40" class="form-control" placeholder="Primeiro Nome" aria-label="First name" id="DadosPessoaisNomeEgresso" name="DadosPessoaisNomeEgresso" value="<?php if($data == null){ echo ''; }else{ echo $data['nome']; } ?>">
          </div>
          <!-- <div class="col">
            <input type="text" maxlength="40" class="form-control" placeholder="Sobrenome" aria-label="Last name" id="DadosPessoaisSobrenomeEgresso" name="DadosPessoaisSobrenomeEgresso" value="<?php if($data == null){ echo ''; }else{ echo $data['sobrenome']; } ?>">
          </div> -->
        </div>
        <div class="col">
          <label for="inputEmail4" class="form-label">Data de nascimento</label><br>
          <input type="date" class="form-control" min="1922-06-20" max="2004-06-20" required placeholder="Ex.: 12/02/2004" id="DadosPessoaisDataNascEgresso" name="DadosPessoaisDataNascEgresso" value="<?php if($data == null){ echo ''; }else{ echo $data['dataNasc']; } ?>">
            <label for="Genero">Genero</label><br>
            <select id="DadosPessoaisGeneroEgresso" name="DadosPessoaisGeneroEgresso" class="form-control">
            <option value="nd"selected="True"></option>
            <option value="M"> Masculino </option>
            <option value="F"> Feminino </option>
            <option value="ND"> Não declarar </option>
            </select>
        </div>
        <div class="col">
          <label for="CorRaca"> Cor ou Raça </label><br>
          <select id="DadosPessoaisCorRacaEgresso" name="DadosPessoaisCorRacaEgresso" class="form-control">
            <option value="nd" selected="True"></option>
            <option value="Branca"> Branca </option>
            <option value="Preta"> Preta </option>
            <option value="Parda"> Parda </option>
            <option value="Amarela"> Amarela </option>
            <option value="Indigena"> Indigena </option>
            <option value="ND"> Não declarar </option>
            </select>
        </div> 
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">CPF</label><br>
          <input type="text" maxlength="14" class="form-control" id="DadosPessoaisCPFEgresso" name="DadosPessoaisCPFEgresso" placeholder="Ex.: 123.456.789-09" value="<?php if($data == null){ echo ''; }else{ echo $data['cpf']; } ?>">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Numero da identidade</label><br>
          <input type="text" class="form-control" id="DadosPessoaisNumRGEgresso" name="DadosPessoaisNumRGEgresso" placeholder="Ex.: 023946302010-3" value="<?php if($data == null){ echo ''; }else{ echo $data['rg']; } ?>">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Orgão Emissor</label><br>
          <input type="text" class="form-control" id="DadosPessoaisOrgEmissorEgresso" name="DadosPessoaisOrgEmissorEgresso" placeholder="Ex.: SSP-MG" value="<?php if($data == null){ echo ''; }else{ echo $data['orgaoEmissor']; } ?>">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Celular</label><br>
          <input type="tel" maxlength="14" class="form-control" id="DadosPessoaisCelularEgresso" name="DadosPessoaisCelularEgresso" placeholder="Ex.: (98)988123748" value="<?php if($data == null){ echo ''; }else{ echo $data['celular']; } ?>">
        </div>
      </div><br>
      <input type="button" id="btn-dadosPessoais" value="Continuar" class="btn btn-primary" onclick="validaDadosPessoais()">
      </form>
      
</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>