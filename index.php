<!DOCTYPE html>
<html lang="pt_br">
<head>
    <?php
        include_once('pages/header.php');
    ?>
    <title>Início</title>
</head>
<body class="back-page">


<nav class="navbar navbar-light">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><i class="fas fa-home"></i> Início</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pages/pessoal.php"><span class="fas fa-user"></span> Pessoal</a></li>
        <li><a href="pages/profissional.php"><i class="fas fa-user-tie"></i>  Profissional</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="panel panel-inicial">

    Bem vindo ao meu espaço.
    <br>
    Fique a vontade para navegar.
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    E para o caso de não nos vermos mais, Bom Dia, Boa Tarde e Boa Noite...
 
</div>

<footer class="main-footer footer-landpage"> 
        <div style="text-align: center">
        <strong>Programação WEB</strong><br>
        Desenvolvido por: boollerd 
</div>
    
</footer>

<?php
  include_once('pages/js.php');
?>
</body>
</html>