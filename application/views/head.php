<!DOCTYPE html>
<html>
<head>
	      <!--Import Google Icon Font-->
	  <link rel="icon" href="<?php echo base_url('assets/images/ic_school_black_36dp_2x.png');?>">
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css');?>"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

    <nav>
    <div class="nav-wrapper red darken-4">
      <a href="<?php echo base_url('hello');?>" class="brand-logo"><img src="<?php echo base_url('assets/images/logo.jpg');?>" width="45px">Telkom Schools Malang</a>
      <a href="#" data-activates="mobile-menu" class="button-collapse">
        <i class="material-icons">menu</i>
      </a>

      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url('hello');?>">Home</a></li>
        <li><a href="<?php echo base_url('hello/guru');?>">Induk Guru</a></li>
        <li><a href="<?php echo base_url('hello/siswa')?>">Induk Siswa</a></li>
        <li><a href="<?php echo base_url('hello/')?>">Induk Karyawan</a></li>
      </ul>

      <ul class="side-nav" id="mobile-menu">
        <li><a href="<?php echo base_url('hello');?>">Home</a></li>
        <li><a href="<?php echo base_url('hello/guru');?>">Induk Guru</a></li>
        <li><a href="<?php echo base_url('hello/siswa')?>">Induk Siswa</a></li>
        <li><a href="<?php echo base_url('hello/')?>">Induk Karyawan</a></li>
      </ul>
    </div>
  </nav>

<script type="text/javascript" src="<?php echo base_url('assets/jquery-2.1.1.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js');?>"></script>

  <script>
    $(document).ready(function(){
      $('.button-collapse').sideNav();
    })
  </script>