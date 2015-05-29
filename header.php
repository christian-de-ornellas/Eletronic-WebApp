<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MazaBox</title>
	  <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
<header><div class="header-logotipo"><img src="img/header.topo.png" ></div></header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class=""></i><i class="fa fa-user-plus"></i></i> Novos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="cadastrar-clientes">Cliente</a></li>
            <li><a href="cadastrar-promocaos">Promoção</a></li>
            <li class="divider"></li>
            <li><a href="gerar-cupon">Gerar um cupon</a></li>
            
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-folder-open"></i> Consultas<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Nome</a></li>
            <li><a href="#">Cpf</a></li>
            <li><a href="#">Rg</a></li>
            <li class="divider"></li>
            <li><a href="#">E-mail</a></li>
            <li class="divider"></li>
            <li><a href="#">Nota fiscal</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="fa fa-bar-chart"></i> Relatórios <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-envelope-o"></i> Enviar e-mail ao suporte</a></li>
        
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> <i class="fa fa-clock-o"></i> 
        <!-- Horarário de brasília -->
        <?php $dataHora = date("d/m/Y h:i:s"); echo $dataHora;?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="fa fa-share-square-o"></i> Perfil</a></li>
            <li><a href="#"><i class="fa fa-pencil-square-o"></i> Alterar</a></li>
            <li class="divider"></li>
             <li><a href="#"><i class="fa fa-power-off"></i> Sair do Sistema</a></li>
           
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<aside >
	<div class="list-group">
  <a href="#" class="list-group-item active">
      <p>Ferramentas</p>
  </a>
  <a href="#" class="list-group-item">Cadastrar cupon</a>
  <a href="#" class="list-group-item">2ª via de cupon</a>
  <a href="cadastrar-clientes" class="list-group-item">Cadastrar cliente</a>
  <a href="gerar-cupon" class="list-group-item">Gerar um cupon</a>
</div>
</aside>
<section>