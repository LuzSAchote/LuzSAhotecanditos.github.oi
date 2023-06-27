<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CANDIDATOS A SELECCION</title>
         <!-- importar jquery -->
          <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
          <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <!-- Optional theme -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

          <!-- Latest compiled and minified JavaScript -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
          <!-- IMPORTACION DE API KEY DE GOOGLE MAPS -->
  		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0Ko6qUa0EFuDWr77BpNJOdxD-QLstjBk&libraries=places&callback=initMap"></script>
    <style>
    nav{
      background-color:#F5F5F5
    }
    body{
      /* background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/CNE_Ecuador.svg/1280px-CNE_Ecuador.svg.png');
      background-repeat: no-repeat; */
      background-color:#CDF1EA
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-defaults">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>"><b><i>BIENVENIDOS</b></i></b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url(); ?>/nuevos/normativas"><b><i>NORMATIVAS</i></b><span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b><i>MIEMBROS</i></b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url();?>/nuevos/candidatos">Candidatos</a></li>
            <li><a href="<?php echo site_url();?>/nuevos/index">Listado</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b><i>SELECCION</i></b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url(); ?>/reportes/presidentes">PRESIDENTES</a></li>
            <li><a href="<?php echo site_url(); ?>/reportes/nacionales">ASAMBLEISTAS NACIONALES</a></li>
            <li><a href="<?php echo site_url(); ?>/Reportes/provinciales">ASAMBLEISTAS PROVINCIALES</a></li>
            <li><a href="<?php echo site_url(); ?>/reportes/general">ASAMBLEISTAS GENERALES</a></li>
            <li><a href="<?php echo site_url(); ?>/reportes/ideologia">IDEOLOGIA</a></li>
            <!-- <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
