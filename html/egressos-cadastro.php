<!DOCTYPE html>
<html>
    <head>
        <?php
            // session_start();
            // if((isset($_SESSION['login']) == true) and (isset($_SESSION['senha']) == true)) {
            //     header('location: egressos-dados-pessoais.php');
            // }

        ?>
        <title> Cadastro </title>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <link rel="icon" type="image/x-icon" href="imagens/graduation-hat-material-design-png_131387.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
          main{
          padding: 10%;
          padding-top: 5%;
          }
          .logo{
          margin-top: -10%;
        }
        .conta{
          padding: 10%;
          margin-top: -18%;
        }
        #olho {
          text-decoration: underline;
          color: 0d6efd;
          cursor: pointer;
        }
        #olho2 {
          text-decoration: underline;
          color: 0d6efd;
          cursor: pointer;
        }
        </style>
      </head>
      <script type="text/javascript" src="scripts/javascript.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
      <body>
        <header>
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
                        <a class="nav-link" aria-current="page" href="egressos-login.php">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active link-secondary" href="#">Cadastro</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link" href="egressos-empresa.php">Cadastro de Empresa</a>
                      </li> -->
                      <!-- <li class="nav-item">
                        <a class="nav-link" href="egressos-curriculo.php">Perfil</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link ">Disabled</a>
                      </li> -->
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
        <main>
          <form action="insereAluno.php" method="post">
              <br><h3> Cadastro </h3><br>
            <div class="mb-3">
                <label for="inputEmail4" class="form-label">Email</label><br>
                <input type="email" class="form-control" name="emailEgresso" id="emailEgresso" placeholder="Ex.: joaoferreira@gmail.com"><br>
                <input type="email" class="form-control" name="emailConfirmEgresso" id="emailConfirmEgresso" placeholder="Confirme o seu email">
              </div><br>
              <label for="inputPassword4" class="form-label">Senha</label><br>
              <div class="input-group">
                <input type="password" class="form-control" name="senhaEgresso" id="senhaEgresso" minlength="8" maxlength="16" placeholder="Ex.: Slz#3@75">
                <span class="input-group-text" id="olho"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg></span>
                </div>
                <i class="fs-6">*Limite mínimo de 8 e máximo 16 caracteres, com letras maiúsculas e minúsculas, com números e caracteres especiais; @, #, $, %</i>
                <br><br>
                <div class="input-group">
                <input type="password" class="form-control" name="senhaConfirmEgresso" id="senhaConfirmEgresso" minlength="8" maxlength="16" placeholder="Confirme a sua senha">
                <span class="input-group-text" id="olho2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg></span>
              </div><br>
              <input type="button" id="btn-envia" value="Cadastrar-se" class="btn btn-primary" onclick="validaCadastro()">
          </form>
        </main>
        <div class="conta">
          <a href="egressos-login.php" class="btn btn-success">Logar em uma conta já cadastrada</a>
        </div>
      </body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <script>
        var senha = $('#senhaEgresso');
        var olho= $("#olho");

        olho.mousedown(function() {
          senha.attr("type", "text");
        });

        olho.mouseup(function() {
          senha.attr("type", "password");
        });
        // para evitar o problema de arrastar a imagem e a senha continuar exposta, 
        //citada pelo nosso amigo nos comentários
        $( "#olho" ).mouseout(function() { 
          $("#senhaEgresso").attr("type", "password");
        });

        

        //CONFRIMAR SENHA

        var Csenha = $('#senhaConfirmEgresso');
        var olho2= $("#olho2");

        olho2.mousedown(function() {
          Csenha.attr("type", "text");
        });

        olho2.mouseup(function() {
        Csenha.attr("type", "password");
        });
        // para evitar o problema de arrastar a imagem e a senha continuar exposta, 
        //citada pelo nosso amigo nos comentários
        $( "#olho2" ).mouseout(function() { 
          $("#senhaConfirmEgresso").attr("type", "password");
        });
      </script>
      </html>