<!DOCTYPE html>
<html>
<head>
        <?php
            // session_start();
            // if((isset($_SESSION['login']) == true) and (isset($_SESSION['senha']) == true)) {
            //     header('location: indexlogin.php');
            // }

        ?>
    <title> Login </title>
    <meta charset='utf-8'>
    <meta lang="pt-br">
    <link rel="icon" type="image/x-icon" href="imagens/graduation-hat-material-design-png_131387.jpg">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
        main, footer{
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
</style>
</head>
<script type="text/javascript"src="scripts/javascript.js"></script>
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
                    <a class="nav-link active link-secondary" aria-current="page" href="#">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="egressos-cadastro.php">Cadastro</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="egressos-empresa.php">Cadastro de Empresa</a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
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
    <form action="verificaLogin.php" method="post">
    <br><h3> Login </h3><br>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> Email </label><br>
          <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" name="loginEmail" placeholder="Ex.: joaomarques@gmail.com">
          <div id="emailHelp" class="form-text">Nós não compartilhamos o seu email.</div>
        </div>
        <label for="exampleInputPassword1" class="form-label"> Senha </label><br>
        <div class="input-group">
          <input type="password" class="form-control" id="loginSenha" name="loginSenha" minlength="8" maxlength="16" placeholder="Ex.: Slz#3@75">
          <span class="input-group-text" id="olho"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg></span>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="loginLembrar" name="loginLembrar">
          <label class="form-check-label" for="exampleCheck1">Lembrar-se de mim</label>
        </div>
        <div class="text-break">
            <a href="egressos-recuperacao-de-senha.php" class="link-primary" id="esqueceuSenha">Esqueceu a sua senha?</a>
        </div><br>
        <input type="button" id="btn-login" value="Entrar" class="btn btn-primary" onclick="validaLogin()">
      </form>
    </main>
    <div class="conta">
      <a href="egressos-cadastro.php" class="btn btn-success">Cadastrar uma conta</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
  var senha = $('#loginSenha');
  var olho= $("#olho");

  olho.mousedown(function() {
    senha.attr("type", "text");
  });

  olho.mouseup(function() {
    senha.attr("type", "password");
  });

  $( "#olho" ).mouseout(function() { 
    $("#loginSenha").attr("type", "password");
  });
</script>
</html>