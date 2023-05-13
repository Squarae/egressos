<!DOCTYPE html>
<html>
    <head>
        <?php
            // session_start();
            // if((isset($_SESSION['login']) == true) and (isset($_SESSION['senha']) == true)) {
            //     header('location: indexlogin.php');
            // }

        ?>
        <title> Egressos </title>
        <meta charset="UTF-8">
        <meta lang="pt-br">
        <link rel="icon" type="image/x-icon" href="imagens/graduation-hat-material-design-png_131387.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, maximum-scale=10, minimum-scale=1.0"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <style>
        .descricao{
        padding: 7%;
        padding-top: 5%;
        }
        .selector-for-some-widget {
          box-sizing: content-box;
        }
        .logo{
          margin-top: -10%;
        }
        .legendas{
          font-size: 150%;
          color: white;
          -webkit-text-stroke-color: black;
          -webkit-text-stroke-width: thin;
        }
        .text-start{
          padding: 5%;
        }
        /* .rounded{
          padding: 1%;
        } */
        .footer{
          background-color: gray;
          padding: 10%;
          padding-top: 2%;
          /* min-width: 99.5%; */
        }
        .border{
          padding: 5%;
        }
        .cinza{
          background-color: rgba(128, 128, 128, 0.24);
        }
        .ao-topo{
          text-align: center; 
        }
        .ao-fim{
          text-align: center;
        }
      </style>
      </head>
      <body>
      <div class="invisivel">
            <span id="topo"></span>
          </div>
          <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img class="logo" src="imagens/graduation-hat-material-design-png_131387-removebg-preview (1).png" width="100"></a>
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
                        <a class="nav-link" href="egressos-empresa.php">Cadastro de Empresa</a>
                      </li> -->
                      <!-- <li class="nav-item">
                        <a class="nav-link" href="egressos-curriculo.php">Perfil</a>
                      </li> -->
                    </ul>
                  </div>
                </div>
              </nav>
          </header>
          <main>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="4000">
                  <img src="imagens/Reforma-do-Iema-Centro-esta-quase-pronta-3.jpeg" width="100" height="600" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="legendas">
                    <h5  class="display-4">Iema</h5>
                  </div>
                    <p class="legendas">Instituto de Educação, Ciência e Tecnologia do Maranhão.</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="7000">
                  <img src="imagens/IEMA-em-Presidente-Dutra080220_Foto-Secap0226.jpg" width="100" height="600" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="legendas">
                    <h5  class="display-4">Polos por todo o estado</h5>
                    </div>
                    <p class="legendas">O IEMA atua em parceria com prefeituras, associações, sindicatos e movimentos sociais chegando a 71 municípios em 2017.</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                  <img src="imagens/IEMA_de_Cururupu.jpg" width="100" height="600" class="d-block w-100">
                  <div class="carousel-caption d-none d-md-block">
                    <div class="legendas">
                    <h5  class="display-4">Contratação</h5>
                    </div>
                    <p class="legendas">Aqui você pode encontar a vaga de emprego ideal no nosso instituto.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Proxímo</span>
              </button>
            </div>
            <div class="ao-fim"><br>
          <a href="index.php#fim"><img src="imagens/unnamed.gif" width="20%"></a> 
        </div>
  <div class="descricao">
    <div class="display-6 text-center">
      Sobre a Instituição
    </div><br>
    <div class="border">
        <div class="text-center">
          <img src="imagens/1571922562037.jpeg" width="40%"  class="rounded"> 
        </div><br><br>
        <div class="text-center">
          O Instituto Estadual de Educação, Ciência e Tecnologia do Maranhão (IEMA) é uma autarquia estadual maranhense, vinculada à Secretaria de Estado da Educação, que oferece ensino médio, técnico e superior, contemplando também, de forma não dissociada, o ensino, a pesquisa e a extensão, na área tecnológica e no âmbito da pesquisa aplicada.
        </div>
      </div><br>
      <div class="display-6 text-center">
        Histórico da Instituição
      </div><br>
      <div class="border">
        <div class="text-center">
          <img src="imagens/28266_iema_integral_bilingue_1072170171881989073.jpeg" width="40%" class="rounded">  
        </div><br><br>
        <div class="text-center">
          Anteriormente a instituição foi denominada Universidade Virtual do Maranhão (UNIVIMA), que havia sido criada pela Lei Estadual n° 7.934 de 14 de julho de 2003, sancionada pelo governador José Reinaldo Tavares. Estava vocacionada para o ensino virtual em nível técnico, universitário e de educação continuada na modalidade de educação a distância (EAD).
        </div>
      </div><br>
      <div class="display-6 text-center">
        Formação Profissional
      </div><br>
      <div class="border">
        <div class="text-center">
          <img src="imagens/WhatsApp-Image-2021-09-24-at-17.06.55-1.jpeg" width="40%" class="rounded">  
        </div><br><br>
        <div class="text-center">
          Em abril de 2020, foi lançada a plataforma Maranhão Profissionalizado, com o objetivo de fornecer qualificação profissional em cursos online e gratuitos para o público geral, voltados para a área da Educação e para geração de emprego e renda.
        </div>
      </div>
  </div>
  <div class="cinza">
  <div class="descricao">
    <div class="display-6 text-center">
        Sobre o Site
    </div><br>
    <div class="border border-dark">
        <div class="text-center">
          <img src="imagens/graduation-hat-material-design-png_131387-removebg-preview (1).png" width="40%" class="rounded">  
        </div><br><br>
        <div class="text-center">
          Aqui você poderá fazer o seu curriculo bem como edita-lo sempre que for necessário.
        </div>
      </div><br>
      <div class="display-6 text-center">
        Ferramentas do site
      </div><br>
      <div class="border border-dark">
        <div class="text-center">
          <img src="imagens/tools-vector-icon-png_247869.jpg" width="30%" class="rounded">  
        </div><br><br>
        <div class="text-center">
          Você poderá ter acesso à vagas de emprego uma vez quando forem ofertadas à você.
        </div>
      </div><br>
      <div class="display-6 text-center">
        Tutorial
      </div><br>
      <div class="border border-dark">
        <div class="text-center">
          <img src="imagens/forumonlinewebinarseminartutorial-glyph-icon--vector-iso-png_285298.jpg" width="30%"  class="rounded">  
        </div><br><br>
        <div class="text-center">
          Clique em <a href="egressos-cadastro.php">cadastrar</a> para criar uma conta, ou se você já tem uma conta, clique em <a href="egressos-login.php">login</a>, para entrar com uma conta já criada. 
        </div>
      </div>
  </div>
