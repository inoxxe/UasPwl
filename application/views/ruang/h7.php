<html lang="en">
<head>
  <title>E-class</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
    <h1>Peminjaman Kelas</h1>
            <h1>Selamat Datang <b><?php echo $this->session->userdata('nama'); ?></b></h1>
</div>

  
<table>
<div class="container">
<div class="row">
<div class="col">
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <?php $ruang = "h7.1";?>
    <a href="<?php echo base_url('index.php/control_peminjaman/pilih/').$ruang;?>">h7.1</a>

  </div>
</div>
<div class="container">
<div class="row">
<div class="col">
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <?php $ruang = "h7.2";?>
    <a href="<?php echo base_url('index.php/control_peminjaman/pilih/').$ruang;?>">h7.2</a>
  </div>
</div>
<div class="container">
<div class="row">
<div class="col">
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <?php $ruang = "h7.3";?>
    <a href="<?php echo base_url('index.php/control_peminjaman/pilih/').$ruang;?>">h7.3</a>  </div>
</div>
<div class="container">
<div class="row">
<div class="col">
<div class="card" style="width: 18rem;">
  <i class="fa fa-building" style="font-size:36px"></i>
  <div class="card-body">
    <?php $ruang = "h7.4";?>
    <a href="<?php echo base_url('index.php/control_peminjaman/pilih/').$ruang;?>">h7.4</a>
  </div>
</div>
</table>

</body>
</html>