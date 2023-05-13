<!DOCTYPE html>
<html>
<head>
    <title> Recuperação de senha </title>
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
</style>
</head>
<script type="text/javascript"src="scripts/javascript.js"></script>
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
                    <a class="nav-link active link-secondary" aria-current="page" href="egressos-login.php">Login</a>
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
      <form action="" method="post">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Insira a sua nova senha </label>
            <input type="password" class="form-control" id="recuperacaoSenha" name="recuperacaoSenha">
          </div>
          <i class="fs-6">*Limite mínimo de 8 e máximo 16 caracteres, com letras maiúsculas e minúsculas, com números e caracteres especiais; @, #, $, %, diferentes entre si</i>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Confirme a sua senha </label>
            <input type="password" class="form-control" id="recuperacaoSenhaConfirm" name="recuperacaoSenhaConfirm">
          </div>
          <button type="button" class="btn btn-primary" id="btn-recuperacaoEmailSenha" onclick="validaRecuperacaoSenha()">Alterar senha</button>
        </form>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>