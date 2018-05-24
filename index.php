<!DOCTYPE html>
<html lang="pt_br">
<head>
    <?php include_once("header.php"); ?>
    <title>Israel Vieira - Sobre Mim</title>
</head>
<body class="back-page">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"> ISRAEL VIEIRA</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#"> About Me</a></li>
      </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container-main">

      <div>
        <div class="bloco">

          <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>

          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 sobre-mim">

            <h1>SOBRE MIM</h1>
            <p> <strong>Nome:</strong> Israel Vieira Peixoto</p>
            <p> <strong>Cursando:</strong> Análise e Desenvolvimento de Sistemas</p>
            <p> <strong>Email:</strong> israelvipe@gmail.com</p>
            <div class="texto-bloco">
              <p>Desde 2016 estudo na Faculdade de Tecnologia de Taubaté (FATEC), desenvolvi diversos projetos durante este período, 
              como um sistema para gerenciamento de projetos e sistemas distribuídos em arquitetura cliente-servidor,
              tudo seguindo as praticas de Engenharia de Software.<br>
              Fiz estagio em uma empresa de desenvolvimento web, onde tive contato com diversas tecnologias do mundo web,
              como HTML, CSS, Javascript, JQuery, AngularJS, Cordova, Ionic, PHP, entre outras, 
              assim como adquiri experiencia com Bancos de dados MySQL e servidores FTP (Filezilla)<br>
              Atualmente estou desenvolvendo jogos digitais, um como trabalho para disciplina de Laboratório de Engenharia de Software,
              e outro como trabalho de graduação para a faculdade, para estes projetos utilizo a engine Unity, que faz uso da Linguagem C#,
              também possuo experiencia com as linguagens Java, Python e C++.
              </p>
            </div>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3"></div>

          <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 painel-canto">
            <h3>SITE</h3>
            <p><a href="#">Home</a></p>
            <p><a href="#">Portfolio</a></p>
            <p><a href="#">Contato</a></p>
            <div class="redes-sociais">
                  <a href="#"><img src="img/facebook.png"></a>
                  <a class="meio" href="#"><img src="img/linkedin.png"></a>
                  <a href="#"><img src="img/youtube.png"></a>
            </div>
          </div>
        </div>
        <div class="clearBoth"></div>
      </div>
  </div>

  <footer class="main-footer footer-landpage">
    <div class="pull-left hidden-xs">
      <div style="text-align: left;">
        <strong> &nbsp;&nbsp;&nbsp; Fatec Taubaté</strong><br>
        &nbsp;&nbsp;&nbsp; &copy; <?php echo date('Y'); ?> Todos os Direitos Reservados
      </div>
    </div>
    <div class="pull-right hidden-xs">
      <div style="text-align: right;">
        <strong>Curso de Análise e Desenvolvimento de Sistemas &nbsp;&nbsp;&nbsp;</strong><br>
        <strong>Desenvolvido por: Israel &nbsp;&nbsp;&nbsp;</strong>
      </div>
    </div>
  </footer>

  <script src="js/vendor/jquery-3.3.1.js"></script>
  <script src="js/vendor/bootstrap/bootstrap.js"></script>
  
</body>
</html>