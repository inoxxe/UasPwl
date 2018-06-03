<!DOCTYPE html>
<!--
Template Name: Miresa
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>SI-DIN | Mahasiswa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url('asset/styles/layout.css'); ?>">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay light" style="background-image:url('<?php echo base_url('images/udinus.jpg')?>');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#" title="Call Us"><i class="fa fa-phone"></i></a></li>
        <li><a href="#" title="Send a Mail"><i class="fa fa-envelope-o"></i></a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="">SI-DIN</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#">LOGOUT</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
 <div class="cotainer">
  
    <!-- main body -->
    <!-- ################################################################################################ -->
    
    <!-- ################################################################################################ -->
    <article>
      <div class="container">
        <h1>Peminjaman Kelas</h1>
        <h1>Selamat Datang <b><?php echo $this->session->userdata('nama'); ?></b></h1>
      </div>
    </article>

  
    
<form action="<?php echo base_url().'index.php/control_peminjaman/proses_kelas' ?>" method="post" name="form">
  <div class="form-group col-md-12">
      <label for="inputState">Pilih Hari</label>
      <select <select class="form-control" name="hari" >
        <option selected value="senin">Senin</option>
        <option value="selasa">Selasa</option>
        <option value="rabu">Rabu</option>
        <option value="kamis">Kamis</option>
        <option value="jumat">Jumat</option>
      </select>
    </div>
    <div class="form-group col-md-12">
      <label for="inputState">Pilih Jam</label>
      <select id="inputState" name="jam" class="form-control">
        <option value="07.00-09.30" selected>07.00-09.30</option>
        <option value="07.00-08.40" >07.00-08.40</option>
        <option value="08.40-10.20" >08.40-10.20</option>
        <option vlaue="09.30-12.00" >09.30-12.00</option>
        <option value="10.20-12.00" >10.20-12.00</option>
        <option value="12.30-14.10" >12.30-14.10</option>       
        <option value="12.30-15.00" >12.30-15.00</option>
      </select>
      <div class="form-group">
      <label for="exampleFormControlTextarea1">Keperluan</label>
      <textarea name=keperluan class="form-control" id="exampleFormControlTextarea1" rows=""></textarea>
      </div>
      <input type="hidden" name="nim" value="<?php echo $this->session->userdata('username'); ?>  " ></br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <button type="submit" name= "logout" class="btn btn-primary" >Kembali</button>


    </div>
    
</form>

</div>

   
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">SI-DIN</a></p>
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<!-- JAVASCRIPTS -->
<script src="<?php echo base_url('asset/scripts/jquery.min.js');?>"></script>
<script src="<?php echo base_url('asset/scripts/jquery.backtotop.js');?>"></script>
<script src="<?php echo base_url('asset/scripts/jquery.mobilemenu.js');?>"></script>
</body>
</html>