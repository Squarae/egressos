<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="graduation-hat-material-design-png_131387.jpg">
    <title>Perfil de Empresa</title>
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
        .borda{
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img class="logo" src="graduation-hat-material-design-png_131387-removebg-preview (1).png" width="100"></a>
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
                    <a class="nav-link" href="egressos-cadastro.php">Cadastro</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link active link-secondary" href="#">Cadastro de Empresa</a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a class="nav-link ">Disabled</a>
                  </li>  -->
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <div class="borda">
            <img src="09a503901819e475a3c352ddd3e528b3-curso-de-construcao-de-empresa.png" width="20%" class="rounded mx-auto d-block rounded-circle">
        </div><br>
        <div class="my-3">
            <label for="" class="form-label">CPF:</label>
            <input type="text" class="form-control" name="cpf" id="cpf">
        </div>

        <div class="my-3">
            <label for="" class="form-label">CPNJ:</label>
            <input type="text" class="form-control" name="cpnj" id="cpnj">
        </div>
        <div class="my-3">
            <label for="" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="my-3">
            <label for="" class="form-label">Razão Social:</label>
            <input type="text" class="form-control" name="razao" id="razao">
        </div>
        <div class="my-3">
            <label for="" class="form-label">Nome Fantasia:</label>
            <input type="text" class="form-control" name="nomeFan" id="nomeFan">
        </div>

        <div class="my-3">
            <label for="" class="form-label">Tipo:</label>
            <input type="text" class="form-control" name="tipo" id="tipo">
        </div>
        <div>
            <button type="button" class="btn btn-primary" >Copiar Link do Perfil</button>
            <button type="button" class="btn btn-primary" >Download do Perfil</button>
            <a href="egressos-empresa.php" type="button" class="btn btn-primary" >Alterar Dados</a>
        </div>
    </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </html>