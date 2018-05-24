<!DOCTYPE html>
<html lang="pt_br">
<head>
    <?php
        include_once('header.php');
    ?>
    <title> Perfil Pessoal </title>
</head>
<body class="back-page-pessoal">


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
      <a class="navbar-brand" href="../index.php"><i class="fas fa-home"></i> Início</a>
      <a class="navbar-brand" style="padding-left: 550px;color: green;"></i>Perfil Pessoal</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pessoal.php"><i class="fas fa-user"></i> Pessoal</a></li>
        <li><a href="profissional.php"><i class="fas fa-user-tie"></i>  Profissional</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="panel panel-pessoal">
<div class="esquerda">
    <h4>Nome: Adriano<br>
    <hr>
    Nickname: boollerd<br>
    <hr>
    Idade: 21 anos<br>
    <hr>
    Nacionalidade: brasileira<br>
    <hr>
    Cidade natal: Taubaté<br>
    <hr>
    Formação acadêmica:<br>
    Curso Técnico em Informática concluído em 2014<br>
    Cursando 5º Semestre de ADS na Fatec Taubaté<br>
    <hr>
    Experiência de vida: <br>
    Soldado da Aviação do Exército Brasileiro  (2015)
    <hr>
    Contato: <br>
    boollerd@gmail.com
    </h4>
  
</div>

<div class="direita">
    <h3> <center> Sobre </center></h3>

    Olá,
    sou um jovem estudante da cidade do interior de São Paulo.<br>
    (Ciente que é pouco, mas por hora deve ser suficiente).
    <hr>
    <h3><center>Músicas </center></h3><br>
    Gosto de tudo um pouco: pagode, funk, pop, reggae, rock, samba, etc. Tanto músicas nacionais quanto internacionais.
    <hr>
    <h3><center>Filmes </center></h3>
   "Dia de treinamento",<br> "A vida secreta de Walter Mitty",<br> "Meet Joe Black",<br> "Show de Truman".<br>
    Neste momento são esses que me recordo.
    <hr>
    <h3> <center>Expectativas </center> </h3>
    No momento sem nenhuma, mas sabe como é, a vida é uma caixa de surpresas. 
    <hr>
    <h3><center> Diferencial  </center></h3>
    Prático duolingo e gosto do Japão. 
</div>
</div>




<footer class="main-footer footer-landpage ">
        <div style="text-align: center">
        <strong>Programação WEB</strong><br>
        Desenvolvido por: boollerd 
        </div>            

</footer>

<?php
  include_once('js.php');
?>
</body>
</html>