</div>
<div class="invisivel">
            <span id="fim"></span>
          </div>
      <div class="footer">
            <div class="cards">
            <div class="row">
            <div class="col">
        </div>
              <div class="col"><br>
            <div class="card text-center" style="width: 18rem;">
              <img src="imagens/1576142432.jpg" class="card-img-top" height="150">
              <div class="card-body">
                <h5 class="card-title">Cadastre-se</h5>
                <p class="card-text">Receba ofertas de emprego de maneira simples e fácil.</p>
                <a href="egressos-cadastro.php" class="btn btn-primary">Cadastro</a>
              </div>
            </div>
          </div>
          <div class="col"><br>
            <div class="card text-center" style="width: 18rem;">
              <img src="imagens/academic-skills-coaching_1_0.jpg" class="card-img-top" height="150">
              <div class="card-body">
                <h5 class="card-title">Atualize-se</h5>
                <p class="card-text">Fique atento as mudanças no mercado da sua area profissional.</p>
                <a href="egressos-login.php" class="btn btn-primary">Atualizar curriculo</a>
              </div>
            </div>
          </div>
          <div class="col"><br>
            <div class="card text-center" style="width: 18rem;">
              <img src="imagens/graduation-4137887_1280.jpg" class="card-img-top" height="150">
              <div class="card-body">
                <h5 class="card-title">Entre</h5>
                <p class="card-text">Caso você já tenha uma conta, entre com a sua conta.</p>
                <a href="egressos-login.php" class="btn btn-primary">Login</a>
              </div>
            </div>
          </div>
          <div class="col">
        </div>
          </div>
          <div class="ao-topo"><br>
          <a href="index.php#topo"><img src="imagens/unnamed2.gif" width="20%"></a> 
        </div>
        </div>
      </div>
        </div>
      </main>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      </body>
</html>