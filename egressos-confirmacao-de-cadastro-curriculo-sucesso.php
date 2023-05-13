<!DOCTYPE html>
<html>
<head>
    <title> Sucesso! </title>
    <meta charset='utf-8'>
    <meta lang="pt-br">
    <link rel="icon" type="image/x-icon" href="imagens/graduation-hat-material-design-png_131387.jpg">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body {
        background-color:rgb(176, 231, 184);
        min-height: 100vh;
    }

    main, footer{
        padding: 10%;
        padding-top: 5%;
    }

    .logo{
        margin-top: -10%;
    }

    main {
        background-color: rgb(255, 255, 255);
        margin: auto;
        width: 90%;
    }

    img {
        display: block;
        margin: auto;
    }

    p {
        text-align: center;
        margin-top: 1rem;
        font-size: 25pt;
        font-weight: bold;
    }

    h2 {
        text-align: center;
        margin-top: 2rem;
        font-size: 25pt;
        font-weight: bold;
        color: rgb(82, 81, 81);
    }

    /* button {
        display: block;
        margin: auto;
        margin-top: 3rem;
        padding: 1rem;
        width: 8rem;
        background-color: rgb(138, 223, 126);
        color: white;
        font-weight: bold;
        font-size: 15pt;
        text-shadow: 1px 1px 3px black;
        border: none;
        border-radius: 7px;
    } */

    button:hover {
        background-color: rgb(69, 204, 51);
    }
    .ok-btn{
      text-align: center;
    }

</style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img class="logo" src="imagens/graduation-hat-material-design-png_131387-removebg-preview (1).png" width="100"></a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="logout.php">Logout</a>
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
        <img src="imagens/checkmark-flat.png" alt="">
        <p>Tudo certo!</p>
        <h2>Cadastro de currículo realizado com sucesso.</h2>
        <div class="ok-btn">
        <a href="egressos-curriculo.php" class="btn btn-success">OK</a>
  </div>
    </main>
</body>
</html>